<?php get_header() ?>
<?php
$directory_url = get_template_directory_uri();
?>

<div class="home">
  <section class="header">
    <div class="title">
      <h1 class="prologue">
        <?php if(has_blocks()): ?>
          <?= get_post()->post_content ?>
        <?php else: ?>
          We are IS Consultant that will help your lorem ipsum dolor sit amet, consectetur adipiscing elit. Dolor ipsum morbi massa elit consequat enim auctor.
        <?php endif; ?>
      </h1>
    </div>
    <div class="circle"><p>Hello World!</p></div>
    <div class="corp-img" style="background-image: url('<?= get_template_directory_uri() ?>/img/home-header-img-corp.jpg');"></div>
  </section>
  <!-- end header -->

  <section class="about-us">
    <div class="wrapper d-flex align-items-center flex-column">
      <div class="title">
        <h1>About Us</h1>
      </div>
      <div class="subtitle">
        IS Consulting is a trusted taxes and transfer pricing consultant.
        Built to mee your needs for understanding and solving any issues in
        taxation and transfer pricing matters and all aspects related.
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
                    src="<?= get_template_directory_uri() ?>/img/home-learning-sm-icon.svg"
                    class="icon"
                    alt="..."
                  />
                </div>
                <img
                  src="<?= get_template_directory_uri() ?>/img/home-learning-icon.svg"
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
                    src="<?= get_template_directory_uri() ?>/img/home-workhard-sm-icon.svg"
                    class="icon"
                    alt="..."
                  />
                </div>
                <img
                  src="<?= get_template_directory_uri() ?>/img/home-workhard-icon.svg"
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
                    src="<?= get_template_directory_uri() ?>/img/home-experience-sm-icon.svg"
                    class="icon"
                    alt="..."
                  />
                </div>
                <img
                  src="<?= get_template_directory_uri() ?>/img/home-experience-icon.svg"
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
                    src="<?= get_template_directory_uri() ?>/img/home-optimist-sm-icon.svg"
                    class="icon"
                    alt="..."
                  />
                </div>
                <img
                  src="<?= get_template_directory_uri() ?>/img/home-optimist-icon.svg"
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
                    src="<?= get_template_directory_uri() ?>/img/home-satisfaction-sm-icon.svg"
                    class="icon"
                    alt="..."
                  />
                </div>
                <img
                  src="<?= get_template_directory_uri() ?>/img/home-satisfaction-icon.svg"
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

  <section class="portfolio">
    <div class="title">
      <h1>Portfolio</h1>
    </div>
    <div class="port-photos">
      <a
        href="./Consultant.html"
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
          <div class="swiper-slide" style="background-image: url('<?= $directory_url ?>/img/home-port-img1-corp.jpg') ;"></div>
          <div class="swiper-slide" style="background-image: url('<?= $directory_url ?>/img/home-port-img2-corp.jpg') ;"></div>
          <div class="swiper-slide" style="background-image: url('<?= $directory_url ?>/img/home-port-img3-corp.jpg') ;"></div>
          <div class="swiper-slide" style="background-image: url('<?= $directory_url ?>/img/home-port-img1-corp.jpg') ;"></div>
          <div class="swiper-slide" style="background-image: url('<?= $directory_url ?>/img/home-port-img2-corp.jpg') ;"></div>
          <div class="swiper-slide" style="background-image: url('<?= $directory_url ?>/img/home-port-img3-corp.jpg') ;"></div>
        </div>
        <div class="swiper-pagination"></div>
      </div>
    </div>
  </section>
  <!-- end portfolio -->

  <section class="news">
    <div class="wrapper d-flex align-items-center flex-column">
      <div class="title">
        <h1>News</h1>
      </div>
      <div class="subtitle">
        About what we’ve been talking about we share about accountant and tax
      </div>
      <div class="news-card">
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-4">
          <div class="col w-100 d-flex justify-content-center">
            <div class="card h-100 border-0">
              <div class="news-img">
                <img
                  src="<?= get_template_directory_uri() ?>/img/home-newsImage1-corp.jpg"
                  class="card-img-top"
                  alt="..."
                />
              </div>
              <div class="card-body text-left">
                <h5 class="card-title">
                  The Future of User Interface Accountant
                </h5>
                <p class="card-text">
                  by Instagram <a href="#" class="news-link">@isconsulting</a>
                  <br />
                  02 February 2021
                </p>
                <p class="card-text">
                  Pemerintah mempertegas sekaligus menyederhanakan ketentuan
                  pajak atas penjualan pulsa, kartu perdana, token listrik dan
                  voucher, sebagaimana tertuang dalam Peraturan Menteri
                  Keuangan (PMK) Nomor 6/PMK.03/2021 yang berlaku mulai
                  tanggal 1 Februari 2021.
                  <a href="#">⁣Simak update selengkapnya</a>
                </p>
              </div>
            </div>
          </div>
          <div class="col w-100 d-flex justify-content-center">
            <div class="card h-100 border-0">
              <div class="news-img">
                <img
                  src="<?= get_template_directory_uri() ?>/img/home-newsImage2-corp.jpg"
                  class="card-img-top"
                  alt="..."
                />
              </div>
              <div class="card-body text-left">
                <h5 class="card-title">
                  The Future of User Interface Accountant
                </h5>
                <p class="card-text">
                  by Instagram <a href="#" class="news-link">@isconsulting</a>
                  <br />
                  02 February 2021
                </p>
                <p class="card-text">
                  Pemerintah mempertegas sekaligus menyederhanakan ketentuan
                  pajak atas penjualan pulsa, kartu perdana, token listrik dan
                  voucher, sebagaimana tertuang dalam Peraturan Menteri
                  Keuangan (PMK) Nomor 6/PMK.03/2021 yang berlaku mulai
                  tanggal 1 Februari 2021.
                  <a href="#">⁣Simak update selengkapnya</a>
                </p>
              </div>
            </div>
          </div>
          <div class="col w-100 d-flex justify-content-center">
            <div class="card h-100 border-0">
              <div class="news-img">
                <img
                  src="<?= get_template_directory_uri() ?>/img/home-newsImage3-corp.jpg"
                  class="card-img-top"
                  alt="..."
                />
              </div>
              <div class="card-body text-left">
                <h5 class="card-title">
                  The Future of User Interface Accountant
                </h5>
                <p class="card-text">
                  by Instagram <a href="#" class="news-link">@isconsulting</a>
                  <br />
                  02 February 2021
                </p>
                <p class="card-text">
                  Pemerintah mempertegas sekaligus menyederhanakan ketentuan
                  pajak atas penjualan pulsa, kartu perdana, token listrik dan
                  voucher, sebagaimana tertuang dalam Peraturan Menteri
                  Keuangan (PMK) Nomor 6/PMK.03/2021 yang berlaku mulai
                  tanggal 1 Februari 2021.
                  <a href="#">⁣Simak update selengkapnya</a>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
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