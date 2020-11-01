<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lazar Miseljic Photography</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,400i,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Abel&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <link rel="stylesheet" href="/style.css">
    
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <script>var clicky_site_ids = clicky_site_ids || []; clicky_site_ids.push(101224902);</script>
	<script async src="//static.getclicky.com/js"></script>


</head>
<body>
    <div id="container">
        <div id="sidebar">
            <div id="hamburger">
                <a href="#" class="toggle-nav-container">
                    <div class="bar1"></div>
                    <div class="bar2"></div>
                    <div class="bar3"></div>
                </a>
            </div>
            <nav id="mainnav">
                <div id="logo">
                    <a href="/">
                        <img src="/img/logo.png" alt="Lazar Miseljic Photography">
                    </a>
                </div>
                <h2>Singles</h2>
                <ul>
                    <?php

                        GetAlbums();
                        GetStories();

                        foreach($GLOBALS['arrAlbums'] as $arr){
                            if ($arr[0] == $albumName) {
                                echo '<li class="active"><a href="/' .  $arr[0] . '" >' .  $arr[1] . '</a></li>';
                            } else {
                                echo '<li><a href="/' .  $arr[0] . '">' .  $arr[1] . '</a></li>';
                            }
                            
                        } 
                    ?>
                </ul>
                
                <h2>Stories</h2>
                <ul>
                    <?php
                        foreach($GLOBALS['arrStories'] as $arr){
                            if ($arr[0] == $albumName) {
                                echo '<li class="active"><a href="/' . $arr[0] . '">' .  $arr[1] . '</a></li>';
                            } else {
                                echo '<li><a href="/' .  $arr[0] . '">' .  $arr[1] . '</a></li>';
                            }
                        } 
                    ?>
                </ul>

                <h2>Other</h2>
                <ul>
                    <?php
                        foreach($GLOBALS['arrRest'] as $arr){
                            if ($arr[0] == $albumName) {
                                echo '<li class="active"><a href="/' . $arr[0] . '">' .  $arr[1] . '</a></li>';
                            } else {
                                echo '<li><a href="/' .  $arr[0] . '">' .  $arr[1] . '</a></li>';
                            }
                        } 
                    ?>
                </ul>
            </nav>
        </div>