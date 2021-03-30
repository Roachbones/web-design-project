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
	<section>
	<div class="two_column">
		<div>
			<p>hi <?php echo $_SESSION["login"]; ?>, you can add stuff here :3<p>
			<ul>
				<?php
				$username=$_SESSION["login"];
				if($username == "student" or $username == "admin") { ?>	    
					<li><a href="register_for_course.php">register for course</a></li>
					<li><a href="drop_a_course.php">drop a course</a></li>
				<?php
				}
				if($username == "instructor" or $username == "admin") { ?>
					<li><a href="add_course.php">add course</a></li>
				<?php }
				if($username == "admin"){ ?>
					<!-- admin-only stuff -->
					<li><a href="enroll_student.php">enroll student</a></li>
					<li><a href="add_instructor.php">add instructor</a></li>
				<?php } ?>
			</ul>
		</div>
		<div>
			<p>you can view what you added here ',:^y</p>
			<ul>
				<?php if($username == "student"){ ?>
					<li><a href="view_registered_courses_student.php">view your courses</a></li>
				<?php	
				}
				if($username == "instructor"){ ?>
					<li><a href="view_registered_students_instructor.php">view your students</a></li>
					<li><a href="view_taught_courses_instructor.php">view your courses</a></li>
				<?php
				}
				if($username == "admin"){ ?>
					<li><a href="student_selector.php">view a student's courses</a></li>
					<li><a href="course_selector.php">view a course's students</a></li>
					<li><a href="instructor_selector.php">view an instructor's courses</a></li>
					<li><a href="semester_selector.php">view students registered by semester</a></li>
				<?php
				} ?>
			</ul>
		</div>
	</section>
</main>



<?php include("footer.php"); ?>

</body>
</html>
