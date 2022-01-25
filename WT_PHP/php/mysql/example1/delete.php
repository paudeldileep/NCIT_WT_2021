<?php

//delete row from database table
//step 1: make connection to mysql server
require_once('../connect.php');  #connect.php file is required to establish connection to mysql server
//step 2: create database / select database
$db = mysqli_select_db($connection, 'it2021');
//step 3: delete data from table if database is selected
if ($db) {
    //query to delete data from table
    $query = "DELETE FROM students WHERE rollno=1";
    //execute the query
    $result = mysqli_query($connection, $query);
    //check if query is executed successfully
    if ($result) {
        echo "Data deleted successfully";
    } else {
        echo "Error deleting data: " . mysqli_error($connection);
    }
} else {
    echo "Error connecting to database: " . mysqli_error($connection);
}
