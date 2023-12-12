<?php
    //variables for banner
    $banner_group       = get_field('banner');
    $banner_title       = $banner_group['title_banner'];
    $banner_description = $banner_group['description_banner'];
    $banner_button      = $banner_group['buttom_banner'];
    $banner_image       = $banner_group['image_banner'];
    $banner_shortcode   = $banner_group['shortcode_form'];
?>

<section class="main-banner main-content__large" style="background: linear-gradient(89deg, rgba(255, 255, 255, 0.70) 33.8%, rgba(255, 255, 255, 0.00)), url(<?= $banner_image['url'] ?>) ; background-size: cover; background-repeat: no-repeat;">
  <div class="main-content__medium main-grid main-grid__two">
    <div class="main-banner__text">
      <div class="main-title mb-40">
        <h1>
          <?= $banner_title ?>
        </h1>
      </div>
      <p class="main-paragraph  mb-40">
          <?= $banner_description ?>
      </p>
      <a href="<?= $banner_button['url'] ?>" target="<?= $banner_button['target'] ?>" class="btn-custom secundary">
          <?= $banner_button['title'] ?>
      </a>
    </div>
    <div class="main-banner__form main-form">
        <?php echo do_shortcode($banner_shortcode); ?>
    </div>
  </div>
</section>
