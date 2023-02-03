<?php
require "db.php";


if(isset($_POST["register"]))
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
  
