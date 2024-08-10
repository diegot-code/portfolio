<?php
$pageTitle = "Projects";
$pageHeader = "Display all Projects as Cards and links to them using github API";

$paths = [
  "functions" => "../assets/functions.php",
  "navItems" => "../assets/templates/navItems.php",
  "headTemplate" => "../assets/templates/head.php"
];

include $paths['navItems'];
include $paths['functions'];
?>
<!DOCTYPE html>
<html lang="en">
  <?php
  require_once $paths['headTemplate'];
  ?>
  <body>
    <?php
    generateNavbar($pageTitle ,$navigation_items);
    ?>
    <h1><?=$pageHeader?></h1>
  </body>
</html>
