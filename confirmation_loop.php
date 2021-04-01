<?php
$arr = $_POST;
// if $_POST has the days dropdown, remove the hidden time dropdowns from the array
if(isset($arr["days"])){
        if ($arr["days"] == "Monday, Wednesday, Friday"){
                unset($arr["time2"]);
                unset($arr["time3"]);
        }
        
        elseif ($arr["days"] == "Tuesday, Thursday"){
                unset($arr["time1"]);
                unset($arr["time3"]);
        }
        else{
                unset($arr["time1"]);
                unset($arr["time2"]);
        }
}       

foreach ($arr as $key => $value){
        if(!isset($arr[$key]))
                $arr[$key] = "N/A";
        str_replace("_", " ", $key);
        echo "<tr><td>$key</td>";
        echo "<td>$value</td></tr>";
}
?>