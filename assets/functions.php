<?php

function generateNavbar($page, $items) {
    echo '<ul>';
    foreach ($items as $item) {
        if ($page == "Home") {
        ?>
        <li>
            <a href="<?= "." . $item["path"] ?>"> <?= $item["name"] ?> </a>
        </li>
        <?php
        }
        else {
            ?>
        <li>
            <a href="<?= ".." . $item["path"] ?>"> <?= $item["name"] ?> </a>
        </li>
        <?php

        }
    }
    echo '</ul>';
}
