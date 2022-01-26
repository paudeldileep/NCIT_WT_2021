<?php
    session_start();
    if(isset($_SESSION['userid'])){
        //destroy session
        session_destroy();
        //redirect to login page
        header('Location: login.php');
    }
    else{
        echo "You are already logged out";
    }
