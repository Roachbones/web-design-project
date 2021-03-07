
function name_check(){
    var val=event.target.value;

    if(val.search(/[a-z ,.'-]+/)==-1){
        alert("must include a name");
        event.target.value="";
    }
}

function email_check(){
    var val=event.target.value;
    
    if(val.search(/^[A-Z]{3}\d{3}@marietta.edu$/)==-1){
        alert("Please enter a valid email address\nEx:abc123@marietta.edu");
        event.target.value="";
    }
}

function major_check(){
    var val=event.target.value;
    
    if(val.search(/^([A-Za-z] ?)+$/)==-1){
        alert("");
        event.target.value="";
    }
}

function department_check(){
    var val=event.target.value;
    
    if(val.search(/^([A-Za-z] ?)+$/)==-1){
        alert("");
        event.target.value="";
    }
}

function course_prefix_check(){
    var val=event.target.value;
    
    if(val.search(/^[A-Z]{3,4}$/)==-1){
        alert("");
        event.target.value="";
    }
}

function course_number_check(){
    var val=event.target.value;
    
    if(val.search(/^[0-3]\d{2}$/)==-1){
        alert("");
        event.target.value="";
    }
}

function course_section_check(){
    var val=event.target.value;
    
    if(val.search(/^\d{2}$/i)==-1){
        alert("");
        event.target.value="";
    }
}

function room_check(){
    var val=event.target.value;

    if(val.search(/^$/i)==-1){
        alert("");
        event.target.value="";
    }
}

function credit_hours_check(){
    var val=event.target.value;

    if(val.search(/^[0-4]$/i)==-1){
        alert("");
        event.target.value="";
    }
}

function enrollment_cap_check(){
    var val=event.target.value;
    
    if(val.search(/^[1-9][0-9]$/i)==-1){
        alert("");
        event.target.value="";
    }
}