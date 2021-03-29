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
<header>
	<?php include("header.php"); ?>
	<h1>Boring Course Registration System</h1>
</header>
<main>
	<p>hi buddy. here are the links :3<p>
	<ul>
		<li><a href="enroll_student.php">enroll student</a></li>
		<li><a href="add_instructor.php">add instructor</a></li>
		<li><a href="add_course.php">add course</a></li>
		<li><a href="register_for_course.php">register for course</a></li>
		<li><a href="drop_a_course.php">drop a course</a></li>
	</ul>
</main>

<footer>
<p>this website was <a href="https://github.com/Roachbones/web-design-project">constructed</a> by the cool web design group: vivian, spence, kade, and tony</p>
</footer>

</body>
</html>
