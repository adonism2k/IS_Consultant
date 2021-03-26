<?php get_header() ?>

<?php
$directory_url   = get_template_directory_uri();
$address         = get_field('address');
$phone_number    = get_field('phone_number');
$whatsapp_number = get_field('whatsapp_number');
$email           = get_field('email');
$lng             = (float)get_field('longitude');
$lat             = (float)get_field('latitude');
?>

<div class="contact-us">
  <section class="newsletter">
    <div class="row wrapper">
      <div class="col-lg-5">
        <div class="title">
          <h1>Contact Us</h1>
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
              <span class="ml-4"> <?= $phone_number ?> </span>
            </div>
          <?php endif; ?>
          <?php if (isset($whatsapp_number)): ?>
            <div class="row wa-wrapper mb-3">
              <img src="<?=$directory_url?>/img/wa-icon-black.svg" alt="..." />
              <span class="ml-4"> <?= $whatsapp_number ?> </span>
            </div>
          <?php endif; ?>
          <?php if (isset($email)): ?>
            <div class="row email-wrapper mb-3">
              <img src="<?=$directory_url?>/img/email-icon-black.svg" alt="..." />
              <span class="ml-4">
                <a href="#"><?= $email ?></a>
              </span>
            </div>
          <?php endif; ?>
        </div>
      </div>
      <div class="col-lg-7">
        <form action="#" class="form-newsletter d-flex flex-column align-items-center">
          <div class="form-group">
            <label for="name">Full Name</label>
            <input
              type="text"
              class="form-control"
              id="name"
              placeholder="Name"
            />
          </div>
          <div class="form-group">
            <label for="phone">Phone</label>
            <input
              type="email"
              class="form-control"
              id="phone"
              placeholder=Phone number"
            />
          </div>
          <div class="form-group">
            <label for="email">Email address</label>
            <input
              type="email"
              class="form-control"
              id="email"
              placeholder="name@example.com"
            />
          </div>
          <div class="form-group">
            <label for="message">Message</label>
            <textarea class="form-control" id="message" rows="3" placeholder="message"></textarea>
          </div>
          <button
            type="submit"
            class="btn btn-primary mt-3 px-4 py-2 rounded-lg"
          >
            Submit
          </button>
        </form>
      </div>
    </div>
  </section>
  <!-- end newsletter -->
  
  <?php if($lng && $lat !== null): ?>
  <section class="map">
    <div class="title">
      <div class="wrapper">
        <h1>Find Us on Map</h1>
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
    center: [<?= $lng ?>, <?= $lat ?>], // starting position
    doubleClickZoom: true,
    scrollZoom: false,
    zoom: 15, // starting zoom
  });
  // Set options
  var marker = new mapboxgl.Marker({
    color: "#147fab",
    draggable: false,
  })
    .setLngLat([<?= $lng ?>, <?= $lat ?>])
    .addTo(map);

  // Add zoom and rotation controls to the map.
  map.addControl(new mapboxgl.NavigationControl());
</script>
<!-- end Mapbox -->
<?php endif; ?>

<?php get_footer() ?>