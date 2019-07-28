<?php include('tpl/header.php'); ?>

<div id="mainarea">
    <?php

        $query =  '/items/pages?fields=photo.data.full_url,text,headline&filter[url_slug]=' . $pageName;
        $results = json_decode(callAPI('GET', $query), true);

        if (!empty($results['data'])) { ?>

        <?php foreach ($results['data'] as $result) { ?>

            <div id="content-page">
                <h1><?php echo $result['headline']; ?></h1>

                <div class="text">
                    <?php echo $result['text']; ?>
                </div>

                <div class="photo">
                <?php echo '<img src="' . $result['photo']['data']['thumbnails'][1]['url'] . '" >'; ?>
                </div>

            </div>

        <?php
                    }
        } else {
            Show404Error();
        }

    ?>
</div>

<?php include('tpl/footer.php'); ?>