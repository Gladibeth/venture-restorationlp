<?php
//variables for about
$about_group       = get_field('about');
if ($about_group) {
  return;
}

$about_tag         = $about_group['tag_about'];
$about_title       = $about_group['title_about'];
$about_description = $about_group['description_about'];
$about_image       = $about_group['image_about'];
$about_button      = $about_group['buttom_about'];
?>

<section class="main-about main-content__large pv80">
    <div class="main-content__medium main-grid main-grid__two">
      <div class="main-about__img">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/about-me.png" alt="About me Venture Restoration lp">
      </div>

      <div class="main-about__text">
        <p class="main-tag bg-secundary__blue mb-10">
        <?= $about_tag ?>
        </p>
        <div class="main-title mb-40">
          <h2 class="left-mobile">
            <?= $about_title ?>
          </h2>
        </div>
        <p class="main-paragraph mb-40">
        <?= $about_description ?>
        </p>
        <?php if ($about_button) : ?>
          <a href="<?= $about_button['urk'] ?>" target="<?= $about_button['target'] ?>" class="btn-custom light">
              <?= $about_button['title'] ?>
            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25" fill="none">
              <path d="M16.672 13.6987L4.5 13.6987L4.5 11.6987L16.672 11.6987L11.308 6.33465L12.722 4.92065L20.5 12.6987L12.722 20.4767L11.308 19.0627L16.672 13.6987Z" fill="#B51C27"/>
            </svg>
          </a>
        <?php endif; ?>
      </div>
    </div>
</section>