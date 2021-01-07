<?php
    session_start();
    if(!isset($_SESSION["username"]) && !isset($_POST['username'])) {
        echo "<script type='text/javascript'> document.location = 'login.php'; </script>";
        //header("Location:  login.php");
        //exit();
    }
?>
