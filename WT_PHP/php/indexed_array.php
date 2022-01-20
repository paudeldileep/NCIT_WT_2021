<?php

//create an array using array()
$fruits= array("apple", "banana", "orange","mango");

//accessing individual elements
echo $fruits[0];

//sequential access
#1. for loop
echo "<br>element access using for loop<br>";
for($i=0; $i<count($fruits); $i++)
{
    echo $fruits[$i];
    echo "<br>";
}

#2. while-next loop
echo "<br>element access using while-next loop<br>";
echo "printing first  element<br>";
$fruit= current($fruits);
echo $fruit;
echo "<br>";
while($fruit=next($fruits))
{
    echo $fruit;
    echo "<br>";
}

#3. foreach loop
echo "<br>element access using foreach loop<br>";
foreach($fruits as $fruit)
{
    echo $fruit;
    echo "<br>";
}


?>