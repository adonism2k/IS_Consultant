<?php get_header(); ?>
<?php
global $wp;
$directory_url = get_template_directory_uri();
$blog_name     = get_bloginfo("name");
$news_url      = pll_current_language() === 'en' ? "news-en" : "berita";
$home_title    = pll_current_language() === 'en' ? wp_get_nav_menu_items("Header")[0]->title : wp_get_nav_menu_items("Menu in Bahasa")[0]->title;
$news          = get_post(url_to_postid(home_url( $wp->request )));
$news_title    = $news->post_title;
$cat_name      = get_the_category($news->ID)[0]->name;
$tags          = get_the_tags($news->ID);
if(!empty($tags)) {
  $key        = array_rand($tags);
  $random_tag = $tags[$key];
  $args       = array(
    "post_type"      => "post",
    "post_status"    => "publish",
    "tag"            => $random_tag->slug,
    "posts_per_page" => 3,
    "orderby"        => "date",
    "order"          => "ASC",
  );
  $related_news = get_posts($args);
}
$args = array(
  "post_type"      => "post",
  "post_status"    => "publish",
  "category_name"  => pll_current_language() === "en" ? "news" : "berita",
  "posts_per_page" => 3,
  "orderby"        => "date",
  "order"          => "ASC",
);
$latest_news = get_posts($args);
?>

