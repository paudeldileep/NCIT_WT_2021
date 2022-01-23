<?php
//create cookies based on user input
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['name'])) {
        setcookie('name', $_POST['name'], time() + 3600);
    }
    if (isset($_POST['bgcolor'])) {
        setcookie('bgcolor', $_POST['bgcolor'], time() + 3600);
    }
    if (isset($_POST['color'])) {
        setcookie('color', $_POST['color'], time() + 3600);
    }

    //redirect to home page
    header('location:home.php');
} else {
    header('location:index.php');
}
