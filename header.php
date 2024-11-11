<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="robots" content="noindex"><!--noindexを入力-->

  <!--faviconの読み込み-->
  <link rel="icon" href="<?php echo get_template_directory_uri() ?>/img/favicon.ico">

  <!--Google Fontsの読み込み-->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@1,14..32,100..900&family=Limelight&family=Noto+Serif+JP:wght@200..900&family=Rampart+One&display=swap" rel="stylesheet">

  <!-- <link rel="stylesheet" href="./css/reset.css">reset.cssの読み込み -->

  <?php wp_head(); ?>
</head>
<body>
  <header class="header">
    <div class="header__inner inner">
      <h1 class="header__logo">
        <a href="<?php echo home_url('/'); ?>">
          <img src="<?php echo get_template_directory_uri() ?>/img/favicon.ico" alt="">
        </a>
      </h1>

      <button
        id="js-drawer-button"
        type="button"
        class="header__icon drawer-icon"
        >

        <span class="drawer-icon__bar"></span>
        <span class="drawer-icon__bar"></span>
        <span class="drawer-icon__bar"></span>
      </button>

      <!-- header -->
      <nav id="js-drawer-content" class="header__nav">

        <ul class="header__lists">
          <li class="header__list">
            <a href="<?php echo home_url(''); ?>/about_more/" class="header__link">About</a>
          </li>
          <li class="header__list">
            <a href="<?php echo home_url('#skill'); ?>" class="header__link">Skill</a>
          </li>
          <li class="header__list">
            <a href="<?php echo home_url(''); ?>/category/all/" class="header__link">Works</a>
          </li>
          <li class="header__list">
            <a href="#contact" class="header__link">Contact</a>
          </li>
        </ul>

      </nav>
    </div>
  </header>
  <!-- /header -->

