//this file handles registration of all events for all inputs

//common fields
//name validation
document.getElementById("first_name").onchange=name_check;
document.getElementById("last_name").onchange=name_check;

//email validation
document.getElementById("email").onchange=email_check;

//student specific fields
document.getElementById("major").onchange=major_check;

//instructor specific fields
document.getElementById("department").onchange=department_check;

//course specific fields
document.getElementById("course_prefix").onchange=course_prefix_check;
document.getElementById("course_number").onchange=course_number_check;
document.getElementById("course_section").onchange=course_section_check;
document.getElementById("room").onchange=room_check;
document.getElementById("credit_hours").onchange=credit_hours_check;
document.getElementById("enrollment_cap").onchange=enrollment_cap_check;

//submit button onclick event
document.getElementById("submit").onclick=submit_output;