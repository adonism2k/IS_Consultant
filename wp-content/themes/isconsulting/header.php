<?php
$directory_url    = get_template_directory_uri();
$blog_name        = get_bloginfo("name");
$languages        = array_reverse(pll_the_languages(array('raw'=> true)));
$current_page_url = (isset($_SERVER["HTTPS"]) && $_SERVER["HTTPS"] === "on" ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$navItems         = pll_current_language() === 'en' ? wp_get_nav_menu_items("Header") : wp_get_nav_menu_items("Menu in Bahasa");
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!-- favicon -->
    <link
      rel="apple-touch-icon-precomposed"
      sizes="57x57"
      href="<?= $directory_url ?>/img/ico/apple-touch-icon-57x57.png"
    />
    <link
      rel="apple-touch-icon-precomposed"
      sizes="114x114"
      href="<?= $directory_url ?>/img/ico/apple-touch-icon-114x114.png"
    />
    <link
      rel="apple-touch-icon-precomposed"
      sizes="72x72"
      href="<?= $directory_url ?>/img/ico/apple-touch-icon-72x72.png"
    />
    <link
      rel="apple-touch-icon-precomposed"
      sizes="144x144"
      href="<?= $directory_url ?>/img/ico/apple-touch-icon-144x144.png"
    />
    <link
      rel="apple-touch-icon-precomposed"
      sizes="60x60"
      href="<?= $directory_url ?>/img/ico/apple-touch-icon-60x60.png"
    />
    <link
      rel="apple-touch-icon-precomposed"
      sizes="120x120"
      href="<?= $directory_url ?>/img/ico/apple-touch-icon-120x120.png"
    />
    <link
      rel="apple-touch-icon-precomposed"
      sizes="76x76"
      href="<?= $directory_url ?>/img/ico/apple-touch-icon-76x76.png"
    />
    <link
      rel="apple-touch-icon-precomposed"
      sizes="152x152"
      href="<?= $directory_url ?>/img/ico/apple-touch-icon-152x152.png"
    />
    <link
      rel="icon"
      type="image/png"
      href="favicon-196x196.png"
      sizes="<?= $directory_url ?>/img/ico/196x196"
    />
    <link
      rel="icon"
      type="image/png"
      href="<?= $directory_url ?>/img/ico/favicon-96x96.png"
      sizes="96x96"
    />
    <link
      rel="icon"
      type="image/png"
      href="<?= $directory_url ?>/img/ico/favicon-32x32.png"
      sizes="32x32"
    />
    <link
      rel="icon"
      type="image/png"
      href="<?= $directory_url ?>/img/ico/favicon-16x16.png"
      sizes="16x16"
    />
    <link
      rel="icon"
      type="image/png"
      href="<?= $directory_url ?>/img/ico/favicon-128.png"
      sizes="128x128"
    />
    <meta name="IS Consultant" content="&nbsp;" />
    <meta name="msapplication-TileColor" content="#FFFFFF" />
    <meta name="msapplication-TileImage" content="mstile-144x144.png" />
    <meta name="msapplication-square70x70logo" content="mstile-70x70.png" />
    <meta name="msapplication-square150x150logo" content="mstile-150x150.png" />
    <meta name="msapplication-wide310x150logo" content="mstile-310x150.png" />
    <meta name="msapplication-square310x310logo" content="mstile-310x310.png" />
    <!-- end favicon -->

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Manrope:wght@200;300;400;500;600;700;800&display=swap"
      rel="stylesheet"
    />

    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?= get_stylesheet_uri(); ?>" />

    <!-- Packages -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />    
    <link href="https://api.mapbox.com/mapbox-gl-js/v2.1.1/mapbox-gl.css" rel="stylesheet" />
    <script src="https://api.mapbox.com/mapbox-gl-js/v2.1.1/mapbox-gl.js"></script>

    <title><?= isset($blog_name) ? $blog_name : "Introducing • IS Consulting" ?></title>
  </head>

  <body>
    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container-fluid wrapper">
        <a class="navbar-brand" href="<?=site_url()?>">
          <?php
            $custom_logo_id = get_theme_mod( "custom_logo" );
            $logo           = wp_get_attachment_image_src( $custom_logo_id , "full" );
            // print_r(has_blocks());
            if (has_custom_logo()): 
          ?>
            <img
              src="<?= esc_url($logo[0]) ?>"
              alt="IS Consultant"
              class="navbar__logo"
            />
          <?php else: ?>
            <img
              src="<?= $directory_url ?>/img/logo-corp.svg"
              alt="IS Consultant"
              class="navbar__logo"
            />
          <?php endif; ?>
        </a>
        <button
          class="navbar-toggler"
          type="button"
          data-toggle="collapse"
          data-target="#navbarNavAltMarkup"
          aria-controls="navbarNavAltMarkup"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="wrapper__navbar navbar-nav ml-auto justify-content-around">
            <?php if(isset($navItems)): ?>
              <?php foreach($navItems as $nav): ?>
                <a class="nav-link <?php if($nav->url === $current_page_url): ?>active text-primary<?php endif; ?>" href="<?= $nav->url;?>"><?= $nav->title;?></a>
              <?php endforeach; ?>
            <?php endif; ?>
            <div class="wrapper__il8n d-flex justify-content-between align-items-center">
            <?php 
            $numItems = count($languages);
            $i = 0;
            ?>
              <?php foreach($languages as $lang): ?>
                <a href="<?= $lang["url"] ?>" id="english" class="nav-il8n <?php if(in_array('current-lang', $lang["classes"])): ?> active <?php endif; ?> text-decoration-none"><?= strtoupper($lang["slug"]) ?></a>
                <?php if(++$i !== $numItems): ?>
                  <div class="border-left border-dark h-75"></div>
                <?php endif; ?>
              <?php endforeach; ?>
            </div>
          </div>
        </div>
      </div>
    </nav>
    <!-- end navbar -->
