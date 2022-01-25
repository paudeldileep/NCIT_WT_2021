<?php
//create a table named student
//step 1: make connection to mysql server
require_once('../connect.php');  #connect.php file is required to establish connection to mysql server

//step 2: create database / select database

$db = mysqli_select_db($connection, 'it2021');

//step 3: create table
if ($db) {
    //query to create table
    $query = "CREATE TABLE students(rollno INT(6) AUTO_INCREMENT PRIMARY KEY, name TEXT(100), email VARCHAR(100))";

    //execute the query
    $result = mysqli_query($connection, $query);
    if ($result) {
        echo "Table created successfully";
    } else {
        echo "Error creating table: " . mysqli_error($connection);
    }
} else {
    echo "Error Accessing database: " . mysqli_error($connection);
}
