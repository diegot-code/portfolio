<?php
function generateNavbar($page, $items) {
?>
<header>
    <nav>
        <ul>
            <?php foreach ($items as $item) { 
                // Determine the correct path prefix based on the current page
                $prefix = ($page == "Home") ? "." : "..";
            ?>
            <a class="<?= $item['a-s'] ?>" href="<?= $prefix . $item['path'] ?>">
                <li><?= $item['name'] ?></li>
            </a>
            <?php } ?>
        </ul>
    </nav>
</header>
<?php
}
?>

