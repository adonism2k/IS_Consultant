<!-- Create a header in the default WordPress 'wrap' container -->
<div class="wrap">
  <h1>Contact Options</h1>
  <?php settings_errors(); ?>
    
  <form method="post" action="options.php">
    <?php
      settings_fields( 'contact-options' );
      do_settings_sections( 'contact-options' );
      // var_dump(form_option('phone_number'));
    ?>
    <table class="form-table" role="presentation">
      <tr>
        <th scope="row">
          <label for="address">Address</label>
        </th>
        <td>
          <textarea name="address" id="address" rows="5" style="width: 100%;"><?= get_option("address") ?></textarea>
        </td>
      </tr>
      
      <tr>
        <th scope="row">
          <label for="phone_number">Phone Number</label>
        </th>
        <td>
          <input style="width: 100%;" name="phone_number" type="text" id="phone_number" value="<?= get_option('phone_number'); ?>" class="regular-text" />
        </td>
      </tr>
      
      <tr>
        <th scope="row">
          <label for="whatsapp_number">Whatsapp Number</label>
        </th>
        <td>
          <input style="width: 100%;" name="whatsapp_number" type="text" id="whatsapp_number" value="<?= get_option('whatsapp_number'); ?>" class="regular-text" />
        </td>
      </tr>
      
      <tr>
        <th scope="row">
          <label for="email">Email Address</label>
        </th>
        <td>
          <input style="width: 100%;" name="email" type="email" id="email" value="<?= get_option('email'); ?>" class="regular-text" />
        </td>
      </tr>
      
      <tr>
        <th scope="row">
          <label for="longitude">Address Longitude</label>
        </th>
        <td>
          <input style="width: 100%;" name="longitude" type="text" id="longitude" value="<?= get_option('longitude'); ?>" class="regular-text" />
        </td>
      </tr>
      
      <tr>
        <th scope="row">
          <label for="latitude">Address Latitude</label>
        </th>
        <td>
          <input style="width: 100%;" name="latitude" type="text" id="latitude" value="<?= get_option('latitude'); ?>" class="regular-text" />
        </td>
      </tr>
    </table>

    <?php submit_button(); ?>
  </form>
</div><!-- /.wrap -->
