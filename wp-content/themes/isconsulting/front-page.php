<?php get_header() ?>
<?php
$newsArgs = array(
  "post_type"      => "post",
  "post_status"    => "publish",
  "posts_per_page" => 3,
  "orderby"        => "date",
  "order"          => "ASC",
);
$valueArgs = array(
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
$portfolio_image           = array_filter(explode('<!-- /wp:image -->', $portfolio_documentation[0]->post_content));
$news_posts                = get_posts( $newsArgs );
$values                    = array_reverse(get_posts( $valueArgs ));
$directory_url             = get_template_directory_uri();
$page_title                = get_field("page_title");
$page_banner_url           = get_field( "banner_image" )["url"];
$first_section_title       = get_field("first_section_title");
$first_section_description = get_field("first_section_description");
$second_section_title      = get_field("second_section_title");
$third_section_title       = get_field("third_section_title");
$third_section_description = get_field("third_section_description");
// var_dump(strlen("Gempa terkini disebut berkekuatan magnitudo 5,0 mengguncang wilayah Toba Samosir, Sumatra Utara. Berdasarkan data dari Badan Meteorologi, Klimatologi, dan Geofisika (BMKG), gempa bumi terjadi pada Sabtu, 27 Maret 2021, pukul 15.46 WIB. Kemudian lokasi gempa terkini di Sumba Barat Daya tersebut berada pada koordinat 2,44 LU dan 98,96 BT."))
?>

<div class="home">
  <section class="header">
    <div class="title">
      <h1 class="prologue">
        <?= isset($page_title) 
                ? $page_title 
                : "We are IS Consultant that will help your lorem ipsum dolor sit amet, 
                    consectetur adipiscing elit. Dolor ipsum morbi massa elit consequat enim auctor."; ?>
      </h1>
    </div>
    <div class="circle"><p>Hello World!</p></div>
    <div class="corp-img" style="background-image: url('<?= isset($page_banner_url) ? $page_banner_url : "${directory_url}/img/about-header-img-corp.jpg" ?>');"></div>
  </section>
  <!-- end header -->

  <section class="about-us">
    <div class="wrapper d-flex align-items-center flex-column">
      <div class="title">
        <h1><?= isset($first_section_title) ? $first_section_title : "About Us" ?></h1>
      </div>
        <div class="subtitle">
          <?= isset($first_section_description) 
                  ? $first_section_description 
                  : "IS Consulting is a trusted taxes and transfer pricing consultant. 
                      Built to mee your needs for understanding and solving any issues 
                      in taxation and transfer pricing matters and all aspects related."  ?>
        </div>
      <div class="about-card">
        <div
          class="row row-cols-1 row-cols-md-2 row-cols-lg-3 justify-content-center"
        >
          <?php if(isset($values)): 
            $i = 1;
          ?>
            <?php foreach($values as $value): ?>
              <div class="col w-100 d-flex justify-content-center">
                <div class="card h-100 border-0">
                  <div class="card-icon">
                    <?php if (isset(get_field("secondary_value_icon", $value->ID)["url"])): ?>
                      <div class="circle-icon-<?= $i ?>">
                        <img
                          src="<?= get_field("secondary_value_icon", $value->ID)["url"] ?>"
                          class="icon"
                          alt="..."
                        />
                      </div>
                    <?php endif; ?>
                    <img
                      src="<?= get_field("primary_value_icon", $value->ID)["url"] ?>"
                      class="card-img-top"
                      alt="..."
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
            <?php 
              $i++;
              endforeach; 
            ?>
          <?php else: ?>
            <div class="col w-100 d-flex justify-content-center">
              <div class="card h-100 border-0">
                <div class="card-icon">
                  <div class="circle-icon-1">
                    <img
                      src="<?= $directory_url ?>/img/home-learning-sm-icon.svg"
                      class="icon"
                      alt="..."
                    />
                  </div>
                  <img
                    src="<?= $directory_url ?>/img/home-learning-icon.svg"
                    class="card-img-top"
                    alt="..."
                  />
                </div>
                <div class="card-body text-left">
                  <h5 class="card-title">Learning</h5>
                  <p class="card-text">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Eu
                    ut nunc, ultrices vitae dui. Integer suspendisse mattis id
                    in.
                  </p>
                </div>
              </div>
            </div>
            <div class="col w-100 d-flex justify-content-center">
              <div class="card h-100 border-0">
                <div class="card-icon">
                  <div class="circle-icon-2">
                    <img
                      src="<?= $directory_url ?>/img/home-workhard-sm-icon.svg"
                      class="icon"
                      alt="..."
                    />
                  </div>
                  <img
                    src="<?= $directory_url ?>/img/home-workhard-icon.svg"
                    class="card-img-top"
                    alt="..."
                  />
                </div>
                <div class="card-body text-left">
                  <h5 class="card-title">Work Hard</h5>
                  <p class="card-text">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Eu
                    ut nunc, ultrices vitae dui. Integer suspendisse mattis id
                    in.
                  </p>
                </div>
              </div>
            </div>
            <div class="col w-100 d-flex justify-content-center">
              <div class="card h-100 border-0">
                <div class="card-icon">
                  <div class="circle-icon-3">
                    <img
                      src="<?= $directory_url ?>/img/home-experience-sm-icon.svg"
                      class="icon"
                      alt="..."
                    />
                  </div>
                  <img
                    src="<?= $directory_url ?>/img/home-experience-icon.svg"
                    class="card-img-top"
                    alt="..."
                  />
                </div>
                <div class="card-body text-left">
                  <h5 class="card-title">Experience</h5>
                  <p class="card-text">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Eu
                    ut nunc, ultrices vitae dui. Integer suspendisse mattis id
                    in.
                  </p>
                </div>
              </div>
            </div>
            <div class="col w-100 d-flex justify-content-center">
              <div class="card h-100 border-0">
                <div class="card-icon">
                  <div class="circle-icon-4">
                    <img
                      src="<?= $directory_url ?>/img/home-optimist-sm-icon.svg"
                      class="icon"
                      alt="..."
                    />
                  </div>
                  <img
                    src="<?= $directory_url ?>/img/home-optimist-icon.svg"
                    class="card-img-top"
                    alt="..."
                  />
                </div>
                <div class="card-body text-left">
                  <h5 class="card-title">Optimist</h5>
                  <p class="card-text">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Eu
                    ut nunc, ultrices vitae dui. Integer suspendisse mattis id
                    in.
                  </p>
                </div>
              </div>
            </div>
            <div class="col w-100 d-flex justify-content-center">
              <div class="card h-100 border-0">
                <div class="card-icon">
                  <div class="circle-icon-5">
                    <img
                      src="<?= $directory_url ?>/img/home-satisfaction-sm-icon.svg"
                      class="icon"
                      alt="..."
                    />
                  </div>
                  <img
                    src="<?= $directory_url ?>/img/home-satisfaction-icon.svg"
                    class="card-img-top"
                    alt="..."
                  />
                </div>
                <div class="card-body text-left">
                  <h5 class="card-title">Satisfaction</h5>
                  <p class="card-text">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Eu
                    ut nunc, ultrices vitae dui. Integer suspendisse mattis id
                    in.
                  </p>
                </div>
              </div>
            </div>
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
      <a href="./Consultant.html"
        class="d-flex justify-content-between align-items-center"
        >See all Portfolio
        <svg
          width="9"
          height="13"
          viewBox="0 0 9 13"
          fill="none"
          xmlns="http://www.w3.org/2000/svg"
        >
          <path
            d="M2.02011 0.5L0.610107 1.91L5.19011 6.5L0.610107 11.09L2.02011 12.5L8.02011 6.5L2.02011 0.5Z"
            fill="white"
          /></svg
      ></a>
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
        <h1>
          <?= isset($third_section_title) ? $third_section_title : "News" ?>
        </h1>
      </div>
      <div class="subtitle">
        <?= isset($third_section_description) ? $third_section_description : "About what we’ve been talking about we share about accountant and tax"  ?>
      </div>
      <?php if(isset($news_posts)): ?>
        <div class="news-card">
          <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3">
              <?php foreach($news_posts as $news): ?>
                <?php $first_paragraph = array_filter(explode("<!-- /wp:paragraph -->", $news->post_content))[0] ?>
                <div class="col w-100 d-flex justify-content-center">
                  <div class="card h-100 border-0">
                    <div class="news-img">
                      <img
                        src="<?= get_field("news_image", $news->ID)["url"] ?>"
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
                          <span class="d-block">by Instagram <a href="#" class="news-link"><?= get_field("news_instagram", $news->ID) ?></a></span>
                        <?php endif; ?>
                        <?php if(!empty(get_field("news_date", $news->ID))): ?>
                          <span class="d-block"><?= get_field("news_date", $news->ID) ?></span>
                        <?php endif; ?>
                      </p>
                      <?php if(strlen($first_paragraph) > 338): ?>
                        <?= substr($first_paragraph, '0', '338') . "..." ?>
                      <?php else: ?>
                        <?= $first_paragraph ?>
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
    slidesPerView: 3,
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