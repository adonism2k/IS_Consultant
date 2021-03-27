<?php get_header() ?>

<?php
$args = array(
    'post_type'   => 'portfolio',
    'post_status' => 'publish',
    'posts_per_page' => 10,
    'orderby'     => 'date',
    'order'       => 'ASC',
);
$projects = get_posts( $args );
$hero_image_url = get_field('user_image')['url'];
$user_name = get_field('user_name');
$user_description = get_field('user_description');

$portfolio_title = get_field('portfolio_title');
?>

<div class="consultant">
  <section class="header">
    <div class="wrapper profile">
      <div class="row h-100 justify-content-md-between align-items-start">
        <div class="col-xl-4 profile-img">
          <img src="<?= $hero_image_url ?>" alt="Profile Image">
        </div>
        <div class="col-xl-7 profile-desc">
            <h1 class="mb-5">
              <?= $user_name ?>
            </h1> 
            <p>
              <?= $user_description ?>
            </p>
        </div>
      </div>
    </div>
  </section>
  <!-- end header -->
  <section class="portfolio">
    <div class="wrapper">
      <h1 class="title">
        <?= $portfolio_title ?>
      </h1>
    </div>
    <?php if(isset($projects)): ?>
      <?php foreach($projects as $project): ?>
        <div class="port">
          <div class="port-img" style="background-image: url('<?= get_field('project_image', $project->ID)['url']; ?>');"></div>
          <div class="deskripsi d-flex justify-content-center align-items-center">
            <div class="wrapper">
              <div class="date"><?= get_field('date', $project->ID); ?></div>
              <div class="row">
                <div class="col-md-4">
                  <h1 >
                    <?= $project->post_title ?>
                  </h1>
                </div>
                <div class="col-md-8">
                  <p >
                    <?= $project->post_content ?>
                  </p>
                </div>
              </div>
            </div>  
          </div>
        </div>
      <?php endforeach; ?>
    <?php endif; ?>
  </section>
  <!-- portfolio -->  
</div>

<?php get_footer() ?>