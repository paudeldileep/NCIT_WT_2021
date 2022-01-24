
<?php

//filename
$filename = "files/names.txt";

//check whether file exists or not then delete
if (file_exists($filename)) {
    unlink($filename);
    echo "File deleted successfully";
} else {
    echo "File does not exist";
}


?>