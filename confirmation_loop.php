<?php
$arr = $_POST;
// if $_POST has the days dropdown, remove the hidden time dropdowns from the array
if(isset($arr["days"])){
        if ($arr["days"] == "Monday, Wednesday, Friday")
                $arr["time"] = $arr["time1"];
        
        elseif ($arr["days"] == "Tuesday, Thursday")
                $arr["time"] = $arr["time2"];
        
        else
                $arr["time"] = $arr["time3"];

}       

unset($arr["time1"]);
unset($arr["time2"]);
unset($arr["time3"]);
foreach ($arr as $key => $value){
        if(!isset($arr[$key]))
                $arr[$key] = "N/A";
        str_replace("_", " ", $key);
        echo "<tr><td>$key</td>";
        echo "<td>$value</td></tr>";
}
?>