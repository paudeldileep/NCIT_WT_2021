<?php

    $filename="files/users.txt";
    $file = fopen($filename, "a") or die("Unable to open file!");

    $txt = "Name:Yubraj Adhikari\n";

    $bytes_written = fwrite($file, $txt);

    if ($bytes_written > 0) {
        echo "Successfully written $bytes_written bytes of data to file";
    }
