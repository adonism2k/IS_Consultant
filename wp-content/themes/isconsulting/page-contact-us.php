<?php get_header() ?>

<div class="contact-us">
  <section class="newsletter">
    <div class="row wrapper">
      <div class="col-lg-5">
        <div class="title">
          <h1>Contact Us</h1>
        </div>
        <div class="address">
          <div class="circle"></div>
          <p>
            <?= get_field( 'address' ) ?>
          </p>
        </div>
        <div class="contact">
          <div class="row phone-wrapper mb-3">
            <img src="<?= get_template_directory_uri() ?>/Assets/img/phone-icon-black.svg" alt="..." />
            <span class="ml-4"> <?= get_field( 'phone_number' ) ?> </span>
          </div>
          <div class="row wa-wrapper mb-3">
            <img src="<?= get_template_directory_uri() ?>/Assets/img/wa-icon-black.svg" alt="..." />
            <span class="ml-4"> <?= get_field( 'whatsapp_number' ) ?> </span>
          </div>
          <div class="row email-wrapper mb-3">
            <img src="<?= get_template_directory_uri() ?>/Assets/img/email-icon-black.svg" alt="..." />
            <span class="ml-4">
              <a href="#"><?= get_field( 'email' ) ?></a>
            </span>
          </div>
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

  <section class="map">
    <div class="title">
      <div class="wrapper">
        <h1>Find Us on Map</h1>
      </div>
      <div id="map"></div>
    </div>
  </section>
  <!-- end map -->
</div>




<!-- Mapbox -->
<script>
  mapboxgl.accessToken =
    "pk.eyJ1IjoiYWRvbmlzbWUyayIsImEiOiJja21nMWs1Z2EwNHU4MnVvNWZiMnJ2ZmR5In0.mQmyv9vDS91yzjoWDTpgJw";
  var map = new mapboxgl.Map({
    container: "map", // container id
    style: "mapbox://styles/mapbox/streets-v11",
    center: [<?= (float)get_field('longitude') ?>, <?= (float)get_field('latitude') ?>], // starting position
    doubleClickZoom: true,
    scrollZoom: false,
    zoom: 15, // starting zoom
  });
  // Set options
  var marker = new mapboxgl.Marker({
    color: "#147fab",
    draggable: false,
  })
    .setLngLat([<?= (float)get_field('longitude') ?>, <?= (float)get_field('latitude') ?>])
    .addTo(map);

  // Add zoom and rotation controls to the map.
  map.addControl(new mapboxgl.NavigationControl());
</script>
<!-- end Mapbox -->

<?php get_footer() ?>