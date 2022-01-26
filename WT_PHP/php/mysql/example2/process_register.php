<?php

if (isset($_POST['submit'])) {

    if ($_POST['name'] == '' || $_POST['email'] == '' || $_POST['password'] == '') {
        echo "Please fill all the fields"; //or redirect with error message
    } else {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        //encrypt password
        $password = md5($password);
        $dob = $_POST['dob'];
        $address = $_POST['address'];

        $photo = '';
        //creating a random user id
        $userid = uniqid('user_');

        //get registration time
        $registration_time = date('Y-m-d H:i:s');

        if (isset($_FILES['photo'])) {
            //print_r($_FILES['photo']);
            $filename = $_FILES['photo']['name'];
            $filetype = $_FILES['photo']['type'];
            $file_temp_location = $_FILES['photo']['tmp_name'];

            $photo = $userid . "_" . $filename;
            //define target location/directory
            $target_location = "images/" . $photo;

            //check supported file extensions
            $supported_extensions = array('image/jpg', 'image/jpeg', 'image/png', 'image/gif');

            if (in_array($filetype, $supported_extensions)) {
                //move uploaded mile to target location
                move_uploaded_file($file_temp_location, $target_location);
            } else {
                echo "File type not supported";
            }
        }

        //make database connection and insert into table
        require_once('../connect.php');

        $db = mysqli_select_db($connection, 'it2021');
        if ($db) {

            $query = "INSERT INTO users (userid,name,email,password,photo,dob,isadmin,address,registrationtime) VALUES ('$userid','$name','$email','$password','$photo','$dob',0,'$address','$registration_time')";
            $result = mysqli_query($connection, $query);
            if ($result) {
                echo "Registration Successful";
            } else {
                echo "Error: " . mysqli_error($connection);
            }
        } else {
        }
    }
} else {
    echo "Please fill all the fields";
    header('Location: register.php');
}
