<?php
$is_admin = isset($_SESSION['admin']) && $_SESSION['admin'] == 1;
$commentManager = new CommentCreationManager();
$userManager = new UserListManager();


ob_start();
?>
<div class="bg-darkpurple">
    <section class="py-3 px-6 starsBackground">
        <?php if ($is_admin) { ?>
            <div class="dropdown py-1">
                <button class="border border-purple text-blue bg-darkpurple btn btn-secondary dropdown-toggle nav-link px-4 my-auto" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                    Action
                </button>
                <ul class="dropdown-menu text-center bg-darkpurple bg-opacity-75 border border-2 rounded border-purple " aria-labelledby="dropdownMenuButton">

                    <li class="my-2"><a href='index.php?page=modifier&article=<?= $articleDetails['id'] ?>'>Modifier</a></li>
                    <li><a onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet article ?')" href='?page=delete_article&numArticle=<?= $articleDetails['id'] ?>'>Supprimer</a></li>

                </ul>
            </div>
        <?php } ?>
        <div class="w-100 h-auto p-3 border bg-darkpurple border-2 border-purple d-flex rounded">
            <?php if ($articleDetails) { ?>
                <div class='d-flex flex-column text-center'>

                </div>

                <div class='border-bottom border-2 border-white my-auto text-center w-100'>
                    <h1 class='mainTitleArticle text-blue flex-grow-1 border-bottom border-top py-3 '><?= $articleDetails['title'] ?></h1><br>
                    <p class='h5 text-blue border-bottom border-top  border-blue py-3'><?= $articleDetails['subtitle'] ?></p><br>
                    <p class='text-white text-opacity-75  articleSpacing  '><?= $articleDetails['content'] ?></p>
                </div>
            <?php } else { ?>
                <h1 class='mainTitleArticle text-rlblue flex-grow-1'>Article supprimé ou non existant</h1>
            <?php } ?>
        </div>
        <!-- LES COMMENTAIRES ----------------------------------------------------------------------------------->
    </section>
    <div class="col-lg-12 p-3 border border-2 border border-3  border-rlblue rounded bg-rlbg">
        <div class="border-bottom border-2 border-white my-3 d-flex align-items-center">
            <h1 class="mainTitleArticle text-rlblue flex-grow-1">les commentaires</h1>
        </div>
        <!-- CREATION DU COMMENTAIRE -->
        <?php if (isset($_SESSION['connect']) && $_SESSION['connect'] === 1) {
           
            ?>
            <form action="?page=commentSuccess&article=<?= $articleDetails['id'] ?>" method="post" class="listArticle text-start rounded-3 rounded-start-5 rounded-top-5 border border-2 my-3 row align-items-center">

                <div class="d-flex flex-column align-items-center col-md-1">
                    <img class="img-fluid w-50 rounded-circle m-auto border-primary" src="../public/assets/avatar<?php echo $_SESSION['avatar']; ?>.png" alt="arcade">
                    <h1 class="titleArticle p-0"><?php echo $_SESSION['pseudo']; ?></h1>
                </div>

                <div class="col-md-11 d-flex flex-column flex-md-row align-items-center">
                    <textarea style="resize: none" class="descriptionArticle w-100 bg-rlbg rounded mb-2 mb-md-0 me-md-3" maxlength="480" type="text" id="content" name="content" rows="4" placeholder="Ecrire un commentaire ..."></textarea>
                    <input class="mx-auto h-50 p-3" type="submit" value="Envoyer le commentaire">
                </div>
            </form>
        <?php } ?>



        <?php
         ini_set('display_errors', '0');
         $article_id = $articleDetails['id'];
         $comments = $commentManager->getCommentsByArticleId($article_id);
         ini_set('display_errors', '1');
         
        if ($comments && count($comments) > 0) {
            
            foreach ($comments as $comment) {

                $userDetails = $userManager->getUserById($comment['user_id']);

                if ($userDetails) {
        ?><div id="comments" class="listArticle text-start rounded-3 rounded-start-5 rounded-top-5 border border-2 my-3 row align-items-center">

                        <div class="border border-2 rounded-5 d-flex flex-column align-items-center text-center col-md-1">
                            <img class="img-fluid w-50 rounded-circle m-auto border-primary" src="../public/assets/avatar<?php echo $userDetails['avatar']; ?>.png" alt="User Avatar">
                            <p class="descriptionArticle p-0 m-auto"><b><?php echo $userDetails['pseudo']; ?></b></p>
                            <p class="descriptionArticle p-0 m-auto"><?php echo $comment['creation_date']; ?></p>
                        </div>

                        <div class="col-md-11">
                            <div class="d-flex flex-column flex-md-row justify-content-between align-items-center">
                                <p class="descriptionArticle flex-grow-1 mb-3 mb-md-0"><?php echo $comment['content']; ?></p>

                                <?php if (isset($_SESSION['id']) && $_SESSION['id'] == $comment['user_id'] ) { ?>
                                    <a href="index.php?page=delete_comment&comment_id=<?php echo $comment['id']; ?>" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce commentaire ?');">
                                        <button class="btn btn-outline-rlblue border border-3 py-2">Supprimer le commentaire</button>
                                    </a>
                                <?php } ?>
                            </div>
                        </div>

                    </div>

            <?php
                }
            }
        } else {
            ?>
            <p class="h1">Aucun commentaire pour cet article.</p>
        <?php
        }
        ?>
    </div>


    <?php
    $content = ob_get_clean();
    require('base.php');
    ?>