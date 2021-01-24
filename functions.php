<?php

include('config.php');

$GLOBALS['arrAlbums'] = array();
$GLOBALS['arrStories'] = array();

$GLOBALS['arrRest'] = array(
    array("pages/about-me", "About me")
);

function GetAlbums() {
    $query =  '/items/albums?sort=sort';
    $albums = json_decode(callAPI('GET', $query), true);

    if (!empty($albums['data'])) { 
        foreach ($albums['data'] as $album) {

            $newAlbum = array($album['slug'], $album['name']);
            array_push($GLOBALS['arrAlbums'], $newAlbum);
            
        }
    }
}

function GetStories() {
    $query =  '/items/stories?sort=sort&status=published';
    $stories = json_decode(callAPI('GET', $query), true);

    if (!empty($stories['data'])) { 
        foreach ($stories['data'] as $story) {

            $newAlbum = array($story['slug'], $story['name']);
            array_push($GLOBALS['arrStories'], $newAlbum);
            
        }
    }
}

function CallAPI($method, $query, $data = false)
{

    $url = $GLOBALS['base_url'] . $query;
    $curl = curl_init();

    switch ($method) {
        case "POST":
            curl_setopt($curl, CURLOPT_POST, 1);

            if ($data)
                curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
            break;
        case "PUT":
            curl_setopt($curl, CURLOPT_PUT, 1);
            break;
        default:
            if ($data)
                $url = sprintf("%s?%s", $url, http_build_query($data));
    }

    curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
    curl_setopt($curl, CURLOPT_HTTPHEADER, array('Authorization: Bearer ' . $GLOBALS['auth_token']));

    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

    try {
        $result = curl_exec($curl);
    } catch (Exception $e) {
        $result = "Error contacting API: " . $e;
    }
    
    curl_close($curl);

    return $result;
}

function ShowAlbum($albumName, $imageNumber) {
    include('tpl/pg-album.php');
}

function ShowPage($pageName) {
    $albumName = 'pages/' . $pageName;
    include('tpl/pg-content.php');
}

function Show404Error() {
    echo '<div class="message">404</div>';
    exit();
}

?>

