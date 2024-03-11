<?php
session_start();
require "User.php";
$username=$_POST["username"];
$password=$_POST["password"];
if(empty($username)||empty($password)){

    echo "username is required";
    die;
}
$user = new User($username,$password);
$result=$user->verify_user($username,$password);
if($result){
    $_SESSION['loggedin_user'] = $username;
    header("Location:dashboard.php");
}else{
    header("location:login.php?error=invalid_username");
}
    ?>