<?php
session_start();

require_once('../back_end/user_class.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST["register"])) 
{
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $phone = $_POST["telephone"];

        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        $newUser = new User($username, $email, $password, $phone);

        $result = $newUser->signup($username, $email, $password, $phone);

        if ($result) {
            session_regenerate_id();
            $_SESSION['login'] = TRUE;
            $_SESSION['username'] = $username;
            $_SESSION['email'] = $email;

            echo"User registered successfully";
        } else {
            echo"error";
        }
    
}
?>

<!DOCTYPE html>
<html>
<style>
</style>
<head>
    <title>Register</title>
</head>

<body>

<h2>Registration Form</h2>

<form method="post" action="signup.php" name="registerform">

    <label><b>Username</b></label>
    <input type="text" name="username" required />
    
    <label><b>Email</b></label>
    <input type="email" name="email" required />
    
    <label><b>Password</b></label>
    <input type="password" name="password" auto_complete="off" required />

    <label><b>Telephone</b></label>
    <input type="text" name="telephone" required />
    
    <input type="submit" name="register" value="Register" />
    
 </form>

 </body>
</html>
