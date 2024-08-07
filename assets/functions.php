<?php

function generateNavbar($page, $items) {
    ?>
    <header>
        <nav>        
            <ul>
    
    <?php
    foreach ($items as $item) {
        if ($page == "Home") {
        ?>
        <li>
            <a class="<?= $item["a-s"] ?>" href="<?= "." . $item["path"] ?>"> <?= $item["name"] ?> </a>
        </li>
        <?php
        }
        else {
            ?>
        <li>
            <a class="<?= $item["a-s"] ?>" href="<?= ".." . $item["path"] ?>"> <?= $item["name"] ?> </a>
        </li>
        <?php

        }
    }
    ?>
            </ul>
        </nav>
    </header>

    <?php
}
