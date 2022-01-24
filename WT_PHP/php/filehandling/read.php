<?php

$filename = "files/users.txt";

$file = fopen($filename, "r") or die("Unable to open file!");

// $txt = fread($file, filesize($filename));

// echo $txt;
//using file

$txt = file($filename);
foreach ($txt as $line) {
    echo $line;
    echo "<br>";
}
fclose($file);
