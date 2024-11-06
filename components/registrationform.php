<?php
    require 'config.php';

    if(isset($_POST["submit"])){
        $name = $_POST["name"];
        $username = $_POST["username"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $confirmpassword = $_POST["confirmpassword"];

        $duplicate = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username' OR email = '$email'");
        if(mysqli_num_rows($duplicate) > 0){
            echo "<script> alert('Username or Email Has Already Taken') </script>";
        }else{
            if($password == $confirmpassword){
                $query = "INSERT INTO users VALUES('','$name','$username','$email','$password')";
                mysqli_query($conn, $query);
                echo "<script> alert('Your Account was Successfully Registered') </script>";
            }else{
                echo "<script> alert('Please check your password. Password does not match!') </script>";
            }
        }
    }

    $conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
</head>
<body>
    <h2>Registration Form</h2>
    <form class="" action="" method="POST" autocomplete="off">

        <label for="name">Name : </label>
        <input type="text" name="name" id="name" required value=""> <br>

        <label for="username">Username : </label>
        <input type="text" name="username" id="username" required value=""> <br>

        <label for="email">E-mail : </label>
        <input type="email" name="email" id="email" required value=""> <br>

        <label for="password">Password : </label>
        <input type="password" name="password" id="password" required value=""> <br>

        <label for="confirmpassword">Confirm Password : </label>
        <input type="text" name="confirmpassword" id="confirmpassword" required value=""> <br>

        <button type="submit" name="submit">Register</button>
    </form>
    <br>
    <p>Already have an account? <a href="login.php">Login Now!</a></p>
</body>
</html>