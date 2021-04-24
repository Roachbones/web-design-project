/*
field validation functions
these functions check the element that triggered to be of a valid format, if not, it clears the field and alerts the user
*/

//checks for a valid first name, one of 1 or more words consisting of letters, and apostrophes separated by spaces
function first_name_check(){
    var el=document.getElementById("first_name");

    if(el.value.search(/^([A-Za-z'] ?)+$/)==-1){
        alert("Must include a valid name\nEx: Matt, Oney, John");
        el.value="";
    }
}

//checks for a valid last name, one of 1 or more words consisting of letters, and apostrophes separated by spaces
function last_name_check(){
    var el=document.getElementById("last_name");

    if(el.value.search(/^([A-Za-z'] ?)+$/)==-1){
        alert("Must include a valid name\nEx: Willamson, O'Brien, Doe");
        el.value="";
    }
}

//checks for a valid email, one that is 3 letters, 3 numbers, @marietta.edu
function email_check(){
    var el=document.getElementById("email");
    
    if(el.value.search(/^[A-Za-z]{3}\d{3}@marietta.edu$/)==-1){
        alert("Please enter a valid email address\nEx:abc123@marietta.edu");
        el.value="";
    }
}

//checks for valid major, one that is one or more words consisting of letters that are seperated by spaces
function major_check(){
    var el=document.getElementById("major");
    
    if(el.value.search(/^([A-Za-z] ?)+$/)==-1){
        alert("Major must only contain letters and spaces");
        el.value="";
    }
}

//checks for valid department, one that is one or more words consisting of letters that are seperated by spaces
function department_check(){
    var el=document.getElementById("department");
    
    if(el.value.search(/^([A-Za-z] ?)+$/)==-1){
        alert("Department name must only contain letters and spaces");
        el.value="";
    }
}

//checks for a valid course prefix, one that is 3 or 4 capital letters
function course_year_check(){
    var el=document.getElementById("course_year");

    if(el.value.search(/^\d{4}$/)==-1 || el.value <= 2020){
        alert("Course year must be a four digit year after 2020");
        el.value="";
    }
}


function course_prefix_check(){
    var el=document.getElementById("course_prefix");
    
    if(el.value.search(/^[A-Z]{3,4}$/)==-1){
        alert("Course prefix must be either 3 or 4 capital letters\nEx: MATH, ECON, ART, FIN");
        el.value="";
    }
}

//checks for a valid course number, any three digit number <= 499
function course_number_check(){
    var el=document.getElementById("course_number");
    
    if(el.value.search(/^\d{3}$/)==-1 || el.value > 500){
        alert("Course Number must be 3 digits and less than 500");
        el.value="";
    }
}

//checks for a valid course section, which is any 2 digit number between 00 and 99
function course_section_check(){
    var el=document.getElementById("course_section");
    
    if(el.value.search(/^\d{2}$/)==-1){
        alert("Section must be exactly 2 digits");
        el.value="";
    }
}

//checks for a valid room
function room_check(){
    var el=document.getElementById("room");

    if(val != "" && el.value.search(/^[A-Za-z]+ \d{2,3}[A-Z-a-z]?$/)==-1){
        alert("Room must be of a valid format\nEx:Selby 239, Thomas 25F, Library 21");
        el.value="";
    }
}

//must be a valid number of credit hours, 0-4
function credit_hours_check(){
    var el=document.getElementById("credit_hours");

    if(el.value.search(/^[0-4]$/)==-1){
        alert("Credit hours must be a number between 0 and 4");
        el.value="";
    }
}

//must be a valid number of students, between 01 and 99
function enrollment_cap_check(){
    var el=document.getElementById("enrollment_cap");
    
    if(el.value.search(/^[0-9][0-9]$/)==-1){
        alert("Enrollment cap must be a number between 01-99");
        el.value="";
    }
}

/*
element visibility handler
this function uses css classes to hide or unhide elements based on conditions
currently it is only used to hide select boxes on the add course page, so that ony appropriate times are displayed for currently selected day
*/

function handle_visibility(){
    var day=event.target.value;
    
    if (day=="Monday, Wednesday, Friday"){
        document.getElementById("Tuesday_Thursday").className="hidden";
        document.getElementById("tth_label").className="hidden";
        document.getElementById("any_single_day").className="hidden";
        document.getElementById("singleday_label").className="hidden";
        document.getElementById("Monday_Wednesday_Friday").className="";
        document.getElementById("mwf_label").className="";
    }else if(day=="Tuesday, Thursday"){
        document.getElementById("Tuesday_Thursday").className="";
        document.getElementById("tth_label").className="";
        document.getElementById("Monday_Wednesday_Friday").className="hidden";
        document.getElementById("mwf_label").className="hidden";
        document.getElementById("any_single_day").className="hidden";
        document.getElementById("singleday_label").className="hidden";
    }else if(day=="Monday" || day=="Tuesday" || day=="Wednesday" || day=="Thursday"){
        document.getElementById("any_single_day").className="";
        document.getElementById("singleday_label").className="";
        document.getElementById("Monday_Wednesday_Friday").className="hidden";
        document.getElementById("mwf_label").className="hidden";
        document.getElementById("Tuesday_Thursday").className="hidden";
        document.getElementById("tth_label").className="hidden";
    }
}