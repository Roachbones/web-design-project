<?php
    // checks the current session to see if a valiid users is logging in

    // if the login name is set through form submission, storing it in $username
    if (isset($_POST["login"])){
        $username=$_POST["login"];
    }

    // handling cases where a valid username is supplied
    if($username == "admin" || $username == "instructor" || $username == "student"){
        session_start();
        $_SESSION["login"]=$_POST["login"];
        header("location:index.php");
    }

    // if the username isn't valid, setting login to BAD LOGIN and redirecting back to login page
    else{
        session_start();
        $_SESSION["login"]="BAD LOGIN";
        header("location:login_page.php");
    }
?>
