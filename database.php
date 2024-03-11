<?php
class database{


private $host;
private $user;
private $password;
private $db;
    public function __construct(){
        $this->host = 'localhost';
        $this->user = 'root';
        $this->password ='';
        $this->db="myproject";

    }
    public function connect(){
        $con= new mysqli($this->host,$this->user,$this->password);
        $con->select_db($this->db);
        return $con;
    }
}

?>