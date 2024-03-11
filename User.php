<?php
require "database.php";
class User{
   
    private $con;

    public function __construct(){
        
        $db= new database();
        $this->con=$db->connect();
    }
    public function register_user($name,$username,$password){
        $res = $this->con->query("insert into user (name,username,password) values('$name','$username','$password')");
        if($res){
            return true;

        }else{
            return false;
        }
    }
    public function logout(){
        session_destroy();
        header("location:login.php");
    }
    public function change_password($oldpassword,$newpassword){
        $sql = "update user set password='$newpassword' where password='$oldpassword'";
    }
    public function verify_user($username,$password)
    {
        $res= $this->con->query("select * from user where username='$username' and password='$password'");
        if($res->num_rows==1){
            return true;
        }else{
            return false;
        }
    }
}
?>