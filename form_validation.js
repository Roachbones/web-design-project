
function name_check(){
    var val=event.target.value;

    if(val.search(/^([A-Za-z\-'] ?)+$/)==-1){
        alert("Must include a valid name\nEx: Matt Willamson, Oney O'Brien, John Doe");
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
        alert("Course prefix must be either 3 or 4 capital letters\nEx: MATH, ECON, ART, FIN");
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

    if(val != "" && val.search(/^[A-Za-z]+ \d{2,3}[A-Z-a-z]?$/)==-1){
        alert("Room must be of a valid format\nEx:Selby 239, Thomas 25F, Library 21");
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
    
    if(val.search(/^[0-9][1-9]$/)==-1){
        alert("Enrollment cap must be a number between 01-99");
        event.target.value="";
    }
}
function makeInvisible(){
    var val=event.target.value;
    if (val=="Monday, Wednesday, Friday"){
        document.getElementById("Tuesday_Thursday").className="hidden";
        document.getElementById("tth_label").className="hidden";
        document.getElementById("any_single_day").className="hidden";
        document.getElementById("singleday_label").className="hidden";
        document.getElementById("Monday_Wednesday_Friday").className="";
        document.getElementById("mwf_label").className="";
    }else if(val=="Tuesday, Thursday"){
        document.getElementById("Tuesday_Thursday").className="";
        document.getElementById("tth_label").className="";
        document.getElementById("Monday_Wednesday_Friday").className="hidden";
        document.getElementById("mwf_label").className="hidden";
        document.getElementById("any_single_day").className="hidden";
        document.getElementById("singleday_label").className="hidden";
    }else if(val=="Monday" || val=="Tuesday" || val=="Wednesday" || val=="Thursday"){
        document.getElementById("any_single_day").className="";
        document.getElementById("singleday_label").className="";
        document.getElementById("Monday_Wednesday_Friday").className="hidden";
        document.getElementById("mwf_label").className="hidden";
        document.getElementById("Tuesday_Thursday").className="hidden";
        document.getElementById("tth_label").className="hidden";
    }
}
    