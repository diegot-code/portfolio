<?php
$pageTitle = "Connect";
$pageHeader = "Make a contact form";
$paths = [
  "functions" => "../assets/functions.php",
  "navItems" => "../assets/templates/navItems.php",
  "headTemplate" => "../assets/templates/head.php",
  "CSS" => [
    "../assets/main.css",
    "../assets/navbar.css"
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
    generateNavbar($pageTitle, $navigation_items);    
    ?>
    <div class="form">
    <form id="connectForm" action="process.php" method="GET">
        <div class="input">
          <label for="firstname">Firstname</label><input id="firstname" type="text" name="firstname">
        </div>
        <div class="input">
          <label for="lastname">Lastname</label><input id="lastname" type="text" name="lastname">
        <div class="input">
          <label for="email">Email</label><input id="email" type="email" name="email">
        </div>
        <button type="submit" name="contactBtn">Submit</button>
      </form>
    </div>
  </body>
</html>
