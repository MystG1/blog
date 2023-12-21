<?php
require_once('Manager.php');

class ArticleModificationManager extends Manager
{

    public function modifyArticle($articleId, $title, $subtitle, $content)
    {
        try {
            $bdd = $this->connection();

            $query = $bdd->prepare("UPDATE articles SET title = ?, subtitle = ?, content = ? WHERE id = ?");
            $result = $query->execute([$title, $subtitle, $content, $articleId]);

            return $result;
        } catch (Exception $e) {
            throw new Exception('Erreur lors de la modification de l\'article : ' . $e->getMessage());
        }
    }
    
}
