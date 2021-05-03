<?php get_header() ?>
<?php 
$args  = array(
  "post_type"      => "post",
  "post_status"    => "publish",
  "tag"            => get_query_var("tag"),
  "posts_per_page" => 50,
  "orderby"        => "date",
  "order"          => "ASC",
);
$news_posts = get_posts($args);
$page_title = slugToTitle(get_query_var("tag"));
?>

<div class="news">
  <section class="header mb-5">
    <div class="title p-0 pt-5">
      <h1><?= isset($page_title) ? $page_title : "Tag"; ?></h1>
    </div>
  </section>
  <!-- end header -->

  <section class="news">
    <div class="wrapper d-flex align-items-center flex-column">
      <?= get_search_form() ?>
      <?php if(isset($news_posts)): ?>
        <div class="news-card w-100">
          <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 justify-content-start w-100">
            <?php foreach($news_posts as $news): ?>
              <?php $first_paragraph = array_filter(explode("<!-- /wp:paragraph -->", $news->post_content))[0] ?>
              <div class="col mb-5">
                <div class="card h-100 border-0">
                  <div class="news-img w-100">
                    <a href="<?= get_permalink($news->ID) ?>" class="w-100">
                      <img src='<?= get_field("news_image", $news->ID)["url"] ?>' class="card-img-top" alt="..." />
                    </a>
                  </div>
                  <div class="card-body text-left">
                    <h5 class="card-title">
                      <a href="<?= get_permalink($news->ID) ?>" class="text-dark">
                        <?php if(strlen($news->post_title) > 63): ?>
                          <?= substr($news->post_title, '0', '63') . "..." ?>
                        <?php else: ?>
                          <?= $news->post_title ?>
                        <?php endif; ?></a>
                      </a>
                    </h5>
                    <p class="card-text">
                      <?php if(!empty(get_field("news_source", $news->ID))): ?>
                        By <span class="text-primary"><?= get_field("news_source", $news->ID) ?></span>
                        <br />
                      <?php endif; ?>
                      <?php if(!empty(get_field("news_date", $news->ID))): ?>
                        <?= get_field("news_date", $news->ID) ?>
                      <?php endif; ?>
                    </p>
                    <?php if(!empty($news->post_content)): ?>
                      <?php if(strlen($first_paragraph) > 200): ?>
                        <?= substr($first_paragraph, '0', '200') . "..." ?>
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
        <div class="news_card">Tidak ada berita</div>
      <?php endif; ?>
    </div>
  </section>
  <!-- end news -->
</div>

<?php get_footer() ?>