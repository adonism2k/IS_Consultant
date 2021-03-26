<?php get_header() ?>

<div class="about-us">
  <section class="header">
    <div class="container-header d-flex flex-column align-items-center">
      <div class="title">
        <h1>
          <?=get_the_title()?>
        </h1>
      </div>
      <div class="corp-img" style="background-image: url('<?=get_field("banner_image")['url']?>');"></div>
      <div class="description">
        <?php if(has_blocks()): ?>
          <?= get_post()->post_content?>
        <?php else: ?>
          <p class="text-center">
            IS Consulting is a trusted taxes and transfers pricing consultant. Built to meet your needs for understanding and solving any issues in taxation and transfer pricing matters and all aspects related.
          </p>
          <p class="text-center">
            We take a strategic approach when assisting our clients in achieving client objectives. Our team of professionals is involved from preparation, planning, and determination of action steps all the way through to execution and implementation.
          </p>
        <?php endif; ?>
        <p class="about-is">About <?= get_bloginfo('name') !== null ? get_bloginfo('name') : 'IS Consulting' ?></p>
      </div>
      <div class="circle rounded-circle"></div>
    </div>
  </section>
  <!-- end header -->

  <section class="vismis">
    <div class="row wrapper d-flex justify-content-center">
      <div class="col-lg-4 vismis-img" style="background-image: url('<?=get_field("vismis_image")['url']?>');"></div>
      <div class="col-lg-7 ">
        <div class="wrapper vismis-desc">
          <div class="vision">
            <div class="row">
              <h1 class="text-bold"><?=get_field('vision_title')?></h1>
            </div>
            <div class="row">
              <p>
                <?=get_field('vision_description')?>
              </p>
            </div>
          </div>
          <div class=""><h1 class="&">&</h1></div>
          <div class="mission">
            <div class="row">
              <h1><?=get_field('mission_title')?></h1>
            </div>
            <div class="row">
              <p>
                <?=get_field('mission_description')?>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end vismis -->

  <section class="about-us">
    <div class="wrapper d-flex align-items-center flex-column">
      <div class="title mb-5">
        <h1>Our Value</h1>
      </div>
      <div class="about-card">
        <div
          class="row row-cols-1 row-cols-md-2 row-cols-lg-3 justify-content-center"
        >
          <div class="col w-100 d-flex justify-content-center">
            <div class="card h-100 border-0">
              <div class="card-icon">
                <div class="circle-icon-1">
                  <img
                    src="<?= get_template_directory_uri() ?>/Assets/img/home-learning-sm-icon.svg"
                    class="icon"
                    alt="..."
                  />
                </div>
                <img
                  src="<?= get_template_directory_uri() ?>/Assets/img/home-learning-icon.svg"
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
                    src="<?= get_template_directory_uri() ?>/Assets/img/home-workhard-sm-icon.svg"
                    class="icon"
                    alt="..."
                  />
                </div>
                <img
                  src="<?= get_template_directory_uri() ?>/Assets/img/home-workhard-icon.svg"
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
                    src="<?= get_template_directory_uri() ?>/Assets/img/home-experience-sm-icon.svg"
                    class="icon"
                    alt="..."
                  />
                </div>
                <img
                  src="<?= get_template_directory_uri() ?>/Assets/img/home-experience-icon.svg"
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
                    src="<?= get_template_directory_uri() ?>/Assets/img/home-optimist-sm-icon.svg"
                    class="icon"
                    alt="..."
                  />
                </div>
                <img
                  src="<?= get_template_directory_uri() ?>/Assets/img/home-optimist-icon.svg"
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
                    src="<?= get_template_directory_uri() ?>/Assets/img/home-satisfaction-sm-icon.svg"
                    class="icon"
                    alt="..."
                  />
                </div>
                <img
                  src="<?= get_template_directory_uri() ?>/Assets/img/home-satisfaction-icon.svg"
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
        </div>
        <div class="circle"></div>
      </div>
    </div>
  </section>
  <!-- end about us -->
</div>

<?php get_footer() ?>