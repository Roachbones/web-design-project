//this file handles registration of all events for all inputs

//name validation
document.getElementById("first_name").onchange=name_check;
document.getElementById("last_name").onchange=name_check;

//major validation
document.getElementById("major").onchange=major_check;

//email validation
document.getElementById("email").onchange=email_check;

//department validation
document.getElementById("department").onchange=department_check;

//year validation
document.getElementById("year").onchange=year_check;

//course prefix validation
document.getElementById("course_prefix").onchange=course_prefix_check;

//course number validation
document.getElementById("course_number").onchange=course_number_check;

//course section validation
document.getElementById("course_section").onchange=course_section_check;

//room validation
document.getElementById("room").onchange=room_check;

//credit hours validation
document.getElementById("credit_hours").onchange=credit_hours_check;

//enrollment cap validation
document.getElementById("enrollment_cap").onchange=enrollment_cap_check;