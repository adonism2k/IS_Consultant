<?php get_header() ?>

<?php
$paged = ( get_query_var( 'paged') ) ? get_query_var( 'paged' ) : 1;
$args  = array(
  "post_type"      => "post",
  "post_status"    => "publish",
  "category_name"  => "news",
  "posts_per_page" => 2,
  "paged"          => $paged,
  "orderby"        => "date",
  "order"          => "ASC",
);
$query           = new WP_Query($args);
$news_post       = get_posts( $args );
$paginated_links = paginated_links($query);
$page_title      = get_the_title();
$page_banner_url = get_field( "banner_image" )["url"];
?>

<div class="news">
  <section class="header">
    <div class="title">
      <h1><?= isset($page_title) ? $page_title : "News"; ?></h1>
    </div>
    <div class="corp-img" style="background-image: url('<?= isset($page_banner_url) ? $page_banner_url : "${directory_url}/img/about-header-img-corp.jpg" ?>');"></div>
  </section>
  <!-- end header -->

  <section class="news">
    <div class="wrapper d-flex align-items-center flex-column">
      <?= get_search_form() ?>
      <?php if(isset($news_post)): ?>
        <div class="news-card w-100">
          <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 justify-content-start w-100">
            <?php foreach($news_post as $news): ?>
              <?php $first_paragraph = array_filter(explode("<!-- /wp:paragraph -->", $news->post_content))[0] ?>
              <div class="col mb-4">
                <div class="card h-100 border-0">
                  <div class="news-img">
                    <img src='<?= get_field("news_image", $news->ID)["url"] ?>'
                      class="card-img-top"
                      alt="..."
                      height="218px"
                    />
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
                      <?php if(!empty(get_field("news_instagram", $news->ID))): ?>
                        by Instagram <a href="#" class="news-link"><?= get_field("news_instagram", $news->ID) ?></a>
                        <br />
                      <?php endif; ?>
                      <?php if(!empty(get_field("news_date", $news->ID))): ?>
                        <?= get_field("news_date", $news->ID) ?>
                      <?php endif; ?>
                    </p>
                    <?php if(!empty($news->post_content)): ?>
                      <?php if(strlen($first_paragraph) > 338): ?>
                        <?= substr($first_paragraph, '0', '338') . "..." ?>
                      <?php else: ?>
                        <?= $first_paragraph ?>
                      <?php endif; ?>
                    <?php endif; ?>
                  </div>
                </div>
              </div>
            <?php endforeach; ?>
          </div>
        </div>
      <?php else: ?>
        <div class="news_card">There's no news</div>
      <?php endif; ?>
      <?php if(!empty($paginated_links)): ?>
        <nav aria-label="news-pagination">
          <ul class="pagination mt-4">
            <?php foreach($paginated_links as $link): ?>
              <li class="page-item px-1 <?php if($link->isCurrent): ?> active <?php endif; ?>">
                <a class="page-link rounded-circle d-flex justify-content-center align-items-center" href="<?= $link->url ?>"><?= $link->page ?></a>
              </li>
            <?php endforeach; ?>
          </ul>
        </nav>
      <?php endif; ?>
    </div>
  </section>
  <!-- end news -->
</div>

<?php get_footer() ?>