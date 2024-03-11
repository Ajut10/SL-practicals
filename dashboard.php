<?php 
session_start();
if (empty($_SESSION['loggedin_user'])){
    header('Location:login.php');
}
echo "WELCOME YOUR HIGHNESS MAJESTY ".$_SESSION['loggedin_user'];