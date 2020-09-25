<?php include('tpl/header.php'); ?>

<div id="mainarea">
    <?php

    $sorter = '&sort=sort_location';
    

    if (in_array($albumName, array_column($GLOBALS['arrAlbumsGeneral'],0))) {
        $sorter = '&sort=sort_album';
    }

    if ($albumName == 'highlights') {
        $sorter = '&sort=sort_highlights';
    }

    // echo "album: " . $albumName . " :: " . $sorter;
    // echo "photo: " . $imageNumber . "<br>";

        $query =  '/items/photos?filter[albums][contains]=' . $albumName . '&meta=result_count&fields=name,caption,photo.data.url,content_slide' . $sorter;
        $photos = json_decode(callAPI('GET', $query), true);

        //echo ":" . $query . ":";

        $totalPhotos = $photos['meta']['result_count'];
        $counter = 1;

        if (!empty($photos['data'])) { ?>
            <div id="photolist">
                    <?php
                        foreach ($photos['data'] as $photo) {
                            
                            if ($photo['content_slide'] != '') { // content slide
                                echo '<div class="content-slide">';
                                echo '<img src="' . $GLOBALS['photo_url'] . $photo['photo']['data']['url'] . '" alt="' . $photo['name'] . '" class="album-preview">';
                                echo '<div class="content-text">' . $photo['content_slide'] . '</div>';
                                echo '</div>';
                            } else { // an image
                                echo '<div class="photo">';
                                echo '<img data-flickity-lazyload-src="' . $GLOBALS['photo_url'] . $photo['photo']['data']['url'] . '" alt="' . $photo['name'] . '">';
                                echo '</div>';
                            }

                            $counter++;
                        }
                    ?>
                </div>
            <?php
        } else {
            Show404Error();
        }

    ?>
</div>

<input type="hidden" id="hidPhotoNumber" value="<?php echo $imageNumber; ?>">
<input type="hidden" id="hidAlbumName" value="<?php echo $albumName; ?>">

<?php include('tpl/footer.php'); ?>