<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8"/>
<meta name="author" content="the cool web design group">
<meta name="description" content="Boring course registration project for Dr. Williamson's Web Design & Programming class, spring 2021.">
<meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- mobile compatibility -->
<title>Register for Course Confirmation</title>
<link rel="stylesheet" type="text/css" href="style.css">
<script src="form_validation.js"></script>
<?php session_start(); ?>
<?php include("login_check.php"); ?>

</head>
<body>
    <header>
        <?php include("header.php"); ?>
    </header>
    <?php 
    $username=$_SESSION["login"];
    if($username == "student" || $username == "admin"){ ?>
    <h1>Register Course Confirmation</h1>   
    <h3>The following course will be registered for student</h3>
    <form action="insert.php" method="post">
        <table>
            <?php include("confirmation_loop.php");?>
        </table>
        <input type="submit" value="submit!" id="submit">
    </form>
    <?php } else {
        http_response_code(403);
        include("begone.php");
    } ?>
    <footer>
        <?php include("footer.php"); ?>
    </footer>
</body>
</html>