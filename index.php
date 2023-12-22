
<?php
session_start();
require('Controller/controller.php');

try {
    if (isset($_GET['page'])) {

        if ($_GET['page'] == 'accueil') {
            home();
            // LIER A L'UTILISATEUR -------------------------------------------------------------------------------------------------------------
        } else if ($_GET['page'] == 'inscription') {
            if (!empty($_POST['pseudo']) && !empty($_POST['email']) && !empty($_POST['password'])) {
                userInscription(htmlspecialchars($_POST['pseudo']), htmlspecialchars($_POST['email']), htmlspecialchars($_POST['password']));
            } else {
                inscription();
            }
        } else if ($_GET['page'] == 'registered') {
            registered();
        } else if ($_GET['page'] == 'connected') {
            connected();
        } else if ($_GET['page'] == 'profil') {
            if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['avatar'])) {
                $avatar = htmlspecialchars($_POST['avatar']);
                $pseudo = $_SESSION['pseudo'];

                $avatarModification = new AvatarModificationManager();
                $result = $avatarModification->updateAvatar($pseudo, $avatar);

                if ($result === false) {
                    throw new Exception("Impossible de modifier l'avatar pour le moment.");
                } else {
                    $_SESSION['avatar'] = $avatar;
                    header('Location: index.php?page=profil');
                    exit();
                }
            } else {
                profil();
            }
        } else if ($_GET['page'] == 'connexion') {
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                if (!empty($_POST['pseudo']) && !empty($_POST['password'])) {
                    userConnexion(htmlspecialchars($_POST['pseudo']), htmlspecialchars($_POST['password']));
                } else {

                    header('?error=1&message=Veuillez remplir tous les champs.');
                    exit();
                }
            } else {

                connexion();
            }

            // LES ARTICLES ----------------------------------------------------------------------------------------------------------
        } else if ($_GET['page'] == 'articles') {

            articlesMenu();
        } else if ($_GET['page'] == 'créer_un_article') {

            if (!empty($_POST['title']) && !empty($_POST['subtitle']) && !empty($_POST['content'])) {
                articleCreation(htmlspecialchars($_POST['title']), htmlspecialchars($_POST['subtitle']), htmlspecialchars($_POST['content']));
            } else {
                creationPage();
            }
        } // ...
        else if ($_GET['page'] == 'delete_article') {
            if (isset($_GET['numArticle'])) {
                $article_id = $_GET['numArticle'];
                $articleManager = new ArticleListManager();

                try {
                    $articleManager->deleteArticle($article_id);

                    header('Location: ?page=articles');
                    exit();
                } catch (Exception $e) {
                    $error = $e->getMessage();
                    require('view/errorView.php');
                }
            } else {
                header('Location: ?page=errorView');
                exit();
            }
        } else if ($_GET['page'] == 'modifier') {
            if (!empty($_POST['title']) && !empty($_POST['subtitle']) && !empty($_POST['content'])) {
                $articleModification = new ArticleModificationManager();
                $result = $articleModification->modifyArticle($_GET['article'], htmlspecialchars($_POST['title']), htmlspecialchars($_POST['subtitle']), htmlspecialchars($_POST['content']));

                if ($result === false) {
                    throw new Exception("Impossible de modifier l'article pour le moment.");
                } else {
                    header('Location: ?page=articles');
                    exit();
                }
            } else {
                $articleDetails = articleContenu();
                require('view/articleModificationView.php');
            }
        } else if ($_GET['page'] == 'article') {
            $articleDetails = articleContenu();
            require('view/articleView.php');
        } else if ($_GET['page'] == 'commentSuccess') {

            if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST['content'])) {
                $content = htmlspecialchars($_POST['content']);
                $user_id = $_SESSION['id'];

                $commentCreation = new CommentCreationManager();
                $result = $commentCreation->commentContent($content, $user_id);

                if ($result === false) {
                    throw new Exception("Impossible de modifier l'avatar pour le moment.");
                } else {
                    if (isset($_SESSION['last_article_id'])) {
                        $last_article_id = $_SESSION['last_article_id'];
                        header('Location: index.php?page=article&article=' . $last_article_id . '#comments');
                        exit();
                    } else {
                        commentSuccess();
                        exit();
                    }
                }
            }
        } else if ($_GET['page'] == 'delete_comment') {
            if (isset($_GET['comment_id'])) {
                if (isset($_SESSION['id'])) {
                    $comment_id = htmlspecialchars($_GET['comment_id']);
                    $user_id = $_SESSION['id'];

                    $commentDeletion = new CommentCreationManager();
                    $result = $commentDeletion->deleteComment($comment_id, $user_id);

                    if ($result === false) {
                        header('Location: ?page=errorView');
                        exit();
                    } else {
                        if (isset($_SESSION['last_article_id'])) {
                            $last_article_id = $_SESSION['last_article_id'];
                            header('Location: index.php?page=article&article=' . $last_article_id . '#comments');
                            exit();
                        } else {
                            header('Location: ?page=errorView');
                            exit();
                        }
                    }
                } else {
                    header('Location: ?page=connexion');
                    exit();
                }
            } else {
                header('Location: ?page=errorView');
                exit();
            }
        } else {
            throw new Exception("Cette page n'existe pas");
        }
        // ELSE -------------------------------------------------------------
    } else {
        home();
    }
    // ERREURS---------------------------------------------------------------
} catch (Exception $e) {
    $error = $e->getMessage();
    require('view/errorView.php');
}
