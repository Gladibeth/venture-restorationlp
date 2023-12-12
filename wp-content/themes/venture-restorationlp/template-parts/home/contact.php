<?php
    //variables for contact
    $contact_group       = get_field('contact');
    $contact_title       = $contact_group['title_contact'];
    $contact_description = $contact_group['description_contact'];
    $contact_shortcode   = $contact_group['shortcode_form'];
    $contact_socials     = $contact_group['social_networks'];
?>

<section class="main-contact main-content__large pv80" style="background: linear-gradient(90deg, rgba(255, 255, 255, 0.90) -2.43%, rgba(15, 43, 60, 0.90) -2.43%, rgba(15, 43, 60, 0.25) 88.66%), url(<?php echo get_template_directory_uri(); ?>/assets/img/contact.jpg); background-size: cover; background-repeat: no-repeat;"
  >
    <div class="main-content__medium main-grid main-grid__two">
      <div class="main-contact__text">
        <div class="main-title mb-40 text-white">
          <h2 class="left-mobile">
            <?= $contact_title ?>
          </h2>
        </div>
        <p class="main-paragraph mb-40 text-white">
          <?= $contact_description ?>
        </p>
        <ul class="main-contact__social">
            <?php foreach ($contact_socials as $social) : ?>
                <li>
                    <a href="<?= $social['url_social_networks'] ?>">
                      <img src="<?= $social['icon_social_networks'] ?>" alt="icon social networks">
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
      </div>
      <div class="main-form">
        <?php echo do_shortcode($banner_shortcode); ?>
      </div>
    </div>
  </section>