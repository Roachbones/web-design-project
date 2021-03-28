<?php
    // checking that the user used a valid login name
    // if they didn't failing to submit the form
    $username=$_POST["login"];
    if($username == "admin" || $username == "instructor" || $username == "student"){
        session_start();
        $_SESSION["login"]=$_POST["login"];
        header("location:home.php");
    }
    else{
        session_start();
        $_SESSION["login"]="INVALID";
        header("location:index.php");
    }
?>