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
    <h1>Register Course Confirmation</h1>   
    <h3> <? echo"$_POST["first_name"].' '.$_POST["last_name"]"; ?> will be registered for the following course</h3>"
<table>
    <?php include("confirmation_loop.php");?>
</table>
</body>
</html>