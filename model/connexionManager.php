<?php
require_once('Manager.php');
class UserConnexionManager extends Manager
{

    public function getUserData($pseudo)
    {
        $bdd = $this->connection();

        $req = $bdd->prepare('SELECT * FROM users WHERE pseudo = ?');
        $req->execute([$pseudo]);

        return $req->fetch(PDO::FETCH_ASSOC);
    }
    public function userConnexion($pseudo, $password)
    {
        $userData = $this->getUserData($pseudo);

        if ($userData && password_verify($password, $userData['password'])) {
            $_SESSION['connect'] = 1;
            $_SESSION['id'] = $userData['id'];
            $_SESSION['pseudo'] = $userData['pseudo'];
            $_SESSION['creation_date']= $userData['creation_date'];
            $_SESSION['admin'] = $userData['admin'];
            $_SESSION['email']= $userData['email'];
            $_SESSION['avatar']=$userData['avatar'];
            header('Location: ?page=connected');
            exit();
        } else {
            header('Location: ?page=connexion&error=2');
        }
    }
}
