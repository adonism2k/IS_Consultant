<?php
if(is_single()) {
  global $wp;
  $news                    = get_post(url_to_postid(home_url( $wp->request )));
  $news_title              = $news->post_title;
  $news_content            = getStringBetween("p", $news->post_content);
  $news_image              = get_field("news_image", $news->ID)["url"];
}
$directory_url             = get_template_directory_uri();
$blog_name                 = get_bloginfo("name");
$languages                 = array_reverse(pll_the_languages(["raw" => true]));
$total_number_of_languages = count($languages);
$current_page_url          = (isset($_SERVER["HTTPS"]) && $_SERVER["HTTPS"] === "on" ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$navItems                  = pll_current_language() === 'en' ? wp_get_nav_menu_items("Header") : wp_get_nav_menu_items("Menu in Bahasa");
$custom_logo_id            = get_theme_mod("custom_logo" );
$logo                      = wp_get_attachment_image_src($custom_logo_id ,"full" );
$news_lang                 = pll_current_language() === 'en' ? "news" : "berita";
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <!-- meta -->
      <meta charset="utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
      <?php if(is_single()): ?>
        <meta property='og:title' content='<?=$news_title?>'/>
        <meta property='og:image' content='<?=$news_image?>'/>
        <meta property='og:description' content='<?= substr($news_content, 0, 63) . '...' ?>'/>
        <meta property='og:url' content='<?= home_url($wp->request) ?>' />
      <?php endif; ?>
    <!-- /meta -->

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
    <!-- /favicon -->

    <!-- fonts -->
      <link rel="preconnect" href="https://fonts.gstatic.com" />
      <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet"/>
      <link href="https://fonts.googleapis.com/css2?family=Rufina:wght@400;700&display=swap" rel="stylesheet"/>
      <link href="https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet"/> 
      <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&family=Work+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
    <!-- /fonts -->

    <!-- css -->
      <link rel="stylesheet" href="<?= get_stylesheet_uri(); ?>" />
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
      <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />    
      <link href="https://api.mapbox.com/mapbox-gl-js/v2.1.1/mapbox-gl.css" rel="stylesheet" />
      <link rel="stylesheet"href="https://cdn.jsdelivr.net/gh/highlightjs/cdn-release@10.7.2/build/styles/default.min.css">
    <!-- /css -->

    <!-- script -->
      <script src="https://api.mapbox.com/mapbox-gl-js/v2.1.1/mapbox-gl.js"></script>
      <script src="https://cdn.jsdelivr.net/gh/highlightjs/cdn-release@10.7.2/build/highlight.min.js"></script>
      <script>hljs.highlightAll();</script>
    <!-- /script -->

    <title><?= isset($blog_name) ? $blog_name : "Introducing • IS Consulting" ?></title>
  </head>

  <body>
    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container-fluid wrapper">
        <a class="navbar-brand" href="<?=home_url()?>">
          <?php if (has_custom_logo()): ?>
            <img src="<?= esc_url($logo[0]) ?>" alt="IS Consultant" class="navbar__logo"/>
          <?php else: ?>
            <img src="<?= $directory_url ?>/img/logo-corp.svg" alt="IS Consultant" class="navbar__logo"/>
          <?php endif; ?>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation" >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="wrapper__navbar navbar-nav ml-auto justify-content-around">
            <?php if(isset($navItems)): ?>
              <?php foreach($navItems as $nav): ?>
                <a href="<?= $nav->url;?>"
                  class="nav-link 
                  <?php 
                    if($nav->url === $current_page_url //nav url valuenya sama dengan current url
                       or ((bool)strpos($nav->url, $news_lang) and (bool)strpos($current_page_url, $news_lang)) //nav url dan current url ada kata news (mengecek apakah ini post news atau bukan)
                       or ((bool)strpos($nav->url, $news_lang) and is_tag()) //nav url ada kata news dan lagi di halaman tag
                       or ((bool)strpos($nav->url, $news_lang) and is_search())): //nav url ada kata news dan lagi di halaman search 
                  ?>
                    active text-primary
                  <?php endif; ?>" 
                >
                  <?= $nav->title;?>
                </a>
              <?php endforeach; ?>
            <?php endif; ?>
            <?php if(!is_single() and !is_404() and !is_archive()): $i = 0; //dirender jika bukan halaman single dan 404 dan archive ?>
              <div class="wrapper__il8n d-flex justify-content-between align-items-center">
                <?php foreach($languages as $lang): ?>
                  <a href="<?= $lang["url"] ?>" class="nav-il8n <?php if($lang["current_lang"]): ?> active <?php endif; ?> text-decoration-none">
                    <?= strtoupper($lang["slug"]) ?>
                  </a>
                  <?php if(++$i !== $total_number_of_languages ): //dirender selama $i(incerement) tidak sama dengan jumlah banyaknya bahasa ?>
                    <div class="border-left border-dark h-75"></div>
                  <?php endif; ?>
                <?php endforeach; ?>
              </div>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </nav>
    <!-- end navbar -->
