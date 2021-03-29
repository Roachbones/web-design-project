<!DOCTYPE html>
<html lang="en">
<head>
<title>Display Add Course</title>
<meta charset="utf-8">
<style type="text/css">
th, td, table{border: thin solid black;}
</style>

</head>
<body>
<?php

//assign values of all form inputs to variables
$courseYear = $_POST["course_year"];
$coursePrefix = $_POST["course_prefix"];
$courseNumber = $_POST["course_number"];
$courseSection = $_POST["course_section"];
$course = $coursePrefix." ".$courseNumber."-".$courseSection;
$courseName = $_POST["course_name"];
$room = $_POST["room"];
$days = $_POST["days"];
if ($days == "Monday, Wednesday, Friday")
    $time = $_POST["time1"];
elseif ($days == "Tuesday, Thursday")
    $time = $_POST["time2"];
else
    $time = $_POST["time3"];

$creditHours = $_POST["credit_hours"];
$instructorFirstName = $_POST["instructor_first_name"];
$instructorLastName = $_POST["instructor_last_name"];
$instructor = $instructorFirstName." ".$instructorLastName;
$enrollmentCap = $_POST["enrollment_cap"];

//check if the non required fields exist or not
if ($courseName = "")
    $courseName = "N/A";
if ($room = "")
    $name = "N/A";
?>
<table>
    <caption>Course to Add<caption>
    <tr>
        <td>Course Year: </td><td> <?php print "$courseYear";?> </td>
    </tr><br>

    <tr>
        <td>Course: </td><td> <?php print "$course";?> </td>
    </tr><br>

    <tr>
        <td>Course Name: </td><td> <?php print "$courseName";?> </td>
    </tr><br>

    <tr>
        <td>Room: </td> <td> <?php print "$room"; ?> </td>
    </tr><br>

    <tr>
        <td>Days: </td><td> <?php print "$days"; ?> </td>
    </tr><br>

    <tr>
        <td>Time: </td><td> <?php print "$time"; ?> </td>
    </tr><br>
    <tr>
        <td>Credit Hours: </td> <td> <?php print "$creditHours"; ?> </td>
    </tr><br>

    <tr>
        <td>Instructor: </td> <td> <?php print "$instructor"; ?> </td>
    </tr><br>

    <tr>
        <td>Enrollment Cap: </td> <td> <?php print "$enrollmentCap"; ?> </td>
    </tr><br>
</table>

</body>
</html>