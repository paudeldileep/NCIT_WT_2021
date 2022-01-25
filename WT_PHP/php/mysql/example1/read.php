<?php
//read from database table students
//step 1: make connection to mysql server
require_once('../connect.php');  #connect.php file is required to establish connection to mysql server
//step 2: create database / select database
$db = mysqli_select_db($connection, 'it2021');
//step 3: read data from table if database is selected
if ($db) {
    //query to read/select data from table
    // $query = "SELECT name,email FROM students WHERE name='Yubraj Adhikari'";
    $query = "SELECT * FROM students";
    //execute the query
    $result = mysqli_query($connection, $query);
    //check if query is executed successfully
    if ($result) {
        //check if there is any data in the table
        if (mysqli_num_rows($result) > 0) {
            //loop through the data
            while ($row = mysqli_fetch_assoc($result)) {
                //display data
                echo  $row['name'] . " " . $row['email'] . "<br>";
            }
        } else {
            echo "No data found";
        }
    } else {
        echo "Error Accessing database: " . mysqli_error($connection);
    }
} else {
    echo "Error connecting to database: " . mysqli_error($connection);
}
