<?php
require "db.php";

if (isset($_POST["register"])) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $pass = md5($_POST["password"]);
    $confirm_pass = md5($_POST["confirm_password"]);

    $duplicate = mysqli_query($conn, "SELECT * FROM users WHERE email = '$email'");
    if (mysqli_num_rows($duplicate) > 0) {
        echo "Sorry this Email already exists!";
    } else {
        if ($pass == $confirm_pass) {
            $insert = mysqli_query($conn, "INSERT INTO users (name,email,password) VALUES('$name', '$email', '$pass')");
            if ($insert) {
                echo "Regisration successfull!";
            }
        } else {
            echo "Password does not match! Please try again";
        }
    }

}

?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <h1>Register with us</h1>
     <form action="" method="post" autocomplete="off">
        <label for="name">Name</label>
        <input type="text" name="name" placeholder="Enter your name" required><br>
        <label for="email">Email</label>
        <input type="email" name="email" placeholder="Enter your Email" required><br>
        <label for="pass">Password</label>
        <input type="password" name="password" placeholder="Enter your Password" required><br>
        <label for="confirmpass"> Confirm Password</label>
        <input type="password" name="confirm_password" placeholder="Reenter your Password" required><br>
        <button type="submit" name="register">Register</button>
     </form>
     <br>
     <a href="login.php">Login</a>
</body>
</html>
