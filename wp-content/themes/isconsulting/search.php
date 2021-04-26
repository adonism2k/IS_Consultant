<?php get_header() ?>
<?php 
$args         = array(
  "s"              => $s,
  "post_type"      => "post",
  "post_status"    => "publish",
  "posts_per_page" => 20,
  "orderby"        => "date",
  "order"          => $order,
);
$news_posts = get_posts($args);
?>

<div class="news">
  <section class="header mb-5">
    <div class="title p-0 pt-5">
      <h1><?= isset($s) ? $s : "News"; ?></h1>
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
                <div class="col mb-4">
                  <div class="card h-100 border-0">
                    <div class="news-img">
                      <img
                        src='<?= get_field("news_image", $news->ID)["url"] ?>'
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
        <div class="news_card">Tidak ada berita</div>
      <?php endif; ?>
    </div>
  </section>
  <!-- end news -->
</div>

<?php get_footer() ?>