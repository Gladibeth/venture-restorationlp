

<?php
    //variables for service
    $service_group       = get_field('service');
    $service_tag         = $service_group['tag_service'];
    $service_title       = $service_group['title_service'];
    $service_description = $service_group['description_service'];
    $service_loop        = $service_group['featured_services'];

?>

<?php if ($service_loop) : ?>
    
  <section class="main-services main-content__large pv80">
    <div class="main-content__medium">
      <div class="main-services__content main-grid__custom">
        <div class="main-services__texts main-grid__custom-items">
          <p class="main-tag bg-secundary__light mb-10">
            <?= $service_tag ?>
          </p>
          <div class="main-title mb-40">
            <h2 class="left-mobile">
                <?= $service_title ?>
            </h2>
          </div>
          <p class="main-paragraph mb-40">
                <?= $service_description ?>
          </p>
        </div>

        <?php foreach ($service_loop as $service) : ?>

            <div class="main-grid__custom-items">
            <div class="main-card">
                <div class="main-card__icon">
                <?php
                    // Obtener la URL de la imagen destacada
                    $image_url = get_the_post_thumbnail_url($service->ID, 'full');
                ?>
                <img src="<?php echo esc_url($image_url); ?>" alt="<?= $service->post_title ?>">
                </div>
                <h3 class="main-card__title">
                <?= $service->post_title ?>
                </h3>
                <p class="main-card__paragraph">
                <?= $service->post_content ?>
                </p>
                <a href="service-<?= $service->ID ?>" class="btn-custom light-small">
                <?= __('Request service', 'venture'); ?>
                <svg class="ml-20" xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25" fill="none">
                    <path d="M16.672 13.3973L4.5 13.3973L4.5 11.3973L16.672 11.3973L11.308 6.03326L12.722 4.61926L20.5 12.3973L12.722 20.1753L11.308 18.7613L16.672 13.3973Z" fill="#B51C27"/>
                </svg>
                </a>
            </div>
            </div>

        <?php endforeach; ?>

      </div>
    </div>
  </section>

<?php endif; ?>