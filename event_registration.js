//this file handles registration of all events for all inputs
//if a field exists, then it will attach the appropriate event

//common fields
//name validation
if(document.getElementById("first_name")){
	document.getElementById("first_name").onchange=name_check;
}
if(document.getElementById("last_name")){
	document.getElementById("last_name").onchange=name_check;
}

//email validation
if(document.getElementById("email")){
	document.getElementById("email").onchange=email_check;
}

//student specific fields
if(document.getElementById("major")){
	document.getElementById("major").onchange=major_check;
}

//instructor specific fields
if (document.getElementById("department")){
    document.getElementById("department").onchange=department_check;
}


//course specific fields
if(document.getElementById("course_prefix")){
	document.getElementById("course_prefix").onchange=course_prefix_check;
}
if(document.getElementById("course_number")){
	document.getElementById("course_number").onchange=course_number_check;
}
if(document.getElementById("course_section")){
	document.getElementById("course_section").onchange=course_section_check;
}
if(document.getElementById("room")){
	document.getElementById("room").onchange=room_check;
}
if(document.getElementById("credit_hours")){
	document.getElementById("credit_hours").onchange=credit_hours_check;
}
if(document.getElementById("enrollment_cap")){
	document.getElementById("enrollment_cap").onchange=enrollment_cap_check;
}
if(document.getElementById("days")){
	document.getElementById("days").onchange=makeInvisible;
}

//form submission event
if(document.getElementsByTagName("form")){
	var form=document.getElementsByTagName("form")[0].onsubmit=display_form;
}