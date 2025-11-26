<!DOCTYPE html>
<html lang="ja">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title><?php wp_title(' | ', true, 'right');
          bloginfo('name'); ?></title>
  <meta name="description" content="ディスクリプションのサンプルテキスト">
  <meta name="keywords" content="D'OPERATION, ディーオペレーション">
  <link rel="canonical" href="<?= site_url(); ?>/">
  <link rel="stylesheet" media="all" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/reset.css" />

  <link rel="stylesheet" media="all" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/common.css" />
  <?php if (is_front_page()): ?>
    <link rel="stylesheet" media="all" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/top.css" />
  <?php elseif (is_page('company')): ?>
    <link rel="stylesheet" media="all" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/company.css" />
  <?php elseif (is_page(array('contact', 'confirm', 'thanks'))): ?>
    <link rel="stylesheet" media="all" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/contact.css" />
  <?php elseif (is_page(array('privacy', 'terms', 'thanks'))): ?>
    <link rel="stylesheet" media="all" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/terms.css" />
  <?php endif; ?>

  <link rel="shortcut icon" href="<?php echo wp_get_attachment_url($favicon_img); ?>">
  <link rel="apple-touch-icon" href="<?php echo wp_get_attachment_url($favicon_img); ?>">

  <!-- og関連 -->
  <meta property="og:url" content="<?= site_url(); ?>/" />
  <meta property="og:type" content="website" />
  <meta property="og:type" content="article" />
  <meta property="og:description" content="ディスクリプションのサンプルテキスト" />
  <meta property="og:title" content="<?php wp_title(' | ', true, 'right');
                                      bloginfo('name'); ?>" />
  <meta property="og:site_name" content="<?php bloginfo('name'); ?>のWebサイト" />
  <meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/assets/img/common/ogp.jpg" />
  <meta name="twitter:image" content="<?php echo get_template_directory_uri(); ?>/assets/img/common/ogp.jpg">
  <!-- <meta property="fb:app_id" content="123********" /> -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <?php
  wp_deregister_style('wp-block-library');
  wp_head();
  ?>

  <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@graph": [{
          "@type": "Organization",
          "name": "D'OPERATION",
          "url": "https://d-operation.com/",
          "description": "サンプルテキストサンプルテキスト",
          "image": "https://d-operation.com/wp-content/themes/doperation/assets/img/common/ogp.jpg",
          "address": {
            "@type": "PostalAddress",
            "streetAddress": "東新橋1-9-2 汐留住友ビル 14F",
            "addressLocality": "港区",
            "addressRegion": "東京都",
            "postalCode": "176-0022",
            "addressCountry": "JP"
          },
          "geo": {
            "@type": "GeoCoordinates",
            "latitude": 35.6622,
            "longitude": 139.7601
          },
          "sameAs": ["https://www.nexus-group.jp/"]

        },
        {
          "@context": "https://schema.org",
          "@type": "SiteNavigationElement",
          "name": "ホーム",
          "url": "https://d-operation.com/"
        },
        {
          "@context": "https://schema.org",
          "@type": "SiteNavigationElement",
          "name": "会社概要",
          "url": "https://d-operation.com/company/"
        },
        {
          "@context": "https://schema.org",
          "@type": "SiteNavigationElement",
          "name": "お問い合わせ",
          "url": "https://d-operation.com/contact/"
        }
      ]
    }
  </script>
  <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Organization",
      "name": "株式会社ステッチ",
      "url": "https://e-stitch.jp/",
      "logo": "https://e-stitch.jp/wp-content/themes/stitch/img/common/logo.png",
      "contactPoint": {
        "@type": "ContactPoint",
        "contactType": "technical support",
        "areaServed": "JP",
        "availableLanguage": "Japanese",
        "telephone": "+81-027-289-3315",
        "email": "info@e-stitch.jp"
      }
    }
  </script>

</head>

<body ontouchstart="" class="slide-in <?php if (is_front_page()) {
                                        echo 'is-top';
                                      } else if (is_page('company')) {
                                        echo 'is-company';
                                      } else if (is_page('contact')) {
                                        echo 'is-contact';
                                      } ?>">


  <div class="wrap">

    <!-- nav -->
    <header class="site-header fadeDown" id="site-header">
      <div class="masthead">

        <h1 class="brand-logo">
          <!-- class="flex" -->
          <a href="/">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/logo.png" alt="D'operation">

          </a>
        </h1>

        <nav class="globalnav" id="js-globalnav">
          <!-- sp -->
          <input type="checkbox" id="nav-toggle" class="pad">
          <!-- sp -->
          <label for="nav-toggle" class="nav-button pad">
            <div class="nav-bar-wrap">
              <span class="nav-bar"></span>
              <span class="nav-bar"></span>
              <span class="nav-bar"></span>
            </div>
            <p class="nav-bar-text">MENU</p>
          </label>

          <div class="globalnav-inner">
            <?php wp_nav_menu(array(
              'theme_location' => 'primary',
              'menu' => 'header',
              'container' => 'ul',
              'menu_class' => 'globalnav-list',
              'before' => '<li class="globalnav__item" itemprop="name">',
              'after' => '</li>',
            )); ?>

            <div class="menu__logo pad">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/logo.png" alt="D'operation">
            </div>

          </div>
        </nav>

      </div>
      <div class="logo_text__img">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/logo_text.webp" alt="フランチャイズ／ボランタリーチェーン">
      </div>
    </header>

    <main class="site-main" id="site-main">