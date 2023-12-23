<?php
$is_admin = isset($_SESSION['admin']) && $_SESSION['admin'] == 1;
$title = "Mes articles";

ob_start();

?>

<section class="p-5 starsBackground">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-9 p-3 border border-2 border border-3  border-rlblue rounded text-center bg-rlbg">
                <div class="border-bottom border-2 border-white my-3 d-flex align-items-center">
                    <h1 class="mainTitleArticle text-rlblue flex-grow-1">les articles</h1>
                    <?php if ($is_admin) { ?>
                        <button id="actionButton" class="p-2 bg-rlbg border border-rlwhite border-2 rounded"><a class="text-decoration-none text-rlblue"href="?page=cr%C3%A9er_un_article">créer un article</a></button>
                    <?php } ?>
                </div>

                <?php
                
                while ($article = $requeteA->fetch()) {
                ?>
                    <a class="text-decoration-none" href="?page=article&article=<?= $article['id'] ?>">
                        <div class="listArticle text-start rounded-3 my-3 p-3">
                            <h1 class="titleArticle mb-3"><?= $article['title'] ?></h1>
                            <div class="d-flex flex-column flex-sm-row justify-content-between align-items-start align-items-sm-center">
                                <p class="descriptionArticle mb-0"><?= $article['subtitle'] ?></p>
                                <p class="descriptionArticle mt-3 mt-sm-0 text-nowrap"><b>| <?= $article['creation_date'] ?></b></p>
                            </div>
                        </div>
                    </a>

                <?php
                }
                ?>
            </div>

            <div class="col-lg-2 mx-lg-3 rounded p-2 border border-3  border-rlblue roundedtext-center bg-rlbg">
                <h1 class="mainTitleArticle text-rlblue border-bottom border-2 border-white my-3">les utilisateurs</h1>
                <?php
                while ($utilisateur = $requete->fetch()) {
                ?>
                    <div class="listArticle text-start align rounded-3 my-3">
                        <div class="d-flex justify-content-between align-items-center ">
                            <h1 class="titleArticle m-0"><?= $utilisateur['pseudo'] ?></h1>
                            <img class="img-fluid w-17 rounded-circle my-3 mx-2 border-primary" src="../public/assets/avatar<?php echo $utilisateur['avatar']; ?>.png" alt="arcade">
                        </div>
                        <p class="descriptionArticle">Inscrit le : <?= $utilisateur['creation_date'] ?></p>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>
    </div>
</section>
<?php
$content = ob_get_clean();

require('base.php');
?>