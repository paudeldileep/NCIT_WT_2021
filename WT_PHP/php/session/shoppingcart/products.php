<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $_SESSION['cart'] = array();

    foreach ($_POST as $key => $value) {
        if ($value != 0) {
            $_SESSION['cart'][$key] = $value;
        }
    }
    if (!empty($_SESSION['cart'])) {
        header('Location: cart.php');
    } else {
        echo "Your cart is empty";
    }
}

?>

<html>

<head>
    <title>Products</title>
    <style>
        ul {
            padding: 0;
            margin: 0;
            list-style-type: none;
        }

        li {
            margin: 10px 0px;
        }
    </style>
</head>

<body>
    <h1>Products</h1>
    <form action="" method="post">
        <ul>
            <li>
                <label>Mobile</label>
                <input type="number" name="mobile" value="0" min="0" max="10">
            </li>
            <li>
                <label>Laptop</label>
                <input type="number" name="laptop" value="0" min="0" max="10">
            </li>
            <li>
                <label>Tablet</label>
                <input type="number" name="tablet" value="0" min="0" max="10">
            </li>
        </ul>
        <input type="submit" value="Submit">
    </form>
</body>

</html>