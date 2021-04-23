<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>insert.php</title>
    <?php session_start(); ?>
    <?php include("login_check.php"); ?>
</head>
<body>
    <?php include("header.php"); ?>
    <h1>ayy</h1>
<table>
<?php
    //prints contents of arr array for troubleshooting
    var_dump($_SESSION["arr"]);

    //creates these so their default is null. This will handle optional fields because it will add them whether there is a value or not
    // having these all in variables will make it way easier to deal with the database. All these if statments just put the values from the form into variables.
    $url;
    $fname;
    $lname;
    $semester;
    $year;
    $prefix;
    $number;
    $section;
    $name; //optional
    $room; //optional
    $days;
    $hours; //optional
    $ifname; //optional
    $ilname; //optional
    $cap; //optional
    //$major; //optional
    $email;

    //these if statements assign the variables to their values from the form. It doesn't matter which form because it checks all possible field names
    if(isset($_SESSION["arr"]["url"])){
    //MUST begin with http://localhost:4000/
    //this may cause problems depending on how it's hosted so in the future trim using / as delimiter
        $url = $_SESSION["arr"]["url"];
    }
    if(isset($_SESSION["arr"]["first_name"])){
        $fname = $_SESSION["arr"]["first_name"];
    }
    if(isset($_SESSION["arr"]["last_name"])){
        $lname = $_SESSION["arr"]["last_name"];
    }
    if(isset($_SESSION["arr"]["semester"])){
        $semester = $_SESSION["arr"]["semester"];
    }
    if(isset($_SESSION["arr"]["course_year"]))
    {
        $year = $_SESSION["arr"]["course_year"];
    }
    if(isset($_SESSION["arr"]["course_prefix"]))
    {
        $prefix = $_SESSION["arr"]["course_prefix"];
    }
    if(isset($_SESSION["arr"]["course_number"]))
    {
        $number = $_SESSION["arr"]["course_number"]; 
    }
    if(isset($_SESSION["arr"]["course_section"]))
    {
        $section = $_SESSION["arr"]["course_section"];
    }
    if(isset($_SESSION["arr"]["course_name"])){
        $name = $_SESSION["arr"]["course_name"]; //optional
    }
    if(isset($_SESSION["arr"]["room"])){
        $room = $_SESSION["arr"]["room"]; //optional
    }
    if(isset($_SESSION["arr"]["days"])){
        $days = $_SESSION["arr"]["days"];
    }
    if(isset($_SESSION["arr"]["time1"])){
        $time1 = $_SESSION["arr"]["time1"];
    }
    if(isset($_SESSION["arr"]["credit_hours"])){
        $hours = $_SESSION["arr"]["credit_hours"];
    }
    if(isset($_SESSION["arr"]["instructor_first_name"])){
        $ifname = $_SESSION["arr"]["instructor_first_name"];
    }
    if(isset($_SESSION["arr"]["instructor_last_name"])){
        $ilname = $_SESSION["arr"]["instructor_last_name"];
    }
    if(isset($_SESSION["arr"]["enrollment_cap"])){
        $cap = $_SESSION["arr"]["enrollment_cap"];
    }
    if(isset($_SESSION["arr"]["major"])){
        $major = $_SESSION["arr"]["major"];
    }
    if(isset($_SESSION["arr"]["email"])){
        $email = $_SESSION["arr"]["email"];
    }
    //did I forget any??

    echo $email;
    echo $major;


////////////// here is database stuff that i havenr really figured out yet ///////////


    //connect to database
    //remote

    // $host = "127.0.0.1";
    // $dbUsername = "hrtt2713";
    // $dbPassword = "hrtt2713";
    // $dbname = "hrtt2713";
    // $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);

    //local
    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "330";
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);

    //2, 3, 
    //k300

    //handle connection errors
    if(mysqli_connect_error()){
        die('Connect Error('.mysqli_connect_error().')'.mysqli_connect_error());
    }
    else{
        echo "<br><br> connection successful, ";
        //insert stuff into table
        //enroll studen inserts into student table
        if($url == "http://localhost:4000/enroll_student.php"){
            echo "came from $url";
            $sql = "INSERT INTO student (fname, lname, year, major, email) VALUES ('$fname', '$lname', '$year','$major', '$email');";
            mysqli_query($conn, $sql);
        }
        
        //add instructor inserts into instructor table
        else if($url == "http://localhost:4000/add_instructor.php"){
            echo "came from $url";
        }

        //add course inserts into course table
        else if($url == "http://localhost:4000/add_course.php"){
            echo "came from $url";
            $sql = "INSERT INTO course (semester, year, prefix, number, section, name, room, days, hours, fname, lname, cap) VALUES ('$semester', '$year', '$prefix', '$number', '$section', '$name', '$room', '$days', '$hours', '$fname', '$lname', '$cap');";
            mysqli_query($conn, $sql);
        }
        //register for course inserts into registration table and relates the fk studentID and fk courseID to the pk regID
        if($url == "http://localhost:4000/register_for_course.php"){
            echo "came from $url";
            $sql = "INSERT INTO reg (studentID, courseID) SELECT student.id, course.id FROM student, course where student.fname = $fname and student.lname = $lname and course.year = $year and course.prefix = $prefix and course.number = $number and course.section = $section);";
            mysqli_query($conn, $sql);
        }


        //drop course 
        if($url == "http://localhost:4000/drop_a_course.php"){
            echo "came from $url";
            
        }
        //

        //print everything from the table to see if it worked
        echo "<br>here is a select * form the student table<br>";
        $sql = "SELECT * FROM registration;";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);

        if($resultCheck > 0){
            while ($row = mysqli_fetch_assoc($result)){
                echo print_r($row) . "<br>";
            }
        }



        // $SELECT = "SELECT fmame, lname FROM 'register_for_course' where fname = ? limit 1";
        // $INSERT = "INSERT INTO reigister_for_course (fname, lname) values(?, ?)" ;

        // $stmt = $conn->prepare($SELECT);
        // $stmt->bind_param("s", $_);
        // $stmt->execute();
        // $stmt->bind_resul
    }
?></table>
</body>
</html>
