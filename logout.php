<?php
    // unsets session variable for login and redirects to login_page.php
    // ending session, clearing $_SESSION array
    
    session_start();
    unset($_SESSION["login"]);
    unset($_SESSION["last_seen"]);
    
    // redirect to login page
    header("location:login_page.php");
?>
