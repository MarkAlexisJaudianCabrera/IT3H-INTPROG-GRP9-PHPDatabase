<?php
    require 'config.php';

    if(isset($_POST["submit"])){
        $usernameemail = $_POST["usernameemail"];
        $password = $_POST["password"];
        $query = "SELECT * FROM users WHERE username = '$usernameemail' OR email = '$usernameemail' ";
        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_assoc($result);
        if(mysqli_num_rows($result) > 0){
            if($password == $row["password"]){
                $_SESSION["login"] = true;
                header("Location: index.php");
            }else{
                echo "<script> alert('Incorrect Password!'); </script>";
            }
        }else{
            echo "<script> alert('User does nor Exist!'); </script>";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h2>Login Account</h2>
    <form class="" action="" method="POST" autocomplete="off">

        <label for="usernameemail">Username or E-mail : </label>
        <input type="text" name="usernameemail" id="usernameemail" required value=""> <br>

        <label for="password">Password : </label>
        <input type="text" name="password" id="password" required value=""> <br>

        <button type="submit" name="submit">Login</button>

    </form>

    <br>

    <p>Does not have an Account Yet? <a href="registrationform.php">Sign Up Now!</a></p>
</body>
</html>