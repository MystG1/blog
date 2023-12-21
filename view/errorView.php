<?php
try {
    // Votre code susceptible de lever une exception
} catch (Exception $e) {
    $error = $e->getMessage();
    require('view/errorView.php');
}
