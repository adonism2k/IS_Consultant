<?php get_header() ?>
<?php
$newsArgs      = array(
  "post_type"      => "post",
  "post_status"    => "publish",
  "posts_per_page" => 3,
  "orderby"        => "date",
  "order"          => "ASC",
);
$valueArgs     = array(
  "post_type"      => "values",
  "post_status"    => "publish",
  "posts_per_page" => 20,
);
$portfolioArgs = array(
  "name"           => "portfolio-documentation",
  "post_type"      => "portfolio",
  "post_status"    => "publish",
  "posts_per_page" => 10,
  "orderby"        => "date",
  "order"          => "ASC",
);
$portfolio_documentation   = get_posts( $portfolioArgs );
$portfolio_image           = array_filter(explode("<!-- /wp:image -->", $portfolio_documentation[0]->post_content));
$values                    = array_reverse(get_posts( $valueArgs ));
$news_posts                = get_posts( $newsArgs );
$directory_url             = get_template_directory_uri();
$page_title                = get_field("page_title");
$page_banner_url           = get_field( "banner_image" )["url"];
$first_section_title       = get_field("first_section_title");
$first_section_description = get_field("first_section_description");
$second_section_title      = get_field("second_section_title");
$third_section_title       = get_field("third_section_title");
$third_section_description = get_field("third_section_description");
$link_to_consultant        = get_permalink(get_page_by_title(pll_current_language() === "en" ? "Consultant" : "Konsultan"));
?>

<div class="home">
  <section class="header">
    <div class="title">
      <h1 class="prologue">
        <?= $page_title ?>
      </h1>
    </div>
    <div class="circle"><p>Hello World!</p></div>
    <div class="corp-img" style="background-image: url('<?= $page_banner_url ?>');"></div>
  </section>
  <!-- end header -->

  <section class="about-us">
    <div class="wrapper d-flex align-items-center flex-column">
      <div class="title">
        <h1><?= $first_section_title ?></h1>
      </div>
        <div class="subtitle"><?= $first_section_description  ?></div>
      <div class="about-card">
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 justify-content-center">
          <?php if(isset($values)): $i = 1; ?>
            <?php foreach($values as $value): ?>
              <div class="col w-100 d-flex justify-content-center">
                <div class="card h-100 border-0">
                  <div class="card-icon">
                    <?php if (isset(get_field("secondary_value_icon", $value->ID)["url"])): ?>
                      <div class="circle-icon-<?= $i++ ?>">
                        <img src="<?= get_field("secondary_value_icon", $value->ID)["url"] ?>" class="icon" alt="..." />
                      </div>
                    <?php endif; ?>
                    <img src="<?= get_field("primary_value_icon", $value->ID)["url"] ?>" class="card-img-top" alt="..."
                      <?php if (isset(get_field("secondary_value_icon", $value->ID)["url"])): ?>
                      style="transform: translateX(70px);"
                      <?php else: ?>
                      style="transform: translateX(0);"
                      <?php endif; ?>
                    />
                  </div>
                  <div class="card-body text-left">
                    <h5 class="card-title"><?= $value->post_title ?></h5>
                    <p class="card-text"><?= $value->post_content ?></p>
                  </div>
                </div>
              </div>
            <?php endforeach; ?>
          <?php endif; ?>
        </div>
        <div class="circle"></div>
      </div>
    </div>
  </section>
  <!-- end about us -->

  <section class="portfolio">
    <div class="title">
      <h1><?= isset($second_section_title) ? $second_section_title : "Portfolio" ?></h1>
    </div>
    <div class="port-photos">
      <a href="<?=$link_to_consultant?>" class="d-flex justify-content-between align-items-center">
        See all Portfolio
        <svg width="9" height="13" viewBox="0 0 9 13" fill="none" xmlns="http://www.w3.org/2000/svg" >
          <path d="M2.02011 0.5L0.610107 1.91L5.19011 6.5L0.610107 11.09L2.02011 12.5L8.02011 6.5L2.02011 0.5Z" fill="white"/>
        </svg>
      </a>
      <div class="swiper-container d-flex align-items-center">
        <div class="swiper-wrapper">
          <?php foreach($portfolio_image as $img): ?>
            <?php
              $doc = new DOMDocument();
              @$doc->loadHTML($img);
              $xpath = new DOMXPath($doc);
              $url = $xpath->evaluate("string(//img/@src)");
            ?>
            <div class="swiper-slide" style="background-image: url('<?= $url ?>') ;"></div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </section>
  <!-- end portfolio -->

  <section class="news">
    <div class="wrapper d-flex align-items-center flex-column">
      <div class="title">
        <h1><?= $third_section_title ?></h1>
      </div>
      <div class="subtitle">
        <?= $third_section_description  ?>
      </div>
      <?php if(isset($news_posts)): ?>
        <div class="news-card">
          <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3">
              <?php foreach($news_posts as $news): ?>
                <?php $first_paragraph = array_filter(explode("<!-- /wp:paragraph -->", $news->post_content))[0] ?>
                <div class="col w-100 d-flex justify-content-center">
                  <div class="card h-100 border-0">
                    <div class="news-img w-100">
                      <a href="<?= get_permalink($news->ID) ?>" class="w-100">
                        <img src='<?= post_thumbnail_url($news->ID) ?>' class="card-img-top" alt="..."/>
                      </a>
                    </div>
                    <div class="card-body text-left">
                      <h5 class="card-title">
                        <a href="<?= get_permalink($news->ID) ?>" class="text-dark">
                          <?php if(strlen($news->post_title) > 63): ?>
                            <?= substr($news->post_title, '0', '63') . "..." ?>
                          <?php else: ?>
                            <?= $news->post_title ?>
                          <?php endif; ?>
                        </a>
                      </h5>
                      <p class="card-text">
                        <?php if(!empty(get_field("news_source", $news->ID))): ?>
                          <span class="d-block">
                          By <span class="text-primary"><?= get_field("news_source", $news->ID) ?></span>
                          </span>
                        <?php endif; ?>
                        <?php if(!empty(get_field("news_date", $news->ID))): ?>
                          <span class="d-block"><?= get_field("news_date", $news->ID) ?></span>
                        <?php endif; ?>
                      </p>
                      <?php if(!empty($news->post_content)): ?>
                        <p class="content">
                          <?= getStringBetween("p", $first_paragraph) ?>
                        </p>
                      <?php endif; ?>
                    </div>
                  </div>
                </div>
              <?php endforeach; ?>
          </div>
        </div>
      <?php endif; ?>
    </div>
  </section>
  <!-- end news -->  
</div>

<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script>
  var swiper = new Swiper(".swiper-container", {
    // Refresh when breakpoint is changes
    slidesPerView: window.innerWidth <= 576 ? 1 : 3,
    spaceBetween: 80,
    loop: true,
    loopFillGroupWithBlank: true,
    grabCursor: true,
    autoplay: {
      delay: 4000,
      disableOnInteraction: false,
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: false,
    },
  });
</script>

<?php get_footer() ?>