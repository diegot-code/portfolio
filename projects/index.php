<?php
$pageTitle = "Projects";
$pageHeader = "Display all Projects as Cards and links to them using github API";

$paths = [
  "functions" => "../assets/functions.php",
  "navItems" => "../assets/templates/navItems.php",
  "headTemplate" => "../assets/templates/head.php",
  "CSS" => [
    "../assets/main.css",
    "../assets/navbar.css",
    "../assets/cards.css"
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
    <div class="container f-xy-center">    
      <div class="marquee">
        <div class="project-card">
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat excepturi placeat totam est vel impedit quisquam in libero ab eius?</p>
        </div>
        <div class="project-card">
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat excepturi placeat totam est vel impedit quisquam in libero ab eius?</p>
        </div>
        <div class="project-card">
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat excepturi placeat totam est vel impedit quisquam in libero ab eius?</p>
        </div>
        <div class="project-card">
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat excepturi placeat totam est vel impedit quisquam in libero ab eius?</p>
        </div>
        <div class="project-card">
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat excepturi placeat totam est vel impedit quisquam in libero ab eius?</p>
        </div>
        <div class="project-card">
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat excepturi placeat totam est vel impedit quisquam in libero ab eius?</p>
        </div>
        <div class="project-card">
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat excepturi placeat totam est vel impedit quisquam in libero ab eius?</p>
        </div>
        <div class="project-card">
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat excepturi placeat totam est vel impedit quisquam in libero ab eius?</p>
        </div>
        <div class="project-card">
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat excepturi placeat totam est vel impedit quisquam in libero ab eius?</p>
        </div>
        <div class="project-card">
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat excepturi placeat totam est vel impedit quisquam in libero ab eius?</p>
        </div>
    </div>
  </div>
  <footer class="f-xy-center">
    <p>&copy; Diego Torres 2024</p>
  </footer>
  </body>
</html>
