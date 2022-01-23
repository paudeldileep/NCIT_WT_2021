<?php
//initialize the session
session_start();

//set session variables
$_SESSION['name'] ="Binayak";


//redirect to home page
header('location:access.php');
