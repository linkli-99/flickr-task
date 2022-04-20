<?php
/**
 * This page is used to display the image user selected and let user generate the meme on the image.
 */
include('html/header.html');
?>

<?php
/**
 * Obtain URL of the image from the GET request initiated from flickr-display.
 */
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
  <div class="positions">
    <input type="radio" id="t" name="position" value="top">
    <label for="t">Top</label><br>
    <input type="radio" id="c" name="position" value="center">
    <label for="c">Center</label><br>
    <input type="radio" id="b" name="position" value="bottom">
    <label for="b">Bottom</label>
  <div> 
</div>

<?php
include('html/footer.html');
?>