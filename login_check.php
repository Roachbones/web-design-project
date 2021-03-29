<?php
    session_start();
    $current_time=time();
    $last_seen_time=$_SESSION["last_seen"];

    $time_inactive=$current_time-$last_seen_time;

    if($time_inactive > 60){
        $_SESSION["login"]="SESSION TIMEOUT";
        header("location:login_page.php");
    }
?>