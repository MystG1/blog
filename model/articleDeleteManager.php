<?php

require_once('Manager.php');


try {
    $bdd = new \PDO('mysql:host=localhost;dbname=blog;charset=utf8', 'root', '');
} catch (\Exception $e) {
    throw new \Exception('Erreur : ' . $e->getMessage());
}

$requete = $bdd->prepare('DELETE FROM articles WHERE id = :deleteArticle LIMIT 1');
$requete->bindValue(':deleteArticle', $_GET['numArticle'], PDO::PARAM_INT);
$requete->execute();

