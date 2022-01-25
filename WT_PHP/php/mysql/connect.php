<?php
//code to establish connection to mysql database

//parameters
$servername = "localhost";
$username = "root";
$userpassword = "";

//create connection
$connection = mysqli_connect($servername, $username, $userpassword);

//check connection
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
} else {
    echo "Connected successfully <br>";
}
