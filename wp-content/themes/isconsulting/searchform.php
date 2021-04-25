<form action="<?= home_url("/") ?>" class="form-row w-100">
  <div class="form-group col-md">
    <label for="s" class="sr-only">Search in <?= home_url("/") ?></label>
    <input type="text" class="form-control" placeholder="Cari Berita..." id="s" name="s" value="<?= get_search_query() ?>"/>
  </div>
  <div class="form-group col-md-2">
    <select id="inputState" class="form-control">
      <option selected disabled>Urutkan</option>
      <option>Terbaru</option>
      <option>Terlama</option>
      <option>Paling banyak dikunjungi</option>
    </select>
  </div>
  <div class="form-group col-md-2">
    <input type="submit" id="searchsubmit" value="<?= esc_attr_x("Search", "submit button") ?>">
  </div>
</form>