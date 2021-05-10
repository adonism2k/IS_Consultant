<?php
$blog_name       = get_bloginfo("name");
$directory_url   = get_template_directory_uri();
$address         = get_option("address");
$phone_number    = get_option("phone_number");
$whatsapp_number = get_option("whatsapp_number");
$email           = get_option("email");

$pattern = ['/-/', '/\b[0]/']; 
$replace = ['', '62'];
$int_wa_num = preg_replace($pattern, $replace, $whatsapp_number);
$int_phone_num = preg_replace($pattern, $replace, $phone_number);
?>
    
    <footer class="d-flex justify-content-center align-items-center flex-column">
      <div class="footer-container d-flex justify-content-center align-items-center">
        <div class="row h-100 w-100">
          <div class="col-xl-2 col-lg-4 logo">
            <img src="<?= $directory_url ?>/img/logo-corp.svg" alt="IS Consultant" />
          </div>
          <div class="col-xl-7 col-lg-8 contact d-flex flex-column justify-content-between">
            <div class="title mb-3"><h4><?= pll_e('Contact Us'); ?></h4></div>
            <div class="row content">
              <?php if(isset($address)): ?>
                <div class="col-md address__wrapper d-flex mb-3">
                  <div class="icon">
                    <img src="<?= $directory_url ?>/img/map-icon.svg" alt="..." />
                  </div>
                  <div class="address pl-5">
                    <?= $address ?>
                  </div>
                </div>
              <?php endif; ?>
              <div class="col-md contact-list__wrapper">
                <?php if(isset($phone_number)): ?>
                  <div class="contact-phone__wrapper d-flex align-items-center mb-3">
                    <div class="icon">
                      <img src="<?= $directory_url ?>/img/phone-icon.svg" alt="..." />
                    </div>
                    <div class="contact-phone ml-5">
                      <a href="tel:<?=$int_phone_num?>" target="_blank"><?= $phone_number ?></a>
                    </div>
                  </div>
                <?php endif; ?>
                <?php if(isset($whatsapp_number)): ?>
                  <div class="contact-wa__wrapper d-flex align-items-center mb-3">
                    <div class="icon">
                      <img src="<?= $directory_url ?>/img/wa-icon.svg" alt="..." />
                    </div>
                    <div class="contact-wa ml-5">
                      <a href="https://wa.me/<?=$int_wa_num?>" target="_blank"><?= $whatsapp_number ?></a>
                    </div>
                  </div>
                <?php endif; ?>
                <?php if(isset($email)): ?>
                  <div class="contact-email__wrapper d-flex align-items-center mb-3">
                    <div class="icon">
                      <img src="<?= $directory_url ?>/img/email-icon.svg" alt="..." />
                    </div>
                    <div class="contact-email ml-5">
                      <a href="mail:xxxx" target="_blank"><?= $email ?></a>
                    </div>
                  </div>
                <?php endif; ?>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-lg-12 w-100">
              <div class="title mb-3"><h4><?= pll_e('Special Letter to Us'); ?></h4></div>
              <div class="subtitle mb-3">
                <?= pll_e('For more updates and information, drop us an email or phone number.'); ?>
              </div>
              <form action="" method="POST" name="subscribe"   class="d-flex flex-column justify-content-center align-items-center">
                <input type="email" name="email" id="email" class="form-control" placeholder="Your Email..."/>
                <input type="hidden" name="action" value="subscribe">
                <?= wp_nonce_field('subscribe' ); ?>
                <button type="submit" class="btn btn-primary mt-3 px-4 py-2 rounded-lg">Submit</button>
              </form>
          </div>
        </div>
      </div>
      <div class="copyright container-fluid d-flex justify-content-center align-items-center">
        Copyright © <?= date('Y') ." ". $blog_name ?>. All Right Reserved
      </div>
    </footer>
    <!-- end footer -->

    <?php if(isset($_SESSION["subscribed"])): ?>
      <div class="modal fade" id="flashModal" tabindex="-1" aria-labelledby="flashModal" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content border-0">
            <div class="modal-header border-0">
              <h5 class="modal-title" id="flashModal"><?= $_SESSION["subscribed"] ?></h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
          </div>
        </div>
      </div> <!-- end modal -->
      <?php unset($_SESSION["subscribed"]) ?>
    <?php endif; ?>


    <!-- Packages JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <script>
      $(".news-img").each((i, el) => {
        var img = $(el).find(".card-img-top")
        if ($(img).height() >= 250) {
          $(el).toggleClass("align-items-center")
        } else {
          $(el).toggleClass("align-items-start")
        }
      })

      $('#flashModal').modal('show')
      var openInNewWindow = (url, provider) => {
        var w = provider == "twitter" ? 500 : 800;
        var h = provider == "twitter" ? 300 : 500;
        var left = screen.width / 2 - w / 2;
        var top = screen.height / 2 - h / 2;
        window.open(
          url,
          'social_share',
          `height=${h},width=${w},top=${top},left=${left},scrollbars=yes,titlebar=no,toolbar=no,menubar=no,resizeable=no,status=no`
        )
        return false;
      };
      
      if (screen.width > 768) { //refresh ketika breakpoint berubah
        $(".news-image").each((i, el) => {
          el.style.height = el.offsetWidth / 16 * 9 + "px";
        })
      }
      
      var cardContent = $(".card-body").find(".content")
      if (screen.width <= 768 && $(cardContent).html().length > 150) {
        $(cardContent).each((i, el) => {
          $(el).html($(el).html().substring(0, 150) + "...") 
        })
      } else if (screen.width >= 768 && screen.width <= 1372 && $(cardContent).html().length > 200) {
        $(cardContent).each((i, el) => {
          $(el).html($(el).html().substring(0, 200) + "...") 
        })
      } else if (screen.width >= 1372 && $(cardContent).html().length > 400) {
        $(cardContent).each((i, el) => {
          $(el).html($(el).html().substring(0, 400) + "...") 
        })
      }
    </script>
  </body>
</html>
