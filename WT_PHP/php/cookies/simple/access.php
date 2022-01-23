<?php

if (isset($_COOKIE["username"])) {
    echo "Welcome " . $_COOKIE["username"];
}

?>

<a href="delete.php">Delete cookie</a>