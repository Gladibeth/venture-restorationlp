<?php
    //variables for testimonial
    $testimonial_group       = get_field('testimonial');
    $testimonial_tag         = $testimonial_group['tag_testimonial'];
    $testimonial_title       = $testimonial_group['title_testimonial'];
    $testimonial_description = $testimonial_group['description_testimonial'];
    $testimonial_loop        = $testimonial_group['featured_testimonials'];
?>

<?php if ($testimonial_loop) : ?>
  <section class="main-testimonials main-content__large pv80">
    <div class="main-content__medium main-grid main-grid__23">
      <div class="main-testimonials__text">
        <p class="main-tag bg-secundary__blue mb-10">
          <?= $testimonials_tag ?>
        </p>
        <div class="main-title mb-40">
          <h2 class="left-mobile">
            <?= $testimonials_title ?>
          </h2>
        </div>
        <p class="main-paragraph mb-40 ">
          <?= $testimonials_description ?>
        </p>
      </div>
      <div class="main-testimonial__content">
        <div class="main-testimonial__item g-desk">
          <div class=" slider-three">
          
          <?php foreach ($testimonial_loop as $testimonial) : ?>
            <div class="testimonial-card">
              <div class="testimonial-card__icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="55" height="40" viewBox="0 0 55 40" fill="none">
                  <path d="M9.77157 19.6186L14.9365 18.7829C17.3562 18.7829 19.4966 19.6186 21.3579 21.2901C23.3122 22.8686 24.2893 25.2365 24.2893 28.3936C24.2893 31.4579 23.2656 34.0579 21.2183 36.1936C19.1709 38.3294 16.286 39.3972 12.5635 39.3972C8.93401 39.3972 5.90947 38.0044 3.48985 35.2186C1.16328 32.4329 0 28.8579 0 24.4936C0 20.0365 1.67513 15.6258 5.02538 11.2615C8.4687 6.89721 13.3545 3.27578 19.6827 0.397217L20.6599 2.76507C11.912 7.59364 7.53807 12.4686 7.53807 17.3901C7.53807 18.8758 8.28257 19.6186 9.77157 19.6186ZM40.4822 19.6186L45.6472 18.7829C48.0668 18.7829 50.2073 19.6186 52.0685 21.2901C54.0228 22.8686 55 25.2365 55 28.3936C55 31.4579 53.9763 34.0579 51.9289 36.1936C49.8815 38.3294 46.9966 39.3972 43.2741 39.3972C39.6447 39.3972 36.6201 38.0044 34.2005 35.2186C31.8739 32.4329 30.7107 28.8579 30.7107 24.4936C30.7107 20.0365 32.3858 15.6258 35.736 11.2615C39.1794 6.89721 44.0651 3.27578 50.3934 0.397217L51.3706 2.76507C42.6227 7.59364 38.2487 12.4686 38.2487 17.3901C38.2487 18.8758 38.9932 19.6186 40.4822 19.6186Z" fill="#B51C27"/>
                  </svg>
              </div>
    
              <p class="testimonial-card__paragraph">
                <?= $testimonial->post_content ?>
              </p>
              
              <div class="testimonial-card__bottom">
                <div class="testimonial-card__img">
                    <?php
                        // Obtener la URL de la imagen destacada
                        $image_url = get_the_post_thumbnail_url($testimonial->ID, 'full');
                    ?>
                    <img src="<?= $image_url ?>" alt="Image testimonial">
                </div>
                <p class="testimonial-card__name">
                   <?= $testimonial->post_title ?>
                </p>
              </div>
            </div>
          <?php endforeach; ?>
          </div>
        </div>

        <?php if(wp_is_mobile()): ?>
          <div class="main-testimonial__item g-mobile">
            <div>

            <?php foreach ($testimonial_loop as $testimonial) : ?>

              <div class="testimonial-card">
                <div class="testimonial-card__icon">
                  <svg xmlns="http://www.w3.org/2000/svg" width="55" height="40" viewBox="0 0 55 40" fill="none">
                    <path d="M9.77157 19.6186L14.9365 18.7829C17.3562 18.7829 19.4966 19.6186 21.3579 21.2901C23.3122 22.8686 24.2893 25.2365 24.2893 28.3936C24.2893 31.4579 23.2656 34.0579 21.2183 36.1936C19.1709 38.3294 16.286 39.3972 12.5635 39.3972C8.93401 39.3972 5.90947 38.0044 3.48985 35.2186C1.16328 32.4329 0 28.8579 0 24.4936C0 20.0365 1.67513 15.6258 5.02538 11.2615C8.4687 6.89721 13.3545 3.27578 19.6827 0.397217L20.6599 2.76507C11.912 7.59364 7.53807 12.4686 7.53807 17.3901C7.53807 18.8758 8.28257 19.6186 9.77157 19.6186ZM40.4822 19.6186L45.6472 18.7829C48.0668 18.7829 50.2073 19.6186 52.0685 21.2901C54.0228 22.8686 55 25.2365 55 28.3936C55 31.4579 53.9763 34.0579 51.9289 36.1936C49.8815 38.3294 46.9966 39.3972 43.2741 39.3972C39.6447 39.3972 36.6201 38.0044 34.2005 35.2186C31.8739 32.4329 30.7107 28.8579 30.7107 24.4936C30.7107 20.0365 32.3858 15.6258 35.736 11.2615C39.1794 6.89721 44.0651 3.27578 50.3934 0.397217L51.3706 2.76507C42.6227 7.59364 38.2487 12.4686 38.2487 17.3901C38.2487 18.8758 38.9932 19.6186 40.4822 19.6186Z" fill="#B51C27"/>
                    </svg>
                </div>
      
                <p class="testimonial-card__paragraph">
                    <?= $testimonial->post_content ?>
                </p>
                
                <div class="testimonial-card__bottom">
                  <div class="testimonial-card__img">
                    <?php
                        // Obtener la URL de la imagen destacada
                        $image_url = get_the_post_thumbnail_url($testimonial->ID, 'full');
                    ?>
                    <img src="<?= $image_url ?>" alt="Image testimonial">
                  </div>
                  <p class="testimonial-card__name">
                    <?= $testimonial->post_title ?>
                  </p>
                </div>
              </div>
            <?php endforeach; ?>
            </div>
          </div>
        <?php endif; ?>
      </div>
     
    </div>
  </section>

  <?php endif; ?>