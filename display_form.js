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

    //removing submit buttons from array
    for(i=0;i<els.length;i++){
        if (els[i].type=="submit"){
            els.splice(i,1);
        }
    }

    //removing hidden elements from array
    els=els.filter(no_hiddens)
    
    console.log(els);
    return els
}

function no_hiddens(el){
    if(el.className=="hidden"){
        return false
    }
    else{
        return true
    }
}
//finds required elements and ensures they are filled out
function checkRequired(){
    var output = ""
    ray = get_els();
    for(var i=0; i<ray.length; i++){
        if (ray[i].prop("required")){
            if(ray[i].value==""){
                output+="required field "+ray[i].name+" is not filled out\n";
            }
        }
    }
      if (output==""){
        return true;
      }else{
          alert(output);
          return false;
      }
}

//this function is meant to handle the submit button alert output for every page
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

//this function first grabs all the values of inputs and selection boxes in the form
function submitFunction(){
    if(checkRequired()){
        display_form();
    }
}