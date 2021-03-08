//this function returns an array of all non-hidden, non-submit button input/select elements for a given document
//it is used to generate the output for the display_form() function
function get_els(){
    var els=Array();

    //getting all input textboxes
    for(i=0;i<document.getElementsByTagName("input").length;i++){
        els.push(document.getElementsByTagName("input")[i]);
    }

    //getting all select dropdown
    for(i=0;i<document.getElementsByTagName("select").length;i++){
        els.push(document.getElementsByTagName("select")[i]);
    }

    //removing submit buttons or empty optional fields from array
    for(i=0;i<els.length;i++){
        if (els[i].type=="submit" || els[i].value==""){
            els.splice(i,1);
        }
    }

    //removing hidden elements from array
    els=els.filter(no_hiddens)
    
    console.log(els);
    return els
}

//this function acts as a filter for the element array in get_els()
//this ensures that no hidden elements are in the final array
function no_hiddens(el){
    if(el.className=="hidden"){
        return false
    }
    else{
        return true
    }
}

//this function calls get_els() to get a list of non-hidden, non-submit button input/select elements for a given page
//it then iterates through that array and makes a string that contains all the form's values
//this string is then displayed in an alert box
function display_form(){
    var els=get_els();
    var output=String();

    //iterating through each element and appending it's value to an output string
    for(i=0;i<els.length;i++){
        output+=els[i].name.replace(/_/g," ")+": "+els[i].value+"\n";
    }

    //alerting user of form contents
    alert(output);

    //returning false to avoid actually submitting the form
    return false;
}