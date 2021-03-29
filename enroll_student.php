<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8"/>
<meta name="author" content="the cool web design group">
<meta name="description" content="Student enrollment form for our boring course registration project for Dr. Williamson's Web Design & Programming class, spring 2021.">
<meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- mobile compatibility -->
<title>Boring Student Enrollment</title>
<link rel="stylesheet" type="text/css" href="style.css">
<script src="form_validation.js"></script>
<script src="display_form.js"></script>
<?php session_start(); ?>
<?php include("login_check.php"); ?>

</head>
<body>
	<?php include("header.php"); ?>
	<header>
		<h1>Boring Student Enrollment</h1>
	</header>
	<main>
		<form>
			<div class="two_column">
				<label for="first_name">first name *</label>
				<input type="text" name="first_name" id="first_name" required>

				<label for="last_name">last name *</label>
				<input type="text" name="last_name" id="last_name" required>

				<label for="year">year</label>
				<select name="year">
					<option value="first-year">first-year</option> <!-- freshman is too gendered -->
					<option value="sophomore">sophomore</option>
					<option value="junior">junior</option>
					<option value="senior">senior</option>
					<option value="super_senior">super senior</option>
					<option value="complicated">it's complicated 😅</option>
				</select>

				<label for="major">major</label>
				<input type="text" name="major" id="major">

				<label for="email">email address *</label>
				<input type="text" name="email" id="email" required>
			</div>
			<p class="memo">* indicates a required field</p>
			<input type="submit" value="submit!" id="submit">
		</form>
	</main>
	<?php include("footer.php"); ?>
	<script src="event_registration.js"></script>
</body>
</html>
