<?php get_header() ?>

<?php
$directory_url     = get_template_directory_uri();
$contact_us_title  = get_field('contact_us_title');
$show_on_map_title = get_field('show_on_map_title');
$address           = get_option("address");
$phone_number      = get_option("phone_number");
$whatsapp_number   = get_option("whatsapp_number");
$email             = get_option("email");
$lng               = (float)get_option("longitude");
$lat               = (float)get_option("latitude");
$contact_form      = apply_shortcodes('[contact-form-7 id="576" title="Contact Us form"]');

$pattern = ['/-/', '/\b[0]/']; 
$replace = ['', '62'];
$int_wa_num = preg_replace($pattern, $replace, $whatsapp_number);
$int_phone_num = preg_replace($pattern, $replace, $phone_number);
?>

<div class="contact-us">
  <section class="newsletter">
    <div class="row wrapper">
      <div class="col-lg-5">
        <div class="title">
          <h1><?= $contact_us_title ?></h1>
        </div>
        <?php if (isset($address)): ?>
          <div class="address">
            <div class="circle"></div>
            <p><?= $address ?></p>
          </div>
        <?php endif; ?>
        <div class="contact">
          <?php if (isset($phone_number)): ?>
            <div class="row phone-wrapper mb-3">
              <img src="<?=$directory_url?>/img/phone-icon-black.svg" alt="..." />
              <span class="ml-2 ml-md-4">
                <a href="tel:<?=$int_phone_num?>" target="_black"><?= $phone_number ?></a>    
              </span>
            </div>
          <?php endif; ?>
          <?php if (isset($whatsapp_number)): ?>
            <div class="row wa-wrapper mb-3">
              <img src="<?=$directory_url?>/img/wa-icon-black.svg" alt="..." />
              <span class="ml-2 ml-md-4">
                <a href="https://wa.me/<?=$int_wa_num?>" target="_black"><?= $whatsapp_number ?></a>
              </span>
            </div>
          <?php endif; ?>
          <?php if (isset($email)): ?>
            <div class="row email-wrapper mb-3">
              <img src="<?=$directory_url?>/img/email-icon-black.svg" alt="..." />
              <span class="ml-2 ml-md-4">
                <a href="mail:xxxx" target="_black"><?= $email ?></a>
              </span>
            </div>
          <?php endif; ?>
        </div>
      </div>
      <div class="col-lg-7 h-100"><?= $contact_form ?></div>
    </div>
  </section>
  <!-- end newsletter -->
  
  <?php if($lng && $lat !== null): ?>
  <section class="map">
    <div class="title">
      <div class="wrapper">
        <h1><?= $show_on_map_title ?></h1>
      </div>
      <div id="map"></div>
    </div>
  </section>
  <!-- end map -->
  <?php endif; ?>
</div>



<?php if($lng && $lat !== null): ?>
<!-- Mapbox -->
<script>
  mapboxgl.accessToken =
    "pk.eyJ1IjoiYWRvbmlzbWUyayIsImEiOiJja21nMWs1Z2EwNHU4MnVvNWZiMnJ2ZmR5In0.mQmyv9vDS91yzjoWDTpgJw";
  var map = new mapboxgl.Map({
    container: "map", // container id
    style: "mapbox://styles/mapbox/streets-v11",
    center: [<?=$lng?>, <?=$lat?>], // starting position
    doubleClickZoom: true,
    scrollZoom: false,
    zoom: 14, // starting zoom
  });
  // Set options
  var marker = new mapboxgl.Marker({
    color: "#147fab",
    draggable: false,
    scale: 2,
  })
    .setLngLat([<?=$lng?>, <?=$lat?>])
    .addTo(map);

  // Add zoom and rotation controls to the map.
  map.addControl(new mapboxgl.NavigationControl());
</script>
<!-- end Mapbox -->
<?php endif; ?>

<?php get_footer() ?>