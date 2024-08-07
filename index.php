<?php
$pageTitle = "Home";
$pageHeader = "Homepage";
$functions = "./assets/functions.php";
$pathToNavItems = "./assets/templates/navItems.php";

include $pathToNavItems;
include $functions;
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
    generateNavbar($pageTitle ,$navigation_items);
    ?>
    <h1><?=$pageHeader?></h1>
  </body>
</html>
