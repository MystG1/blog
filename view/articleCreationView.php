<?php
$is_admin = isset($_SESSION['admin']) && $_SESSION['admin'] == 1;
$title = "Créer un article";

ob_start();

?>
<?php if ($is_admin) { ?>


    <section class="p-5 starsBackground">
        <div class="w-75 h-auto border bg-rlbg border-2 border-blue mx-auto rounded  ">
            <div class="container">
                <form action="index.php?page=créer_un_article " method="post" class="d-flex flex-column text-center ">

                    <label for="title" class="titleArticle ">Nom de l'article :</label>
                    <input class=" p-2 bg-rlblue rounded-2 mainTitleArticle text-rlbg h1" type="text" id="title" name="title" maxlength="120" required><br><br>

                    <label for="subtitle " class="titleArticle">Description :</label>
                    <input class=" titleArticle bg-rlblue text-blue rounded-2 p-1 h5" type="text" id="subtitle" name="subtitle" required><br><br>

                    <label for="content" class="titleArticle ">Contenu de l'article :</label><br>
                    <textarea class="bg-rlblue rounded-2 titleArticle text-white text-opacity-75 h5" type="text" id="content" name="content" rows="15" required></textarea>


                    <input type="submit" value="Envoyer l'article" class="m-2 w-75 p-4 mx-auto ">
                </form>

            </div>

        </div>
    </section>
<?php } else {
    header('?page=articles');
} ?>

<?php
$content = ob_get_clean();

require('base.php');
?>