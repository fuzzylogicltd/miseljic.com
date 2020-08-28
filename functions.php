<?php

$GLOBALS['base_url'] = 'https://api.miseljic.com/api';
$GLOBALS['photo_url'] = 'https://api.miseljic.com';

$GLOBALS['arrAlbumsGeneral'] = array(
    array("street", "Street"),
    array("people", "People"),
    array("nature", "Nature"),
    array("abstract", "Abstract")
);

$GLOBALS['arrAlbumsLocation'] = array(
    array("new-york", "New York"),
    array("coney-island", "Coney Island"),
    array("western-usa", "Western USA"),
    array("thailand", "Thailand"),
    array("cambodia", "Cambodia"),
    array("nepal", "Nepal"),
    array("belgrade", "Belgrade"),
    array("serbia", "Serbia"),
    array("dolomites", "Dolomites"),
    array("indonesia", "Indonesia"),
    array("sri-lanka", "Sri Lanka"),
    array("morocco", "Morocco"),
    array("istanbul", "Istanbul"),
    array("singapore", "Singapore"),
    array("ex-yu", "Ex Yu"),
    array("misc-eu", "Misc EU")
);

$GLOBALS['arrRest'] = array(
    array("pages/about-me", "About me")
);

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

    // Optional Authentication:
    curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
    curl_setopt($curl, CURLOPT_HTTPHEADER, array('Authorization: Bearer FKTIO3TG62FKRTO567FKWX2'));

    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

    $result = curl_exec($curl);

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

