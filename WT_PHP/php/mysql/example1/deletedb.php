<?php

    //delete database
    //step 1: make connection to mysql server
    require_once('../connect.php');  #connect.php file is required to establish connection to mysql server
    //step 2: create database / select database
    $db = mysqli_select_db($connection, 'it2021_duplicate');
    //step 3: delete database if database is selected
    if ($db) {
        //query to delete database
        $query = "DROP DATABASE it2021_duplicate";
        //execute the query
        $result = mysqli_query($connection, $query);
        //check if query is executed successfully
        if ($result) {
            echo "Database deleted successfully";
        } else {
            echo "Error deleting database: " . mysqli_error($connection);
        }
    } else {
        echo "Error connecting to database: " . mysqli_error($connection);
    }
