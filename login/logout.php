<?php 

    session_start();
    unset($_SESSION['cusEmail']);
    unset($_SESSION['cusId']);
    session_destroy();
    header('location: ../index.php');

?>
