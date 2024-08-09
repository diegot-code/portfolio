<?php
$pageTitle = "Connect";
$pageHeader = "Make a contact form";
$paths = [
  "functions" => "../assets/functions.php",
  "navItems" => "../assets/templates/navItems.php"
];

include $paths['navItems'];
include $paths['functions'];
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?=$pageTitle?></title>
  </head>
  <body>
    <?php
    generateNavbar($pageTitle, $navigation_items);
    
    ?>
    <h1><?=$pageHeader?></h1>
  </body>
</html>
