<?php
//check for cookies and accesss them
if (isset($_COOKIE['bgcolor'])) {
    $bgcolor = $_COOKIE['bgcolor'];
} else {
    $bgcolor = 'white';
}
if (isset($_COOKIE['color'])) {
    $color = $_COOKIE['color'];
} else {
    $color = 'black';
}
?>
<html>

<head>
    <title>Home</title>
    <style>
        body {
            background-color: <?php echo $bgcolor; ?>;
            color: <?php echo $color; ?>;
        }
    </style>
</head>

<body>
    <h4>Accessing cookies</h4>
    <!-- display welcome message -->
    <?php
    if (isset($_COOKIE['name'])) {
        echo "<h2>Welcome " . $_COOKIE['name'] . "</h2>";
        echo "<a href='delete.php' >Sign Out </a>";
    } else {
        echo "<h2>Welcome Guest!</h2>";
    }

    ?>
</body>

</html>