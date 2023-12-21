<?php

$title = "Accueil";

ob_start();

?>

<section class="starsBackground p-5 pb-md-8">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <img src="../public/assets/gaming1.png" alt="imageGeek" class="rounded img-fluid border border-4 border-primary">
            </div>
        </div>
    </div>
</section>
<?php
$content = ob_get_clean();

require('base.php');
?>