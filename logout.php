
<?php
    session_start();
    // Destroy session
    echo "<script type='text/javascript'> localStorage.clear(); </script>";
    if(session_destroy()) {
        // Redirecting To Home Page
        header("Location: login.php");
    }
?>
