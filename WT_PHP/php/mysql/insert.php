<?php
//insert data to database table
//step 1: make connection to mysql server
require_once('connect.php');  #connect.php file is required to establish connection to mysql server

//step 2: create database / select database
$db = mysqli_select_db($connection, 'it2021');

//step 3: insert values to table if database is selected
if ($db) {
    //query to insert data
    $query = "INSERT INTO students(name,email) VALUES('Alisha Khatri','alisha@ncit.edu.np')";
    //execute the query
    $result = mysqli_query($connection, $query);
    if ($result) {
        echo "Data inserted successfully";
    } else {
        echo "Error inserting data: " . mysqli_error($connection);
    }
} else {
    echo "Error Accessing database: " . mysqli_error($connection);
}
