<?php

$title = "Vous êtes connectés !";

?>

<section class="starsBackground p-5 pb-md-8 flex-grow-1">
    <h1 class="h1 my-4 text-green mx-md-5 text-center titleLog">Vous êtes connectés</h1>


</section>
<?php
$content = ob_get_clean();

require('base.php');
?>