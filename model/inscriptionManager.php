<?php

require_once('Manager.php');

class UserInscriptionManager extends Manager
{

    public function userRegister($pseudo, $email, $password)
    {
        $bdd = $this->connection();
        $requete = $bdd->prepare('INSERT INTO users(pseudo, email, password) VALUES(?, ?, ?)');
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        $result = $requete->execute([$pseudo, $email, $hashedPassword]);

        return $result;
    }

    public function verification($email, $pseudo)
    {
        $email            = htmlspecialchars($_POST['email']);
        $pseudo         = htmlspecialchars(($_POST['pseudo']));

        $bdd            = $this->connection();
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {

            header('Location: ?page=inscription&error=2');
            exit();
        }

        $req = $bdd->prepare('SELECT COUNT(*) as numberEmail FROM users WHERE email = ?');
        $req->execute([$email]);

        while ($emailVerification = $req->fetch()) {

            if ($emailVerification['numberEmail'] != 0) {

                header('Location: ?page=inscription&error=1');
                exit();
            }
        }
        $reqA = $bdd->prepare('SELECT COUNT(*) as numberPseudo FROM users WHERE pseudo = ?');
        $reqA->execute([$pseudo]);

        while ($pseudoVerification = $reqA->fetch()) {

            if ($pseudoVerification['numberPseudo'] != 0) {

                header('Location: ?page=inscription&error=3');
                exit();
            }
        }
    }
}
