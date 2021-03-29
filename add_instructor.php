<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8"/>
<meta name="author" content="the cool web design group">
<meta name="description" content="Instructor adding form for our boring course registration project for Dr. Williamson's Web Design & Programming class, spring 2021.">
<meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- mobile compatibility -->
<title>Add a Boring Instructor</title>
<link rel="stylesheet" type="text/css" href="style.css">
<script src="form_validation.js"></script>
<script src="display_form.js"></script>
<?php session_start(); ?>
<?php include("login_check.php"); ?>

</head>
<body>
	<header>
		<?php include("header.php"); ?>
		<h1>Add Boring Instructor</h1>
	</header>
	<main>
		<p>hi buddy. here's where you add an instructor. fill out this info about the instructor and click submit to add them.<p>
		<form>
			<div class="two_column">
				<label for="first_name">first name *</label>
				<input type="text" name="first_name" id="first_name" required>

				<label for="last_name">last name *</label>
				<input type="text" name="last_name" id="last_name" required>

				<label for="department">department</label>
				<input type="text" name="department" id="department">

				<label for="rank">rank</label>
				<select name="rank" id="rank">
					<option value="instructor">mere instructor, and nothing more</option> <!-- freshman is too gendered -->
					<option value="assistant">assistant professor</option>
					<option value="associate">associate professor</option>
					<option value="professor">just a plain old professor</option>
				</select>

				<label for="email">email address *</label>
				<input type="text" name="email" id="email" required>
			</div>
			<p class="memo">* indicates a required field</p>
			<input type="submit" value="submit!" id="submit">
		</form>
	</main>
	<footer>
		<p>this website was <a href="https://github.com/Roachbones/web-design-project">constructed</a> by the cool web design group: vivian, spence, kade, and tony</p>
	</footer>
	<script src="event_registration.js"></script>
	</body>
</html>