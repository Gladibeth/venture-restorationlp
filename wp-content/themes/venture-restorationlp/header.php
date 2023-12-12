<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta property="og:image:type" content="image/png" class="meta-image" />
  <meta property="og:image:width" content="400" />
  <meta property="og:image:height" content="400" />
  <title><?php bloginfo('name'); ?> <?php wp_title('|', true, 'left'); ?></title>
  <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon.ico" type="image/x-icon">

  <?php wp_head(); ?>
</head>

<body>
  <header class="main-header">
    <div class="main-header__content main-content__medium">
      <figure class="main-header__logo">
        <a href="#">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-venture-restorationlp.png" alt="Logo">
        </a>
      </figure>
      <button aria-label="boton" class="main-header__button menu-toggle hamburger hamburger--elastic ml-autos" aria-controls="primary-menu" aria-expanded="false">
        <span class="hamburger-box">
          <span class="hamburger-inner"></span>
        </span>
      </button>
      <div class="main-header__nav">
        <?php
            wp_nav_menu(array(
                'theme_location' => 'main-menu',
                'container' => 'ul',
            ));
        ?>
        <div class="main-header__btn-mobile">
          <ul>
            <li>
              <a href="#" class="btn-custom padding-large">
                <?= __('Contact', 'venture'); ?>
              </a>
            </li>
          </ul>
        </div>
      </div>
      <div class="main-header__contact">
        <ul>
          <li>
            <a href="#" class="btn-custom padding-large">
                <?= __('Contact', 'venture'); ?>
            </a>
          </li>
        </ul>
      </div>

</header>