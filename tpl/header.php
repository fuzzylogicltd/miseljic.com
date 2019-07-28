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
                    <img src="/img/logo.png" alt="Lazar Miseljic Photography">
                </div>
                <h2>The Photos</h2>
                <ul>
                    <?php

                        foreach($GLOBALS['arrAlbumsGeneral'] as $arr){
                            if ($arr[0] == $albumName) {
                                echo '<li class="active"><a href="/' .  $arr[0] . '" >' .  $arr[1] . '</a></li>';
                            } else {
                                echo '<li><a href="/' .  $arr[0] . '">' .  $arr[1] . '</a></li>';
                            }
                            
                        } 
                    ?>
                </ul>

                <ul>
                    <?php
                        foreach($GLOBALS['arrAlbumsLocation'] as $arr){
                            if ($arr[0] == $albumName) {
                                echo '<li class="active"><a href="/' . $arr[0] . '">' .  $arr[1] . '</a></li>';
                            } else {
                                echo '<li><a href="/' .  $arr[0] . '">' .  $arr[1] . '</a></li>';
                            }
                        } 
                    ?>
                </ul>

                <h2>The Rest</h2>
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