<?php

require_once('Manager.php');

class ArticleCreationManager extends Manager
{

    public function articleContent($title, $subtitle, $content)
    {

        $bdd            = $this->connection();
        $requete        = $bdd->prepare('INSERT INTO articles(title, subtitle, content ) VALUES(?, ?, ?)');
        $result         = $requete->execute([$title, $subtitle, $content]);

        return $result;
    }
}
