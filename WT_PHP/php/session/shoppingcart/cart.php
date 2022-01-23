<?php
session_start();

if (isset($_SESSION['cart'])) {
    //check if cart is empty or not
    if (empty($_SESSION['cart'])) {
        echo "Your cart is empty";
    } else {
        //display cart in table format
        echo "Your cart items are: <br>";
        echo "<table>";
        echo "<tr>";
        echo "<th>Product</th>";
        echo "<th>Quantity</th>";
        echo "</tr>";
        foreach ($_SESSION['cart'] as $key => $value) {
            echo "<tr>";
            echo "<td>" . $key . "</td>";
            echo "<td>" . $value . "</td>";
            echo "</tr>";
        }
    }
} else {
    echo "No items in cart yet";
    echo "<a href='products.php'>Add items to cart</a>";
}
