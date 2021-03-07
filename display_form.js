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