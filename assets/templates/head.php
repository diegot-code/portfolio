<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?=$pageTitle?></title>
    <link rel="stylesheet" href="./assets/home.css" />
    <link rel="stylesheet" href="<?php
    if ($pageTitle == 'Home') {
        echo "./assets/home.css";
    }
    else {
        echo "../assets/home.css";
    }
    ?>">
</head>