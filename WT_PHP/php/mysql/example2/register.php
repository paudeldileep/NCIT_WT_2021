<html>

<head>
    <title>Register</title>
    <style>
        input {
            margin-bottom: 10px;
        }
    </style>

</head>

<body>
    <h3>Sign Up</h3>
    <!-- sign up form with name,email,password,photo,dob,address     -->
    <form action="process_register.php" method="post">
        <label>Name:</label>
        <input type="text" name="name" required>
        <br>
        <label>Email:</label>
        <input type="email" name="email" required>
        <br>
        <label>Password:</label>
        <input type="password" name="password" required>
        <br>
        <label>DOB</label>
        <input type="date" name="dob">
        <br>
        <label>Address:</label>
        <input type="text" name="address">
        <br>
        <label>Photo:</label>
        <input type="file" name="photo">
        <br>
        <input type="submit" name="submit" value="Sign Up">
    </form>
</body>

</html>