<article class="container d-flex flex-column">
  <div class="row pb-4">
    <nav class="col-12 mt-4" aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="<?= home_url() ?>"><?= $home_title ?></a> </li>
        <li class="breadcrumb-item"><a href="<?= site_url("/index.php/$news_url") ?>"><?= $cat_name ?></a></li>
        <li class="breadcrumb-item active" aria-current="page"><?= substr($news_title, '0','22')."..." ?></li>
      </ol>
    </nav>
    <!-- end nav -->
    
    <header class="col-12 w-100 d-flex justify-content-center align-items-center flex-column">
      <h1 class="title w-100"><?=$news_title?></h1>
      <div class="detail w-100 d-flex justify-content-between align-items-center">
        <p class="writter">Written By <?= get_field("news_instagram", $news->ID) ?></p>
        <p class="date"><?= get_field("news_date", $news->ID) ?></p>
      </div>
    </header>
    <!-- end header -->
    
    <div id="thumbnail" class="col-12 w-100"> <!-- NOTE: the image must be 16:9 ratio or 703x395.4375 pixel -->
      <img src="<?= get_field("news_image", $news->ID)["url"] ?>" alt="News Thumbnail">
      <div class="description">
        <p>Image Description. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut in et porta rutrum commodo mattis.</p>
      </div>
    </div>
    <!-- end thumbnail -->

    <main class="col-12 w-100 h-100">
      <div class="row row-cols-1 row-cols-md-3 h-100">
        <div id="content__wrapper" class="col-12 col-md-7 order-1 order-md-2 mb-4">
          <div class="row">
            <div id="content" class="col-12 h-100">
              <?= $news->post_content ?>
            </div>
            <!-- end content -->
  
            <div id="batas" class="col-12 d-flex align-items-center my-4">
              <div class="w-100 border-top border-secondary"></div>
            </div>
          
            <div id="tags" class="col-12 h-100">
              <span class="d-block">Tags:</span>
              <div class="row row-col-3">
                <?php if(!empty($tags)): ?>
                  <?php foreach($tags as $tag): ?>
                    <div class="col-4 px-3 py-2 align-self-center">
                      <a href="<?= get_tag_link($tag->term_id) ?>" id="the-tag" class="w-100 d-flex align-items-center justify-content-center px-3 text-center border border-dark text-decoration-none">
                        <?= $tag->name ?>
                      </a>
                    </div>
                  <?php endforeach; ?>
                <?php else: ?>
                  <div class="col-12 align-self-center">No tags</div>
                <?php endif; ?>
              </div>
            </div>
            <!-- end tags -->

            <div id="batas" class="d-inline d-md-none col-12 d-flex align-items-center my-4">
              <div class="w-100 border-top border-secondary"></div>
            </div>
          </div>
        </div>
        
        <div id="news" class="col-12 col-md-3 order-2 order-md-3 mb-4">
          <?php if(!empty($related_news)): ?>
            <div class="w-100 d-flex justify-content-center align-items-center flex-column mb-4">
              <h5 class="text-center m-0">Related News</h5>
              <div id="batas" class="w-50 d-flex align-items-center my-2">
                <div class="w-100 border-top border-secondary"></div>
              </div>
              <div class="row">
                <?php foreach($related_news as $news): ?>
                  <div class="col-12 d-flex flex-column justify-content-center align-items-center">
                    <img src="<?= get_field("news_image", $news->ID)["url"] ?>" alt="Related News Image" class="news-image">
                    <a href="<?= get_permalink($news->ID) ?>" class="text-dark news-title"><?=$news->post_title?></a>
                    <div class="w-100 border-top border-secondary my-4"></div>
                  </div>
                <?php endforeach; ?>
              </div>
            </div>
          <?php endif; ?>
          <?php if(!empty($latest_news)): ?>
            <div class="w-100 d-flex justify-content-center align-items-center flex-column">
              <h5 class="text-center m-0">latest News</h5>
              <div id="batas" class="w-50 d-flex align-items-center my-2">
                <div class="w-100 border-top border-secondary"></div>
              </div>
              <div class="row">
                <?php foreach($latest_news as $news): ?>
                  <div class="col-12 d-flex flex-column justify-content-center align-items-center">
                    <img src="<?= get_field("news_image", $news->ID)["url"] ?>" alt="Related News Image" class="news-image">
                    <a href="<?= get_permalink($news->ID) ?>" class="text-dark news-title"><?=$news->post_title?></a>
                    <div class="w-100 border-top border-secondary my-4"></div>
                  </div>
                <?php endforeach; ?>
              </div>
            </div>
          <?php endif; ?>
        </div>
        <!-- end news -->
      
        <div id="share" class="col-12 col-md-2 order-3 order-md-1 mb-4">
          <div class="w-100 d-flex justify-content-center flex-column">
            <p class="text-center">Share</p>
            <div class="row row-cols-4 row-cols-md-1">
              <div id="facebook" class="col-3 col-md-12 d-flex justify-content-center align-items-center mb-md-3">
                <button onClick="openInNewWindow('https://www.facebook.com/sharer.php?u=<?= urlencode(home_url($wp->request)) ?>', 'facebook');"
                  class="social-media border border-0 rounded-circle d-flex justify-content-center align-items-center">
                  <img src="<?=$directory_url?>/img/fb-icon.svg" alt="FB">
                </button>
              </div>
              <div id="twitter" class="col-3 col-md-12 d-flex justify-content-center align-items-center mb-md-3">
                <button onClick="openInNewWindow('https://twitter.com/intent/tweet?url=<?= urlencode(home_url($wp->request)) ?>&text=<?= $news_title ?>', 'twitter');"
                  target="_blank"
                  class="social-media border border-0 rounded-circle d-flex justify-content-center align-items-center">
                  <img src="<?=$directory_url?>/img/twt-icon.svg" alt="TWT">
                </button>
              </div>
              <div id="linkedin" class="col-3 col-md-12 d-flex justify-content-center align-items-center mb-md-3">
                <button onClick="openInNewWindow('https://www.linkedin.com/sharing/share-offsite/?url=<?= urlencode(home_url($wp->request)) ?>', 'linkedin');"
                  target="_blank"
                  class="social-media border border-0 rounded-circle d-flex justify-content-center align-items-center">
                  <img src="<?=$directory_url?>/img/lkn-icon.svg" alt="Lkn">
                </button>
              </div>
              <div id="whatsapp" class="col-3 col-md-12 d-flex justify-content-center align-items-center mb-md-3">
                <button onClick="openInNewWindow('https://wa.me/?text=<?= urlencode(home_url($wp->request)) ?>', 'whatsapp');" 
                  data-action="share/whatsapp/share" 
                  target="_blank" 
                  class="social-media border border-0 rounded-circle d-flex justify-content-center align-items-center">
                  <img src="<?=$directory_url?>/img/wa-icon-stroke.svg" alt="WA">
                </button>
              </div>
            </div>
          </div>
        </div>
        <!-- end share -->
      </div>
    </main>
  </div>
</article>
<!-- end article -->


<?php get_footer(); ?>