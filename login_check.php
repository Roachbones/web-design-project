<?php
    // checks the current session to see if a valiid users is logging/logged in
    // this handles both the login screen and session inactivity

    if (isset($_POST["login"])){
        $username=$_POST["login"];
    }
    if (isset($_SESSION["login"])){
        $username=$_SESSION["login"];
    }

    if($username == "admin" || $username == "instructor" || $username == "student"){
        session_start();
        $_SESSION["login"]=$_POST["login"];
        header("location:index.php");
    }
    elseif(!isset($username)){
        session_start();
        $_SESSION["login"]="BAD LOGIN";
        header("location:login_page.php");
    }
?>
