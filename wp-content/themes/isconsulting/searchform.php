<?php
global $wp;
$news_url      = pll_current_language() === 'en' ? "news-en" : "berita";
$options       = array(
  0 => (object)array(
    "label" => "Terbaru",
    "value" => "ASC",
  ),
  1 => (object)array(
    "label" => "Terlama",
    "value" => "DESC",
  ),
);
@$order = $wp->query_vars["order"];
?>

<form action="<?= site_url("/") ?>" class="form-row w-100 mb-2 mb-md-4">
  <div class="form-group col-12 col-md">
    <label for="s" class="sr-only">Search in <?= home_url("/") ?></label>
    <input type="text" 
      class="form-control" 
      placeholder="<?= pll_current_language() === 'en' ? "Search news..." : "Cari Berita..." ?>" 
      id="s" 
      name="s" 
      value="<?= get_search_query() ?>"/>
  </div>
  <div class="form-group col-8 col-md-3 col-lg-2">
    <select name="order" id="inputState" class="form-control">
      <option <?php if($order == null): ?>selected<?php endif; ?>disabled>Urutkan</option>
      <?php foreach($options as $option): ?>
        <option value="<?= $option->value ?>" <?php if($order == $option->value): ?>selected<?php endif; ?>>
          <?= $option->label ?>
        </option>
      <?php endforeach; ?>
    </select>
  </div>
  <div class="form-group col-4 col-md-1">
    <button type="submit" id="searchsubmit" class="btn w-100">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
      <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
    </svg>
    </button>
</div>
</form>