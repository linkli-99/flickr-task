<?php
include('html/header.html');
?>

<?php
$url = $_GET['url'];
?>

<div class="container">
  <div class="image_full" style="background-image: url(<?php echo $url; ?>)">
  </div>
</div>

<div class="search-container">
  <label for="text-name">Input text you want to add on the image: </label>
  <input type="text" id="text-field" name="text-name">
  <button id="text-generate">Generate</button> 
</div>

<?php
include('html/footer.html');
?>