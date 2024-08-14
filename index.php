<?php
$pageTitle = "Home";
$pageHeader = "Homepage";

$paths = [
  "functions" => "./assets/functions.php",
  "navItems" => "./assets/templates/navItems.php",
  "headTemplate" => "./assets/templates/head.php",
  "CSS" => [
    "./assets/main.css",
    "./assets/navbar.css",
    "./assets/banner.css"
  ]
];

include $paths['navItems'];
include $paths['functions'];
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <?php
  require_once $paths['headTemplate'];
  foreach ($paths['CSS'] as $stylesheet) {
    ?>
    <link rel="stylesheet" href="<?= $stylesheet ?>">
    <?php
  }
  ?>
  </head>  
  <body>
    <?php
    generateNavbar($pageTitle ,$navigation_items);
    ?>
    <h1><?=$pageHeader?></h1>
    <div id="banner">
      <div class="banner-interior">
        <h1>Howdy! Step into my world of code.</h1>
        <h2>Welcome to my portfolio, where backend development comes to life with PHP and Python. From my custom Python terminal to other projects, I'm excited to share what I’ve built and learned. Whether you’re a recruiter or a fellow developer, I hope you find something that inspires you.</h2>
      </div>      
    </div>
    
  </body>
</html>
