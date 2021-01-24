<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

include('config.php');
include('functions.php');

$path = ltrim($_SERVER['REQUEST_URI'], '/');  
if (substr($path,-1) <> '/') { $path = $path . '/'; } 

$elements = explode('/', $path);

// figure out what to show based on URL
if (empty($elements[0])) {
    ShowAlbum($GLOBALS['default_album'],'001');
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