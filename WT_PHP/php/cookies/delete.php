<?php

    if(isset($_COOKIE['name'])) {
        setcookie('name', '', time() - 3600);
    } 
    if(isset($_COOKIE['color'])) {
        setcookie('color', '', time() - 3600);
    }
    if(isset($_COOKIE['bgcolor'])) {
        setcookie('bgcolor', '', time() - 3600);
    }

    header('Location: index.php');
