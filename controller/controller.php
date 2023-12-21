
<?php
// LES MODELES-----------------------------------------------------------------------------------------------------------------
require_once('model/connexionManager.php');
require_once('model/inscriptionManager.php');
require_once('model/userListManager.php');
require_once('model/articleCreationManager.php');
require_once('model/articleListManager.php');
require_once('model/articleModificationManager.php');
require_once('model/avatarModificationManager.php');
require_once('model/commentCreationManager.php');



// LES VIEWS -------------------------------------------------------------------------------------------------------------------
function home(){

    require('view/accueilView.php');
}

function inscription(){

    require('view/inscriptionView.php');
}

function connexion(){

    require('view/connexionView.php');
}
function registered(){
    require('view/registeredView.php');
}
function connected(){
    require('view/connectedView.php');
}
function commentSuccess(){
    require('view/commentSuccessView.php');
}
function creationPage(){
    require('view/articleCreationView.php');
}

function article(){
    require('view/articleView.php');
}

function profil(){
    require('view/profilView.php');
}
// FONCTIONS CONNEXION ET INSCRIPTION -------------------------------------------------------------------------------------------
function userConnexion($pseudo, $password) {
    $userConnexion = new UserConnexionManager();
    $userConnexion->userConnexion($pseudo, $password);
}


function userInscription($pseudo, $email, $password) {
    $userInscription = new UserInscriptionManager();
    $verification = $userInscription->verification($email, $pseudo);
    $result = $userInscription->userRegister($pseudo, $email, $password);
    

    if($result === false) {
        throw new Exception("Impossible de vous inscrire pour le moment.");
    }
    else {
        header('location: index.php?page=registered');
		exit();
    }
}
// FONCTIONS ARTICLES ------------------------------------------------------------------------------------
function articlesMenu(){

    $userManager        = new UserListManager();
    $requete            = $userManager->getUsers();

    $articleManager     = new ArticleListManager();
    $requeteA           = $articleManager->getArticles();

    require('view/allArticleMenuView.php');
}

function articleCreation($title, $subtitle, $content){
    $articleCreation = new ArticleCreationManager();

    $result = $articleCreation->articleContent($title, $subtitle, $content);

    if($result === false) {
        throw new Exception("Impossible de crée l'article pour le moment.");
    }
    else {
        header('location: ?page=articles');
		exit();
    }

}

function articleContenu() {
    if(isset($_GET['article']) && !empty($_GET['article'])) {
        $articleId = htmlspecialchars($_GET['article']);
        
        $articleManager = new ArticleListManager();
        $articleDetails = $articleManager->getArticleById($articleId); 
        
        if($articleDetails) {
            $_SESSION['last_article_id'] = $articleDetails['id']; // Définition de $_SESSION['last_article_id']
            return $articleDetails; 
        } 
        // ERREURS -------------------------------------------------------------------------------
    } else {
        throw new Exception("Aucun article spécifié pour afficher les détails");
    }
}


