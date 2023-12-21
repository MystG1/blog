<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <title><?php echo $title; ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../public/design/defaut.css">
</head>

<body class="bg-black d-flex flex-column ">

    <?php if (isset($_SESSION['connect']) && $_SESSION['connect'] === 1) { ?>
        <header class="bg-dark borderAnimation text-center sticky-top">
            <nav class="navbar navbar-dark navbar-expand-md">
                <div class="container-fluid">
                    <ul class="navbar-nav d-flex flex-md-row justify-content-center align-items-center w-100">
                        <li class="nav-item mx-md-2 mx-lg-5">
                            <a class="nav-link mx-3 px-4" href="?page=accueil">Accueil</a>
                        </li>
                        <li class="nav-item mx-md-2 mx-lg-5">
                            <a class="nav-link px-4" href="?page=articles">Articles</a>
                        </li>
                        <li class="nav-item flex-grow-1">
                            <h1 class="h1 my-0 text-primary mx-md-5">Le blog du geek</h1>
                        </li>

                        <li class="nav-item mx-md-2 mx-lg-5 px-5  ">
                            <div class="dropdown d-flex ">
                            <img class="img-fluid w-17 rounded-circle my-3 border-primary" src="../public/assets/avatar<?php echo $_SESSION['avatar']; ?>.png" alt="arcade">
                                <button class="btn btn-secondary dropdown-toggle nav-link px-2 my-auto text-rlblue" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                    <?php echo $_SESSION['pseudo']; ?>
                                </button>
                                <ul class="dropdown-menu text-center bg-darkpurple bg-opacity-75 border border-2 rounded border-purple " aria-labelledby="dropdownMenuButton">

                                    <li><a class="nav-link px-4" href="index.php?page=profil">Profil</a></li>
                                    <li><a class="nav-link px-4" href="#"></a></li>
                                    <li><a class="nav-link px-4" href="?page=connexion">Déconnexion</a></li>

                                </ul>
                            </div>
                        </li>

                    </ul>
                </div>
            </nav>
        </header>
    <?php } else { ?>
        <header class="bg-dark borderAnimation text-center sticky-top">
            <nav class="navbar navbar-dark navbar-expand-md">
                <div class="container-fluid">
                    <ul class="navbar-nav flex-md-row justify-content-center align-items-center w-100">
                        <li class="nav-item mx-md-2 mx-lg-5">
                            <a class="nav-link mx-3 px-4" href="?page=accueil">Accueil</a>
                        </li>
                        <li class="nav-item mx-md-2 mx-lg-5">
                            <a class="nav-link px-4" href="?page=articles">Articles</a>
                        </li>
                        <li class="nav-item">
                            <h1 class="h1 my-0 mx-auto text-primary mx-md-5">Le blog du geek</h1>
                        </li>
                        <li class="nav-item mx-md-2 mx-lg-5">
                            <a class="nav-link px-4" href="?page=connexion">Connexion</a>
                        </li>
                        <li class="nav-item mx-md-2 mx-lg-5">
                            <a class="nav-link px-4" href="?page=inscription">Inscription</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
    <?php } ?>

    <div class="sectionFlex">
        <?= $content ?>
    </div>

    <footer class="borderAnimation text-center text-primary p-1">
        <p>©copyright Gaëtan Ferron</p>
    </footer>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../public/design/defaut.js"></script>
</body>

</html>