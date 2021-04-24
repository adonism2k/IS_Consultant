<?php get_header() ?>

<?php
$args = array(
  "post_type"      => "post",
  "post_status"    => "publish",
  "category_name"  => "news",
  "posts_per_page" => 20,
  "orderby"        => "date",
  "order"          => "ASC",
);
$news_post      = get_posts( $args );
$page_title      = get_the_title();
$page_banner_url = get_field( "banner_image" )["url"];
// var_dump(array_filter(explode("<!-- wp:paragraph -->", $news_post[4]->post_content)));
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
      <div class="form-row w-100">
        <div class="form-group col-md">
          <input
            type="text"
            class="form-control"
            id="inputCity"
            placeholder="Cari Berita..."
          />
        </div>
        <div class="form-group col-md-2">
          <select id="inputState" class="form-control">
            <option selected disabled>Urutkan</option>
            <option>Terbaru</option>
            <option>Terlama</option>
            <option>Paling banyak dikunjungi</option>
          </select>
        </div>
      </div>
      <?php if(isset($news_post)): ?>
        <div class="news-card w-100">
          <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 justify-content-start w-100">
              <?php foreach($news_post as $news): ?>
                <div class="col">
                  <div class="card h-100 border-0">
                    <div class="news-img">
                      <img
                        src='<?= get_field("news_image", $news->ID)["url"] ?>'
                        class="card-img-top"
                        alt="..."
                      />
                    </div>
                    <div class="card-body text-left">
                      <h5 class="card-title">
                        <a href="<?= get_permalink($news->ID) ?>" class="text-dark"><?= $news->post_title ?></a>
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
                      <?= array_filter(explode("<!-- /wp:paragraph -->", $news->post_content))[0] //get first paragraph ?>
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