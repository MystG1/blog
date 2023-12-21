<?php

$title = "Inscription";

ob_start();

?>
<?php if (isset($_SESSION['connect']) && $_SESSION['connect'] === 1) {
    header('location: ?page=connected');
} ?>

<section class="starsBackground p-5 pb-md-8 flex-grow-1">
    <h1 class="h1 my-4 text-green mx-md-5 text-center titleLog">Inscription</h1>


    <div class="container">


        <form action="?page=inscription " method="post" class="border border-4 border-green text-center wform py-5 text-green  m-auto bg-dark">

            <label for="pseudo">Pseudo :</label><br>

            <?php
            if (isset($_GET['error']) && $_GET['error'] == '3') {
                echo "<h5 class='mainTitleArticle text-primary flex-grow-1'>Pseudo déjà utilisé</h1>";
            } ?>

            <input class="w-75 " type="text" id="pseudo" name="pseudo" maxlength="15" required><br><br>

            <label for="email">Email :</label><br>
            <?php

            if (isset($_GET['error']) && $_GET['error'] == '1') {
                echo "<h5 class='mainTitleArticle text-primary flex-grow-1'>Adresse email déjà utilisé</h1>";
            }
            if (isset($_GET['error']) && $_GET['error'] == '2') {
                echo "<h5 class='mainTitleArticle text-primary flex-grow-1'>Adresse email non valide</h1>";
            }
            ?>

            <input class='w-75' type='email' id='email' name='email' required><br><br>


            <label for="password">Mot de passe :</label><br>
            <input class="w-75 " type="password" id="password" name="password" required><br><br>


            <input type="submit" value="S'inscrire">
        </form>

    </div>
</section>
<?php
$content = ob_get_clean();

require('base.php');
?>