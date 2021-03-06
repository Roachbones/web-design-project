<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8"/>
<meta name="author" content="the cool web design group">
<meta name="description" content="Boring course registration project for Dr. Williamson's Web Design & Programming class, spring 2021.">
<meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- mobile compatibility -->
<title>Boring Course Registration</title>
<link rel="stylesheet" type="text/css" href="style.css">
<script src="form_validation.js"></script>
</head>
<?php session_start(); ?>
<?php 
include("login_check.php");
include("header.php");
include("insert.php");
?>

<body>
    <header>
        <h1>Register for a Boring Course</h1>
    </header>
    <main>
        <?php if($_SESSION["login"] == "admin" or $_SESSION["login"] == "student") { ?>
            <form action="register_for_course_confirmation.php" method="post">
                <div class="two_column">
                    <label for="first_name">first name *</label>
                    <input type="text" id="first_name" name="first_name" required>
                    
                    <label for="last_name">last name *</label>
                    <input type="text" id="last_name" name="last_name" required>
                    
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
                </div>
                <p class="memo">* indicates a required field</p>
			    <input type="submit" value="submit!" id="submit">
            </form>
        
            <!-- set $_POST to an array that contains the entries retreived by a SELECT * from the student table so that confirmation loop may be used in order to display this table neatly, or just take the code from confirmation loop and apply to $arr -->
            
        <?php 
        echo "<h4 class='center'>List of Enrolled Students</h4>";
        $sql = "SELECT * FROM student;";
        printQueryAsTable($sql);
        echo "<h4 class='center'>List of Courses</h4>";
        $sql = "SELECT * FROM course;";
        printQueryAsTable($sql);
        echo "
        <script type='text/javascript'>
        alert('Working');
        </script>
        ";



        } else { 
            http_response_code(403);
            include("begone.php");
        }
        ?>
    </main>
    <footer>
        <p>this website was <a href="https://github.com/Roachbones/web-design-project">constructed</a> by the cool web design group: vivian, spence, kade, and tony</p>
    </footer>
    <script src="event_registration.js"></script>
</body>
</html>
