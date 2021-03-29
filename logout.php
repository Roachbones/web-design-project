<?php
    //unsets session variable for login and redirects to login_page.php
    unset($_SESSION["login"]);
    header("location:login_page.php");
?>