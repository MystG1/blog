<?php
require_once('Manager.php');

class AvatarModificationManager extends Manager
{
    public function updateAvatar($pseudo, $avatar)
    {
        try {
            $bdd = $this->connection();

            $query = $bdd->prepare("UPDATE users SET avatar = ? WHERE pseudo = ?");
            $result = $query->execute([$avatar, $pseudo]);
            


            return $result;
        } catch (Exception $e) {
            throw new Exception('Erreur lors de la modification de l\'avatar : ' . $e->getMessage());
        }
    }
}
