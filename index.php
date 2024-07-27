<?php
$pageTitle = "Home";
$pageHeader = "Homepage";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?=$pageTitle?></title>
    <link rel="stylesheet" href="assets/home.css" />
  </head>
  <body>
    <?php
    require_once "./assets/templates/header.html";
    ?>
    <h1><?=$pageHeader?></h1>
  </body>
</html>
