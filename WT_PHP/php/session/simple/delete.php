<?php

session_start();

//delete individual session variables
unset($_SESSION['name']);

//delete whole session
//session_destroy();
