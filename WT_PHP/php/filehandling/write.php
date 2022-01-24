<?php
//filename
$filename = "files/users.txt";

//open file
$file = fopen($filename, "w") or die("Unable to open file!");

//string to be written to file
$txt = "Name:Reetesh Giri\n";

//write to file
$bytes_written = fwrite($file, $txt);

if ($bytes_written > 0) {
    echo "Successfully written $bytes_written bytes of data to file";
}
