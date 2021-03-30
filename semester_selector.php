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
<p>select a course to view</p>
	<form action="view_semester_students_admin.php" method="post">
		<select name="course selector">
			<option value="SP2021">SP2021</option>
			<option value="FL2021">FL2021</option>
			<option value="SP2022">SP2022</option>
			<option value="FL2022">FL2022</option>
		</select>
		<input type="submit" value="select" id="submit">
	</form>
</main>



<?php include("footer.php"); ?>

</body>
</html>
