<?php
require "db.php";

if(isset($_POST['login'])){
    $email = $_POST['email'];
    $pass = md5($_POST['password']);

    $result = mysqli_query($conn, "SELECT * FROM users WHERE email = '$email'");
    // print_r($result);
    $row = mysqli_fetch_assoc($result);
    if(mysqli_num_rows($result) > 0){

       

        if($pass == $row["password"]){
            $_SESSION["login"] = true;
            $_SESSION["id"] = $row["id"];
            // $_SESSION["users"] = $row;

            header("Location: welcome.php");
        }else{
            echo "Wrong password!";
        }
    }else{
        echo "User not found!";
    }
}

?>




<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>
    <form action="" method="post" autocomplete="off">
        <label for="email">Email</label>
        <input type="email" name="email" placeholder="Enter your Email" required><br>
        <label for="pass">Password</label>
        <input type="password" name="password" placeholder="Enter your Password" required><br>
        <button type="submit" name="login">Login</button>
     </form>
     <br>
     <a href="register.php">Register</a>
</body>
</html>