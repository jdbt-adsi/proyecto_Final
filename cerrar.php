<?php session_start();

    session_destroy();
    $_SESSION = array();
    header('Location: views/login.view.php');
    die();
?>