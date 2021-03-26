<?php get_header() ?>
<div class="news">
  <section class="header">
    <div class="title">
      <h1><?=get_the_title()?></h1>
    </div>
    <div class="corp-img" style="background-image: url('<?=get_field( "banner_image" )['url']?>');"></div>
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
      <div class="news-card">
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-4">
          <div class="col w-100 d-flex justify-content-center">
            <div class="card h-100 border-0">
              <div class="news-img">
                <img
                  src="<?= get_template_directory_uri() ?>/Assets/img/home-newsImage1-corp.jpg"
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
                  src="<?= get_template_directory_uri() ?>/Assets/img/home-newsImage2-corp.jpg"
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
                  src="<?= get_template_directory_uri() ?>/Assets/img/home-newsImage3-corp.jpg"
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
                  src="<?= get_template_directory_uri() ?>/Assets/img/home-newsImage1-corp.jpg"
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
                  src="<?= get_template_directory_uri() ?>/Assets/img/home-newsImage1-corp.jpg"
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
                  src="<?= get_template_directory_uri() ?>/Assets/img/home-newsImage1-corp.jpg"
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
                  src="<?= get_template_directory_uri() ?>/Assets/img/home-newsImage1-corp.jpg"
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
                  src="<?= get_template_directory_uri() ?>/Assets/img/home-newsImage1-corp.jpg"
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
                  src="<?= get_template_directory_uri() ?>/Assets/img/home-newsImage1-corp.jpg"
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
                  src="<?= get_template_directory_uri() ?>/Assets/img/home-newsImage1-corp.jpg"
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
                  src="<?= get_template_directory_uri() ?>/Assets/img/home-newsImage1-corp.jpg"
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
                  src="<?= get_template_directory_uri() ?>/Assets/img/home-newsImage1-corp.jpg"
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

<?php get_footer() ?>