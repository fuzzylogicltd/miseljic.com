<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

include('functions.php');

$path = ltrim($_SERVER['REQUEST_URI'], '/');  
if (substr($path,-1) <> '/') { $path = $path . '/'; } 

$elements = explode('/', $path);

if (empty($elements[0])) {
    ShowAlbum('street','001');
} else { 
    $album = $elements[0];
    $photo = $elements[1];

    if ($photo == '') { $photo = '001'; }

    if ($album == 'pages') {
        ShowPage($photo);
    } else {
        ShowAlbum($album,$photo);
    }

}

?>