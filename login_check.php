<?php
    // determines if a user should be redirected due to their role or inactivity
    // determining duration of inactivity
    $current_time=time();
    $last_seen_time=$_SESSION["last_seen"];

    $time_inactive=$current_time-$last_seen_time;

    $_SESSION["last_seen"]=$current_time;

    if($time_inactive > 10){
        $_SESSION["error"]="SESSION TIMEOUT";
        header("location:login_page.php");
    }

    // determining if user is logged in
    if(!isset($_SESSION["login"])){
        header("location:login_page.php");
    }

?>