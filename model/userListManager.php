<?php

require_once('Manager.php');

class UserListManager extends Manager
{

    public function getUsers()
    {

        $bdd = $this->connection();
        $requete = $bdd->query('SELECT * FROM users');

        return $requete;
    }
    public function getUserById($user_id)
    {
        try {
            $bdd = $this->connection();

            $query = $bdd->prepare("SELECT * FROM users WHERE id = ?");
            $query->execute([$user_id]);
            $userDetails = $query->fetch(PDO::FETCH_ASSOC);

            return $userDetails;
        } catch (Exception $e) {
            throw new Exception('Erreur lors de la récupération des détails de l\'utilisateur : ' . $e->getMessage());
        }
    }
}



