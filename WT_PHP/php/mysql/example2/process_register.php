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

        // $photo = $_FILES['photo']['name'];
        // $photo_tmp = $_FILES['photo']['tmp_name'];
        // $photo_size = $_FILES['photo']['size'];
        // $photo_error = $_FILES['photo']['error'];
        // $photo_type = $_FILES['photo']['type'];
        // $photo_ext = explode('.',$photo);
        // $photo_actual_ext = strtolower(end($photo_ext));
        // $allowed = array('jpg','jpeg','png');
        // if(in_array($photo_actual_ext,$allowed)){
        //     if($photo_error === 0){
        //         if($photo_size < 1000000){
        //             $photo_new_name = uniqid('',true).".".$photo_actual_ext;
        //             $photo_destination = '../images/'.$photo_new_name;
        //             move_uploaded_file($photo_tmp,$photo_destination);
        //         }else{
        //             echo "Your file is too big";
        //         }
        //     }else{
        //         echo "There was an error uploading your file";
        //     }
        // }else{
        //     echo "You cannot upload files of this type";
        // }

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
