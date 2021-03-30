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

</head>
<body>
	<?php include("header.php"); ?>
<header>
	<h1>Boring Course Registration System</h1>
</header>
<main>
<?php if($_SESSION["login"] == "admin") { ?>
	<p>Displaying students registered for <?php echo $_POST["selected_semester"]; ?>.</p>
	<table>
		<tr><th>Name</th><th>Year</th><th>Major</th><th>Email</th>
	</table>
	<?php } else {
		http_response_code(403);
		include("begone.php");
	} ?>
</main>



<?php include("footer.php"); ?>

</body>
</html>
