<?php
    require 'config.php';
    if(!empty($_SESSION["id"])){
         $id = $_SESSION["id"];
         $query = "SELECT * FROM users WHERE id = $id";
         $result = mysqli_query($conn, $query);
         $row = mysqli_fetch_assoc($result);
    }else{
         header("Location: login.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
</head>
<body>
    <h1>Greetings! <?php echo $row["name"]; ?></h1>

    <a href="logout.php">Click to Log Out.</a>
</body>
</html>