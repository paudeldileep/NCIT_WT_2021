<?php

    //table for storing user file upload data
    require_once('../connect.php');  #connect.php file is required to establish connection to mysql server
    $db = mysqli_select_db($connection, 'it2021');
    if($db){
        $query = "CREATE TABLE userfiles(userid VARCHAR(25) PRIMARY KEY, filename VARCHAR(300) NOT NULL, filetype VARCHAR(100) NOT NULL, filesize VARCHAR(100) NOT NULL, filetime DATETIME)";
        $result = mysqli_query($connection, $query);
        if($result){
            echo "Table created successfully";
        }else{
            echo "Error creating table: " . mysqli_error($connection);
        }
    }
