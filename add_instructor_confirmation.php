<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8"/>
<meta name="author" content="the cool web design group">
<meta name="description" content="Boring course registration project for Dr. Williamson's Web Design & Programming class, spring 2021.">
<meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- mobile compatibility -->
<title>Add Instructor Confirmation</title>
<link rel="stylesheet" type="text/css" href="style.css">
<script src="form_validation.js"></script>
<?php session_start(); ?>
<?php include("login_check.php"); ?>

</head>
<body>
    <header>
        <?php include("header.php"); ?>
    </header>
    <h1>Add Instructor Confirmation</h1>
<!--


//assign values of all form inputs to variables
$firstName= $_POST["first_name"];
$lastName = $_POST["last_name"];
$name = $firstName." ".$lastName;

$cdepartment = $_POST["department"];
$rank = $_POST["rank"];
$email = $_POST["email"];

//check if the non required fields exist or not
if (isset($courseName))
    $courseName = "N/A";
if (isset($name))
    $name = "N/A";

<h3>The following course will be added</h3>
<table>
    <tr>
        <td>Course Year</td><td> <?php print "$courseYear";?> </td>
    </tr>

    <tr>
        <td>Course</td><td> <?php print "$course";?> </td>
    </tr>

    <tr>
        <td>Course Name</td><td> <?php print "$courseName";?> </td>
    </tr>

    <tr>
        <td>Room</td> <td> <?php print "$room"; ?> </td>
    </tr>

    <tr>
        <td>Days</td><td> <?php print "$days"; ?> </td>
    </tr>

    <tr>
        <td>Time</td><td> <?php print "$time"; ?> </td>
    </tr>
    <tr>
        <td>Credit Hours</td> <td> <?php print "$creditHours"; ?> </td>
    </tr>

    <tr>
        <td>Instructor</td> <td> <?php print "$instructor"; ?> </td>
    </tr>

    <tr>
        <td>Enrollment Cap</td> <td> <?php print "$enrollmentCap"; ?> </td>
    </tr>
</table>
-->
<h3>The following instructor will be added</h3>
<table>
<?php include("confirmation_loop.php");?>
</table>
</body>
</html>