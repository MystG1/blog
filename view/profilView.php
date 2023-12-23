<?php $is_admin = isset($_SESSION['admin']) && $_SESSION['admin'] == 1;?>
<?php
$title = "Mon profil";
ob_start();
?>
 <?php if (isset($_SESSION['connect']) && $_SESSION['connect'] === 1) { ?>
<section class="p-5 starsBackground">
    <div class="container-md">
        <div class="row justify-content-center">
            <div class="col-md-4 border bg-darkpurple border-5 border-primary rounded text-center p-3">
                <h1 class="h2 my-2 text-primary"><?php echo $_SESSION['pseudo']; ?></h1>
                <img class="img-fluid rounded-circle border border-2 my-3 border-primary" src="../public/assets/avatar<?php echo $_SESSION['avatar']; ?>.png" alt="arcade">
                <p class="text-center">
                    <button id="avatarModifyButton" class="btn btn-outline-primary my-1">Modifier l'image</button>
                </p>
                <div class="text-start">
                    <p class="text-primary">Adresse mail : <b class="text-green"><?php echo $_SESSION['email']; ?></b></p>
                    <p class="text-primary">Inscrit le : <b class="text-green"><?php echo $_SESSION['creation_date']; ?></b></p>
                </div>
            </div>
        </div>
    </div>

    <form action="?page=profil" method="post" id="avatarSection" class="flex-wrap justify-content-center border w-75 mx-auto border-3 py-3 rounded border-primary my-4 bg-darkpurple" style="display: none;">
        <?php
        $numberOfAvatars = 10;

        for ($i = 1; $i <= $numberOfAvatars; $i++) {
            $avatarPath = "../public/assets/avatar" . $i . ".png";
        ?>
            <label for="avatar<?php echo $i; ?>" class="mx-4">
                <input style="display: none" type="radio" id="avatar<?php echo $i; ?>" name="avatar" value="<?php echo $i; ?>"><br>
                <img src="<?php echo $avatarPath; ?>" alt="Avatar <?php echo $i; ?>" class=" avatarImage">
            </label>
        <?php
        }
        ?>

        <input type="submit" value="Modifier" class="btn btn-outline-primary m-4 h-25">
    </form>
</section>

<script>
    const avatarModifyButton = document.getElementById('avatarModifyButton');
    const avatarSection = document.getElementById('avatarSection');
    avatarModifyButton.addEventListener('click', function() {
        avatarSection.style.display = 'flex';
    });
</script>

<?php } else {
    header('index.php?page=connexion');
} ?>

<?php
$content = ob_get_clean();
require('base.php');
?>