<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['useremail']) && isset($_POST['userpassword'])) {
        $useremail = $_POST['useremail'];
        $userpassword = $_POST['userpassword'];

        //md5
        $userpassword = md5($userpassword);

        //make connection to database
        $conn = mysqli_connect('localhost', 'root', '');
        if ($conn) {
            //select db
            $db = mysqli_select_db($conn, 'it2021');
            if ($db) {
                //query to extract specific rows based on useremail and password
                $query = "SELECT * FROM users WHERE email='$useremail' AND password='$userpassword'";
                $result = mysqli_query($conn, $query);
                if ($result) {
                    //check if there is a row

                    if (mysqli_num_rows($result) > 0) {
                        echo "successfully logged in";
                        //get user data
                        $userdata = mysqli_fetch_assoc($result);

                        $userid = $userdata['userid'];

                        //set session variables
                        $_SESSION['userid'] = $userid;

                        //redirect to home page
                        header('Location: home.php');
                        //
                    } else {
                        echo "Invalid email or password";
                    }
                } else {
                    echo "Error: " . mysqli_error($conn);
                }
            } else {
                echo "Error: " . mysqli_error($conn);
            }
        } else {
            echo "Connection failed. Try again later.";
        }
    } else {
        echo '<p>Please enter both an email address and a password.</p>';
    }
}
