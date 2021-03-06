//was too lazy to figure out how to distinguish first and last name fields for now
function name_check(){
    
}

function email_check(){
        if(event.target.value.search(/^[A-Z]{3}\d{3}@marietta.edu$/i)>-1){
            alert("Please enter a valid email adress\nEx:abc123@marietta.edu");
            event.target.value="";
        }
}

function major_check(){

}

function department_check(){

}

function course_prefix_check(){

}

function course_number_check(){

}

function course_section_check(){
    
}

function room_check(){

}

function credit_hours_check(){

}

function enrollment_cap_check(){

}