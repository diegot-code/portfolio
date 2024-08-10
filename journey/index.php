<?php
$pageTitle = "Journey";
$pageHeader = "Display experience through cards for each portion of education and/or work experience";

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
    generateNavbar($pageTitle, $navigation_items);
    ?>
    <h1><?=$pageHeader?></h1>
  </body>
</html>
