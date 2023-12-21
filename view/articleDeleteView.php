<?php
$title = "En lecture";

ob_start();
?>

<section class="p-5 starsBackground">
    <div class="w-100 h-auto p-3 border bg-darkpurple border-2 border-purple d-flex rounded">
        <?php

        echo "<h1 class='mainTitleArticle text-rlblue flex-grow-1'>Article supprimé ou non existant</h1>";
        ?>
    </div>
</section>

<?php
$content = ob_get_clean();
require('base.php');
?>