<?php
    //delete a table or database
    //step 1: make connection to mysql server
    require_once('../connect.php');  #connect.php file is required to establish connection to mysql server
    //step 2: create database / select database
    $db = mysqli_select_db($connection, 'it2021');
    //step 3: delete table if database is selected
    if ($db) {
        //query to delete table
        $query = "DROP TABLE test";
        //execute the query
        $result = mysqli_query($connection, $query);
        //check if query is executed successfully
        if ($result) {
            echo "Table deleted successfully";
        } else {
            echo "Error deleting table: " . mysqli_error($connection);
        }
    } else {
        echo "Error connecting to database: " . mysqli_error($connection);
    }
