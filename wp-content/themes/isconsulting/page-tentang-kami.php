<?php get_header() ?>

<?php
$args = array(
  "post_type"     => "values",
  "post_status"   => "publish",
);
$values                  = array_reverse(get_posts( $args ));
$directory_url           = get_template_directory_uri();
$blog_name               = get_bloginfo("name");
$page_title              = get_field("page_title");
$page_banner_url         = get_field( "banner_image" )["url"];
$page_first_description  = get_field("page_first_description");
$page_second_description = get_field("page_second_description");
$vismis_image            = get_field("vismis_image")["url"];
$vision_title            = get_field("vision_title");
$vision_description      = get_field("vision_description");
$mission_title           = get_field("mission_title");
$mission_description     = get_field("mission_description");
$second_section_title    = get_field("second_section_title");
?>

<div class="about-us">
  <section class="header">
    <div class="container-header d-flex flex-column align-items-center">
      <div class="title">
        <h1><?= $page_title ?></h1>
      </div>
      <div class="corp-img" style="background-image: url('<?= $page_banner_url ?> ');"></div>
      <?php if($page_first_description or $page_second_description !== null): ?>
        <div class="description">
            <p class="text-center"><?= $page_first_description ?></p>
            <p class="text-center"><?= $page_second_description ?></p>
            <p class="about-is">About <?= $blog_name?></p>
        </div>
        <div class="circle rounded-circle"></div>
      <?php endif; ?>
    </div>
  </section>
  <!-- end header -->

  <section class="vismis">
    <div class="row wrapper d-flex justify-content-center">
      <div class="col-lg-4 vismis-img" style="background-image: url('<?= $vismis_image ?>');"></div>
      <div class="col-lg-7">
        <div class="wrapper vismis-desc">
          <div class="vision">
            <h1 class="text-bold"><?= $vision_title ?></h1>
            <p><?= $vision_description ?></p>
          </div>
          <div class=""><h1 class="&">&</h1></div>
          <div class="mission">
            <h1 class="text-bold"><?= $mission_title ?></h1>
            <p><?= $mission_description ?></p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end vismis -->

  <section class="about-us">
    <div class="wrapper d-flex align-items-center flex-column">
      <div class="title mb-5">
        <h1><?= $second_section_title ?></h1>
      </div>
      <div class="about-card">
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 justify-content-center">
          <?php if(!empty($values)): $i = 1 ?>
            <?php foreach($values as $value): ?>
              <div class="col w-100 d-flex justify-content-center">
                <div class="card h-100 border-0 pb-0">
                  <div class="card-icon">
                    <?php if (isset(get_field("secondary_value_icon", $value->ID)["url"])): ?>
                      <div class="circle-icon-<?= $i++ ?>">
                        <img src="<?= get_field("secondary_value_icon", $value->ID)["url"] ?>" class="icon" alt="..."/>
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
</div>

<?php get_footer() ?>