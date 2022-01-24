<?php
//creating database : step 1: make connection to mysql server step 2: create database
//step 1: make connection to mysql server
require_once('connect.php');  #connect.php file is required to establish connection to mysql server

//step 2: create database
$query = "CREATE DATABASE IF NOT EXISTS it2021"; //or $query = "CREATE DATABASE it2021";

//execute the query
$db = mysqli_query($connection, $query);

//check if database is created
if ($db) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . mysqli_error($connection);
}
