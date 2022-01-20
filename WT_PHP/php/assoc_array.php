<?php
//associative array
//create an array using array()
$weather=array("sun"=>"hot","mon"=>"cold","tue"=>"cool","wed"=>"mild","thu"=>"hot","fri"=>"hot","sat"=>"hot");

//individually access elements
//echo $weather["sun"];

//sequential access
//#1. foreach loop
echo "<br>element access using foreach loop<br>";

foreach($weather as $day => $temp){
    echo "the weather on $day is $temp<br>";
}

#2. while each loop
// echo "<br>element access using while each loop<br>";
// while($w=each($weather)){
//     $day=$w["key"];
//     $temp=$w["value"];
//     echo "the weather on $day is $temp<br>";
// }

//seperate key and values

$days=array_keys($weather);
$temps=array_values($weather);

//print array using print_r
echo "<br>print array using print_r<br>";
print_r($weather);
echo "<br>";
print_r($days);
echo "<br>";
print_r($temps);


//same in indexed array
// $weather= array("hot","cold","cool","mild","hot","hot","hot");

?>