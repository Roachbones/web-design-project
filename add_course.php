<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8"/>
<meta name="author" content="the cool web design group">
<meta name="description" content="Boring course registration project for Dr. Williamson's Web Design & Programming class, spring 2021.">
<meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- mobile compatibility -->
<title>Add Boring Course</title>
<link rel="stylesheet" type="text/css" href="style.css">
<script src="form_validation.js"></script>
<script src="display_form.js"></script>
<?php session_start(); ?>
<?php include("login_check.php"); ?>

</head>
<body>
    <header>
	<?php include("header.php"); ?>
        <h1>Add a Boring Course</h1>
    </header>
    <main>
        <form action = "add_course_display.php" method="post">
            <div class="two_column">
                <label for="semester">semester</label>
                <select name="semester" id="semester">
                    <option value="spring">spring</option>
                    <option value="summer">summer</option>
                    <option value="fall">fall</option>    
                </select>
                    
                <label for="course_year">course year *</label>
                <input type="text" id="course_year" name="course_year" required>
                
                <label for="course_prefix">course prefix *</label>
                <input type="text" id="course_prefix" name="course_prefix" required>
                
                <label for="course_number">course number *</label>
                <input type="text" id="course_number" name="course_number" required>
                
                <label for="course_section">course section *</label>
                <input type="text" id="course_section" name="course_section" required>
                
                <label for="course_name">course name</label>
                <input type="text" id="course_name" name="course_name">
                
                <label for="room">room</label>
                <input type="text" id="room" name="room">
                
                <label for="days">days</label>
                <select name="days" id="days">
                    <option value="Monday, Wednesday, Friday">Monday, Wednesday, Friday</option>
                    <option value="Tuesday, Thursday">Tuesday, Thursday</option>
                    <option value="Monday">Monday</option>
                    <option value="Tuesday">Tuesday</option>
                    <option value="Wednesday">Wednesday</option>
                    <option value="Thursday">Thursday</option>
                </select>
                
                <label for="Monday_Wednesday_Friday_times" id="mwf_label">time</label>
                <select name="time1" id="Monday_Wednesday_Friday">
                    <option value="8:00 AM to 8:50 AM">8:00 AM to 8:50 AM</option>
                    <option value="9:00 AM to 9:50 AM">9:00 AM to 9:50 AM</option>
                    <option value="10:00 AM to 10:50 AM">10:00 AM to 10:50 AM</option>
                    <option value="11:00 AM to 11:50 AM">11:00 AM to 11:50 AM</option>
                    <option value="12:00 PM to 12:50 PM">12:00 PM to 12:50 PM</option>
                    <option value="1:00 PM to 1:50 PM">1:00 PM to 1:50 PM</option>
                    <option value="2:00 PM to 2:50 PM">2:00 PM to 2:50 PM</option>
                    <option value="3:00 PM to 3:50 PM">3:00 PM to 3:50 PM</option>
                </select>
                <label for="Tuesday_Thursday_times" id="tth_label" class="hidden">time</label>
                <select name="time2" id="Tuesday_Thursday" class="hidden">
                    <option value="8:00 AM to 9:15 AM">8:00 AM to 9:15 AM</option>
                    <option value="9:30 AM to 10:45 AM">9:30 AM to 10:45 AM</option>
                    <option value="11:10 AM to 12:15 PM">11:10 AM to 12:15 PM</option>
                    <option value="1:00 PM to 2:15 PM">1:00 PM to 2:15 PM</option>
                    <option value="2:30 PM to 3:45 PM">2:30 PM to 3:45 PM</option>
                </select>
                <label for="any_single_day_times" id="singleday_label" class="hidden">time</label>
                <select name="time3" id="any_single_day" class="hidden">
                    <option value="1:00 PM to 4:00 PM">1:00 PM to 4:00 PM</option>
                    <option value="2:00 PM to 5:00 PM">2:00 PM to 5:00 PM</option>
                    <option value="7:00 PM to 9:30 PM">7:00 PM to 9:30 PM</option>
                </select>
                
                <label for="credit_hours">credit hours *</label>
                <input type="text" id="credit_hours" name="credit_hours" required>

                <label for="instructor_first_name">instructor first name *</label>
                <input type="text" id="instructor_first_name" name="instructor_first_name" required>

                <label for="instructor_last_name">instructor last name *</label>
                <input type="text" id="instructor_last_name" name="instructor_last_name" required>

                <label for="enrollment_cap">enrollment cap *</label>
                <input type="text" id="enrollment_cap" name="enrollment_cap" required>
            </div>
            <p class="memo">* indicates a required field</p>
            <input type="submit" value="submit!" id ="submit">
        </form>
    </main>
    <?php include("footer.php"); ?>
    <script src="event_registration.js"></script>
</body>
</html>
