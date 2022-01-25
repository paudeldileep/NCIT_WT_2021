<?php
//create a table named student
//step 1: make connection to mysql server
require_once('../connect.php');  #connect.php file is required to establish connection to mysql server

//step 2: create database / select database

$db = mysqli_select_db($connection, 'it2021');

//step 3: create table
if ($db) {
    //query to create table
    $query = "CREATE TABLE users(userid VARCHAR(25) PRIMARY KEY, name TEXT(100) NOT NULL, email VARCHAR(100) NOT NULL, password VARCHAR(500) NOT NULL,photo VARCHAR(200),dob DATE,isadmin Boolean,address VARCHAR(200),registrationtime DATETIME)";

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
