<?php

if (isset($_COOKIE["username"])) {
    setcookie("username", "Binayak", time() - 3600);
} else {
    echo "Cookie not found";
}
