<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if (isset($_FILES['myfile'])) {
        //print_r($_FILES['myfile']);
        $filename = $_FILES['myfile']['name'];
        $filetype = $_FILES['myfile']['type'];
        $filesize = $_FILES['myfile']['size'];
        $file_temp_location = $_FILES['myfile']['tmp_name'];

        //define target location/directory
        $target_location = "images/" . $filename;

        //check supported file extensions
        $supported_extensions = array('image/jpg', 'image/jpeg', 'image/png', 'image/gif');

        if (in_array($filetype, $supported_extensions)) {
            //move uploaded mile to target location
            if (move_uploaded_file($file_temp_location, $target_location)) {
                echo "File uploaded successfully";

                //print file details
                echo "<br>";
                echo "File name: " . $filename;
                echo "<br>";
                echo "File type: " . $filetype;
                echo "<br>";
                echo "File size: " . $filesize;
                echo "<br>";
                echo "File temperory location: " . $file_temp_location;
                echo "<br>";
                echo "File final location: " . $target_location;
                echo "<br>";
                echo "<img src='$target_location' width='200' height='200'>";
            } else {
                echo "Error uploading file";
            }
        } else {
            echo "File type not supported";
        }
    } else {
        echo "No file selected,Please select a file";
    }
}

?>

<html>

<head>
    <title>Upload file</title>
</head>

<body>
    <center>
        <h1>Upload file</h1>
        <form action="" method="post" enctype="multipart/form-data">
            <input type="file" name="myfile" id="file">
            <input type="submit" name="submit" value="Upload">
        </form>
    </center>
</body>

</html>