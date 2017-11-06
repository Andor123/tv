<div class="form">
    <nav>
        <?php
        foreach ($menu as $key => $value) {
            echo '<a href="index.php?pg=' . $key . '">|' . $value . '|</a>';
        }
        ?>
    </nav>
</div>
