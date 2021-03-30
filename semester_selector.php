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
		<select name="selected_semester">
			<option value="SP 2021">SP 2021</option>
			<option value="FL 2021">FL 2021</option>
			<option value="SP 2022">SP 2022</option>
			<option value="FL 2022">FL 2022</option>
		</select>
		<input type="submit" value="select" id="submit">
	</form>
</main>



<?php include("footer.php"); ?>

</body>
</html>
