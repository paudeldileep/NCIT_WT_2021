<?php

$nums=array(2,5,1,3,4,7,8,9,6);

echo "original array:<br>";
print_r($nums);
echo "<br>";
echo "sorted array:<br>";
rsort($nums);  //sorts the array in ascending order for descending order rsort
print_r($nums);
echo "<br>";

//associative array\
$ages=array("Peter"=>"55","Ben"=>"37","Joe"=>"43");

//sort associative array
echo "original array:<br>";
print_r($ages);
echo "<br>";
echo "sorted array:<br>";
ksort($ages);  //sort ascending,according to value(asort) , ksort(acc to key)
print_r($ages);
echo "<br>";

?>