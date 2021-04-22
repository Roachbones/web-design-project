<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>insert.php</title>
    <?php session_start(); ?>
    <?php include("login_check.php"); ?>
</head>
<body>
    <h1>ayy</h1>
<table>
<?php
// $arr = $_POST;
    var_dump($_SESSION["arr"]);
    //MUST begin with http://localhost:4000/
    $url = $_SESSION["arr"]["url"];
    if($url == "http://localhost:4000/register_for_course.php"){
        echo "came from $url";
    }
    else if($url == "http://localhost:4000/drop_a_course.php"){
        echo "came from $url";
    }
    else if($url == "http://localhost:4000/add_course.php"){
        echo "came from $url";
    }
    else if($url == "http://localhost:4000/enroll_student.php"){
        echo "came from $url";
    }
    else if($url == "http://localhost:4000/add_instructor.php"){
        echo "came from $url";
    }
?></table>
</body>
</html>
