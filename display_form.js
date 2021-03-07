//this function is meant to handle the submit button alert output for every page
function display_form(){
    var els=get_els();
    return false
}

//this function first grabs all the values of inputs and selection boxes in the form
function get_els(){
    var els=Array();

    for(i=0;i<document.getElementsByTagName("input").length;i++){
        els.push(document.getElementsByTagName("input")[i]);
    }

    for(i=0;i<document.getElementsByTagName("select").length;i++){
        els.push(document.getElementsByTagName("select")[i]);
    }

    for(i=0;i<els.length;i++){
        if (els[i].type == "submit"){
            els.splice(i,1);
        }
    }

    console.log(els);
    return els
}