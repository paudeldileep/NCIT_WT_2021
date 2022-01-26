<?php
session_start();
if (isset($_SESSION['userid'])) {

    //fetch user details based on id
    $userid = $_SESSION['userid'];
    $conn = mysqli_connect('localhost', 'root', '');
    $db = mysqli_select_db($conn, 'it2021');
    $query = "SELECT * FROM users WHERE userid='$userid'";
    $result = mysqli_query($conn, $query);
    $userdata = mysqli_fetch_assoc($result);

    //display user details
?>
    <html>

    <head>
        <title>Home</title>
    </head>

    <body>
        <div>
            <h1>Welcome <?php echo $userdata['name'] ?></h1>
            <p><img src="images/<?php echo $userdata['photo'] ?>" alt="profilepic" height="200" width="200" /></p>
            <p>DOB: <?php echo $userdata['dob'] ?></p>
            <p>You are logged in as <?php echo $userdata['email']; ?></p>
            <p><a href="logout.php">Logout</a></p>
        </div>

    </body>

    </html>




<?php
} else {
    echo "You are not logged in";
}
