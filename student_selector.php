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
	<p>select a student to view the courses they are registered for.</p>
	<form action="view_registered_courses_student.php" method="post">
		<select name="selected_instructor">
			<option value="vivian">vivian</option>
			<option value="spence">spence</option>
			<option value="kade">kade</option>
			<option value="tony">tony</option>
		</select>
		<input type="submit" value="select" id="submit">
	</form>
</main>



<?php include("footer.php"); ?>

</body>
</html>
