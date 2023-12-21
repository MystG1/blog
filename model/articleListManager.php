<?php

require_once('Manager.php');

class ArticleListManager extends Manager
{

    public function getArticles()
    {
        $bdd = $this->connection();
        $requeteA = $bdd->query('SELECT * FROM articles ORDER BY creation_date');

        return $requeteA;
    }

    public function getArticleById($articleId)
    {
        try {
            $bdd = $this->connection();

            $query = $bdd->prepare("SELECT * FROM articles WHERE id = ?");
            $query->execute([$articleId]);

            $article = $query->fetch(PDO::FETCH_ASSOC);

            return $article;
        } catch (Exception $e) {
            throw new Exception('Erreur lors de la récupération des détails de l\'article : ' . $e->getMessage());
        }
    }
    public function deleteArticle($articleId)
    {
        try {
            $bdd = $this->connection();

            $requete = $bdd->prepare('DELETE FROM articles WHERE id = :deleteArticle LIMIT 1');
            $requete->bindValue(':deleteArticle', $articleId, PDO::PARAM_INT);
            $requete->execute();
        } catch (\Exception $e) {
            throw new \Exception('Erreur lors de la suppression de l\'article : ' . $e->getMessage());
        }
    }
}

