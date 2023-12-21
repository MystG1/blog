<?php

require_once('Manager.php');

class CommentCreationManager extends Manager
{
    
    public function commentContent($content, $user_id)
    {
        if (isset($_GET['article'])) {
            
            $article_id =   $_GET['article'];
            $bdd            = $this->connection();
            $requete        = $bdd->prepare('INSERT INTO comments (content, user_id, article_id ) VALUES(?, ?, ?)');
            $result         = $requete->execute([$content, $user_id, $article_id]);
            $_SESSION['last_article_id'] = $article_id;
    
            return $result;
            throw new Exception("ID de l'article manquant");
        }
    }
    public function getCommentsByArticleId($article_id)
    {
        $bdd = $this->connection();
        $query = $bdd->prepare('SELECT * FROM comments WHERE article_id = ?');
        $query->execute([$article_id]);
        $comments = $query->fetchAll(PDO::FETCH_ASSOC);
        

        return $comments;
    }
    public function deleteComment($comment_id, $user_id)
    {
        $bdd = $this->connection();

        $query = $bdd->prepare("DELETE FROM comments WHERE id = ? AND user_id = ?");
        $result = $query->execute([$comment_id, $user_id]);

        return $result;
    }
}    


