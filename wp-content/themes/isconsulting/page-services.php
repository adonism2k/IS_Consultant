<?php get_header() ?>

<?php
$args = array(
  'post_type'   => 'services',
  'post_status' => 'publish',
  'orderby'     => 'date',
  'order'       => 'ASC',
);

$service_query = new WP_Query( $args );
$services = $service_query->posts;
$services_1 = array_filter(explode('<!-- /wp:group -->', $services[0]->post_content));
$services_2 = array_filter(explode('<!-- /wp:group -->', $services[1]->post_content));

// foreach ($wp_group_posts as $post) {

//   $search = array(
//     'class="wp-block-group"',
//     'wp-block-group__inner-container', 
//     '<!-- wp:heading -->', 
//     '<!-- /wp:heading -->', 
//     '<!-- wp:paragraph -->',
//   );

//   $replace = array(
//     'class="vision"',
//     'row',
//     '<div class="circle"></div>',
//     '</div>',
//     '<div class="row">'
//   );
  
//   $p = getTextBetweenTags($post, "p");
  
//   $replacing_str = str_replace($search, $replace, $post);
//   var_dump($replacing_str);
// }
?>

<div class="services">
  <section class="header">
    <div class="container-header d-flex flex-column align-items-center">
      <div class="title">
        <h1><?= get_post()->post_title ?></h1>
      </div>
      <div class="corp-img" style="background-image: url('<?=get_field("banner_image")['url']?>');"></div>
      <div class="description">
        <?php if(has_blocks()): ?>
          <?= get_post()->post_content ?>
        <?php else: ?>
          <p class="text-center">
            IS Consulting is a trusted taxes and transfers pricing consultant. Built to meet your needs for understanding and solving any issues in taxation and transfer pricing matters and all aspects related.
          </p>
        <?php endif; ?>
        <p class="about-is">About <?= get_bloginfo('name') !== null ? get_bloginfo('name') : 'IS Consulting' ?></p>
      </div>
      <div class="circle rounded-circle"></div>
    </div>
  </section>
  <!-- end header -->


  <section class="service-1">     
    <div class="wrapper">
      <div class="title d-flex align-items-center">
        <div class="mr-5">
          <h1>
            <?= $services[0]->post_title ?>
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
    <div class="services-wrapper">
      <div class="row wrapper d-flex justify-content-center">
        <div class="col-lg-4 vismis-img" style="background-image: url('<?= get_field('service_image', $services[0]->ID)['url']; ?>')"></div>
        <div class="col-lg-7">
          <div class="wrapper vismis-desc">
              <?php
                foreach($services_1 as $service): 
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
              ?>
                  <?= str_replace($search, $replace, $service);  ?>
              <?php endforeach; ?>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end service-1 -->


  <section class="service-2">
    <div class="wrapper">
      <div class="title d-flex align-items-center">
        <div class="mr-5">
          <h1>
            <?= $services[1]->post_title ?>
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
      <div class="port-img" style="background-image: url('<?= get_field('service_image', $services[1]->ID)['url']; ?>');"></div>
      <div class="wrapper mt-5">
        <?php
          foreach($services_2 as $service): 
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
        ?>
            <?= str_replace($search, $replace, $service);  ?>
        <?php endforeach; ?>
        <!-- <div class="service-desc">
          <div class="row">
            <div class="circle"></div>
            <h1 class="text-bold">-	Tax Audit & Objection</h1>
          </div>
          <div class="row">
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Posuere diam libero magna proin ligula eget nullam. Massa eget gravida viverra in volutpat. 
            </p>
          </div>
        </div> -->
      </div>
    </div>
  </section>
  <!-- end service-2 -->
</div>

<?php get_footer() ?>