<?php get_header() ?>

<?php
$args = array(
  'post_type'   => 'services',
  'post_status' => 'publish',
  'orderby'     => 'date',
  'order'       => 'ASC',
);
$services                 = get_posts( $args );

$first_service_post       = array_filter(explode('<!-- /wp:group -->', $services[0]->post_content));
$first_service_image_url  = get_field('service_image', $services[0]->ID)['url'];
$first_service_title      = $services[0]->post_title;

$second_service_post      = array_filter(explode('<!-- /wp:group -->', $services[1]->post_content));
$second_service_image_url = get_field('service_image', $services[1]->ID)['url'];
$second_service_title     = $services[1]->post_title;

$blog_name                = get_bloginfo('name');
$page_title               = get_post()->post_title;
$page_banner_url          = get_field("banner_image")['url'];
$page_description         = get_post()->post_content;
?>

<div class="services">
  <section class="header<?php if(empty($page_description)): ?> pb-5 <?php endif; ?>">
    <div class="container-header d-flex flex-column align-items-center">
      <div class="title">
        <h1><?= $page_title ?></h1>
      </div>
      <div class="corp-img" style="background-image: url('<?= isset($page_banner_url) ? $page_banner_url : $directory_url.'/img/home-header-img-corp.jpg' ?>');"></div>
      <?php if(isset($page_description)): ?>
      <div class="description">
        <p class="text-center">
          <?= $page_description ?>
        </p>
        <p class="about-is">About <?= $blog_name ?></p>
      </div>
      <div class="circle rounded-circle"></div>
      <?php endif; ?>
    </div>
  </section>
  <!-- end header -->

  <?php if(isset($first_service_post)): ?>
  <section class="service-1<?php if(empty($page_description)): ?> mt-5 <?php endif; ?>">     
    <div class="wrapper">
      <div class="title d-flex align-items-center">
        <div class="mr-5">
          <h1><?= $services[0]->post_title ?></h1>
        </div>
        <svg
            width="15"
            height="100%"
            viewBox="0 0 9 13"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path
              d="M2.02011 0.5L0.610107 1.91L5.19011 6.5L0.610107 11.09L2.02011 12.5L8.02011 6.5L2.02011 0.5Z"
              fill="black"
            /></svg
        >
      </div>
    </div>
    <div class="services-wrapper">
      <div class="row wrapper d-flex justify-content-center">
        <div class="col-lg-4 vismis-img" style="background-image: url('<?= $first_service_image_url ?>')"></div>
        <div class="col-lg-7">
          <div class="wrapper vismis-desc">
              <?php
                foreach($first_service_post as $service): 
                  //logic for first service content
                  $search = array(
                    'class="wp-block-group"',
                    'wp-block-group__inner-container', 
                    '<!-- wp:heading -->', 
                    '<!-- /wp:heading -->', 
                    '<!-- wp:paragraph -->',
                    "\xc2\xa0"
                  );

                  $replace = array(
                    'class="vision"',
                    'row',
                    '<div class="circle"></div>',
                    '</div>',
                    '<div class="row">',
                    ' '
                  );
                  $the_post = str_replace($search, $replace, $service);
              ?>
                  <?= $the_post  ?>
              <?php endforeach; ?>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end service-1 -->
  <?php endif; ?>

  <?php if(isset($second_service_post)): ?>
  <section class="service-2">
    <div class="wrapper">
      <div class="title d-flex align-items-center">
        <div class="mr-5">
          <h1>
            <?= $second_service_title ?>
          </h1>
        </div>
        <svg
            width="15"
            height="100%"
            viewBox="0 0 9 13"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path
              d="M2.02011 0.5L0.610107 1.91L5.19011 6.5L0.610107 11.09L2.02011 12.5L8.02011 6.5L2.02011 0.5Z"
              fill="black"
            /></svg
        >
      </div>
    </div>
    <div class="port">
      <div class="port-img" style="background-image: url('<?= $second_service_image_url ?>');"></div>
      <div class="wrapper mt-5">
        <?php
          foreach($second_service_post as $service): 
            //logic for second service content
            $search = array(
              'class="wp-block-group"',
              'wp-block-group__inner-container', 
              '<!-- wp:heading -->', 
              '<!-- /wp:heading -->', 
              '<!-- wp:paragraph -->',
              "\xc2\xa0"
            );

            $replace = array(
              'class="service-desc"',
              'row',
              '<div class="circle"></div>',
              '</div>',
              '<div class="row">',
              ' '
            );
            $the_post = str_replace($search, $replace, $service);
        ?>
            <?= $the_post  ?>
        <?php endforeach; ?>
      </div>
    </div>
  </section>
  <!-- end service-2 -->
  <?php endif; ?>
</div>

<?php get_footer() ?>