
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
//this function is meant to handle the submit button alert output for every page
function submit_output(){
    //uses the header to determine which document is being submitted
    var title = document.getElementsByTagName("h1");
    var time;

    switch (title[0].innerHTML){
        case "Add Boring Course":
            //the dropdown whose value needs to be fed into the alert is dependent on what day the class meets
            if(document.getElementById("days").value=="Monday, Wednesday, Friday"){
                time = document.getElementById("Monday_Wednesday_Friday").value;

            }else if(document.getElementById("days").value=="Tuesday, Thursday"){
                time = document.getElementById("Tuesday_Thursday").value;

            }else{
                time = document.getElementById("any_single_day").value;
            }
            alert("Course: "+document.getElementById("course_prefix").value+" "+document.getElementById("course_number").value
            +"-"+document.getElementById("course_section").value+" "+document.getElementById("course_name").value+"\nRoom: "
            +document.getElementById("room").value+"\nDay and Time: "+document.getElementById("days").value+" "+time+"\nCredit Hours: "
            +document.getElementById("credit_hours").value+"\nInstructor Name: "+document.getElementById("instructor_first_name").value+" "
            +document.getElementById("instructor_last_name").value+"\nEnrollment Cap: "+document.getElementById("enrollment_cap"));
            break;
        //not finished
        default:
            alert("what");
    }
}
