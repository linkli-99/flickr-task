<?php
/**
 * Interface to receive the search query, initate the request,
 * and render the result from Flickr
 */
require 'config.php';
require 'flickr-api.php';

function get_image($tag){
    $flickr = new FlickrApi(FLICKR_API_KEY);
    
    $params = array(
        'method'	=> 'flickr.photos.search',
        'tags' => $tag,
        'license' => '4,5,6,7',
        'content_type' => 1, //photos only
        'extras' => 'url_l,url_sq',
        'media' => 'photos',
        'safe_search' => '1',
        'per_page' => 50,
        'sort' => 'relevance',

    );

    $photos = $flickr->api($params); 
    $filtered_results = array();

    foreach($photos['photos']['photo'] as $pic){
        if(!isset($pic['url_l']) || $pic['is_public'] == '0'){
            continue;
        }
        $filtered_results[] = $pic['url_l'];
    }

    return $filtered_results;
}

?>

<?php
include('html/header.html');
?>
    <?php
        if ($_GET['tag'] && isset($_GET['tag'])){
            $images = get_image($_GET['tag']);
        }
        else{
            echo '<h1>No Results have been found, please search again</h1>';
        }
    ?>

    <?php if($images): ?>
        <div class="image_gallery">
            <?php foreach($images as $image): ?>
                <form class="image", action ="/image.php", method="get">
                    <input type="hidden" name="url" value="<?php echo $image;?>">
                    <div class="image_thumbnail", style="background-image: url(<?php echo $image; ?>)"></div>
                    <button class="image_submit", type="submit">Select</button>
                </form>
            <?php endforeach ?>
            </div>
        <?php else: ?>
            <h1>No Results have been found, please search again</h1>
    <?php endif ?>
<?php
include('html/footer.html');
?>