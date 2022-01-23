<?php
session_start();

//check session variable named name
if (isset($_SESSION['name'])) {
    echo '<p>Welcome, ' . $_SESSION['name'] . '</p>';
    echo '<p><a href="delete.php">Logout</a></p>';
} else {
    echo '<p>You are not logged in.</p>';
    echo '<p><a href="create.php">Log in</a></p>';
}
