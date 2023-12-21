<?php
try {

} catch (Exception $e) {
    $error = $e->getMessage();
    require('view/errorView.php');
}
