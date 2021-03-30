<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8"/>
<meta name="author" content="the cool web design group">
<meta name="description" content="Boring course registration project for Dr. Williamson's Web Design & Programming class, spring 2021.">
<meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- mobile compatibility -->
<title>Boring Course Registration System</title>
<link rel="stylesheet" type="text/css" href="style.css">
<?php session_start(); ?>
<?php include("login_check.php"); ?>
<?php
	if($_SESSION["login"]=="admin"){
		$name=$_POST["selected_student"];
	}
	else{
		$name=$_SESSION["login"];
	}
?>

</head>
<body>
	<?php include("header.php"); ?>
<header>
	<h1>Boring Course Registration System</h1>
</header>
<main>
	<p>Displaying courses for <?php echo "$name"; ?>.</p> <!-- eventually use this session variable to know who to query info for -->
	<table>
		<tr><th>Prefix</th><th>Number</th><th>Section</th><th>Name</th><th>Days Offered and Time</th><th>Room</th><th>Credit Hours</th><th>Instructor</th><th>Enrollment Cap</th></tr>
	</table>
</main>
<?php include("footer.php"); ?>

</body>
</html>
