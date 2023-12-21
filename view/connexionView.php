<?php

session_destroy();
$title = "Connexion";

ob_start();

?>

<section class="starsBackground p-5 pb-md-8 flex-grow-1">
    <h1 class="h1 my-4 text-green mx-md-5 text-center titleLog">Connexion</h1>
    <div class="container">
        <form action="?page=connexion " method="post" class="border border-4 border-green text-center wform py-5 text-green  m-auto bg-dark">
            <?php
            if (isset($_GET['error']) && $_GET['error'] == '2') {
                echo "<h5 class='mainTitleArticle text-primary flex-grow-1'>pseudo ou mot de passe incorrect</h1>";
            } ?>

            <label for="pseudo">Pseudo :</label><br>
            <input class="w-75 " type="text" id="pseudo" name="pseudo" maxlength="15" required><br><br>

            <label for="motdepasse">Mot de passe :</label><br>
            <input class="w-75 " type="password" id="password" name="password" required><br><br>

            <input type="submit" value="Se connecter">
        </form>

    </div>
</section>

<?php
$content = ob_get_clean();

require('base.php');
?>