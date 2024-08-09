<?php

function generateNavbar($page, $items) {
    ?>
    <header>
        <nav>        
            <ul>
    
    <?php
    foreach ($items as $item) {
        // Specifically for the Home page since the Home page is inside the root
        if ($page == "Home") {
        ?>
        <a class="<?= $item["a-s"] ?>" href="<?= "." . $item["path"] ?>">
            <li> <?= $item["name"] ?> </li>
        </a>
        <?php
        }
        // For the rest 
        else {
            ?>
        <a class="<?= $item["a-s"] ?>" href="<?= ".." . $item["path"] ?>">
            <li> <?= $item["name"] ?> </li>
        </a>
        <?php

        }
    }
    ?>
            </ul>
        </nav>
    </header>

    <?php
}
