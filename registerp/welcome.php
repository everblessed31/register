<?php
require "db.php";
  
$query = mysqli_query($conn, "SELECT * FROM `users` WHERE `id`='$_SESSION[id]'");
$fetch = mysqli_fetch_array($query);
 

			

?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>
<body>
    <h1>Welcome <?php echo "<h2 class='text-success'>".$fetch['name']."</h2>"; ?></h1>
    <a href="logout.php">Logout</a>
</body>
</html>