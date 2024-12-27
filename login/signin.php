<?php

require_once('../back_end/user_class.php');

if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST["login"]))
{
    $email = $_POST["email"];
    $password = $_POST["password"];

    $logUser = new User("", $email, $password,"");

    $auth = $logUser->signin($email, $password);

    if (!$auth) {
        echo"Invalide email or password";
    } else {
        header('location: ../front_end/activite.php'); 
        exit ;
    }
}
?>

<!DOCTYPE html>
<html>
<style>
</style>
<head>
    <title>Log In</title>
</head>

<body>

<h2>Login Form</h2>

<form method="post" action="" name="login">

    <label><b>Email or Username</b></label>
    <input type="text" name="email" required />
    
    <label><b>Password</b></label>
    <input type="password" name="password" auto_complete="off" required />
    
    <input type="submit" name="login" value="Log in" />
    
 </form>
  
 </body>
 </html>