
function name_check(){
    var val=event.target.value;

    if(val.search(/^[A-Z-a-z]['. \-a-z]*/)==-1){
        alert("Must include a name");
        event.target.value="";
    }
}

function email_check(){
    var val=event.target.value;
    
    if(val.search(/^[A-Za-z]{3}\d{3}@marietta.edu$/)==-1){
        alert("Please enter a valid email address\nEx:abc123@marietta.edu");
        event.target.value="";
    }
}

function major_check(){
    var val=event.target.value;
    
    if(val!="" && val.search(/^([A-Za-z] ?)+$/)==-1){
        alert("Major must only contain letters and spaces");
        event.target.value="";
    }
}

function department_check(){
    var val=event.target.value;
    
    if(val!="" && val.search(/^([A-Za-z] ?)+$/)==-1){
        alert("Department name must only contain letters and spaces");
        event.target.value="";
    }
}

function course_prefix_check(){
    var val=event.target.value;
    
    if(val.search(/^[A-Z]{3,4}$/)==-1){
        alert("Course prefix must be either 3 or 4 capital letters");
        event.target.value="";
    }
}

function course_number_check(){
    var val=event.target.value;
    
    if(val.search(/^[0-4]\d{2}$/)==-1){
        alert("Course Number must be 3 digits and less than 500");
        event.target.value="";
    }
}

function course_section_check(){
    var val=event.target.value;
    
    if(val.search(/^\d{2}$/)==-1){
        alert("Section must be exactly 2 digits");
        event.target.value="";
    }
}

function room_check(){
    var val=event.target.value;

    if(val != "" && val.search(/^[A-Za-z]+ \d{2,3}[A-Z-a-z]?/)==-1){
        alert("Room must be in the format (<Building Name> <Room Number>)");
        event.target.value="";
    }
}

function credit_hours_check(){
    var val=event.target.value;

    if(val.search(/^[0-4]$/)==-1){
        alert("Credit hours must be a number between 0 and 4");
        event.target.value="";
    }
}

function enrollment_cap_check(){
    var val=event.target.value;
    
    if(val.search(/^[0-9]{2}$/)==-1){
        alert("Enrollment cap must be a number with two digits");
        event.target.value="";
    }
}
function makeInvisible(){
    var val=event.target.value;
    if (val=="Monday, Wednesday, Friday"){
        document.getElementById("Tuesday_Thursday").style.display="none";
        document.getElementById("tth_label").style.display="none";
        document.getElementById("any_single_day").style.display="none";
        document.getElementById("singleday_label").style.display="none";
        document.getElementById("Monday_Wednesday_Friday").style.display="inline";
        document.getElementById("mwf_label").style.display="inline";
    }else if(val=="Tuesday, Thursday"){
        document.getElementById("Tuesday_Thursday").style.display="inline";
        document.getElementById("tth_label").style.display="inline";
        document.getElementById("Monday_Wednesday_Friday").style.display="none";
        document.getElementById("mwf_label").style.display="none";
        document.getElementById("any_single_day").style.display="none";
        document.getElementById("singleday_label").style.display="none";
    }else if(val=="Monday" || val=="Tuesday" || val=="Wednesday" || val=="Thursday"){
        document.getElementById("any_single_day").style.display="inline";
        document.getElementById("singleday_label").style.display="inline";
        document.getElementById("Monday_Wednesday_Friday").style.display="none";
        document.getElementById("mwf_label").style.display="none";
        document.getElementById("Tuesday_Thursday").style.display="none";
        document.getElementById("tth_label").style.display="none";
    }
}
    