<?php

class Num{
    protected $num;
    function __construct()
    {
        $this->num = 1;
    }
    function getNum(){
        return $this->num;
    }
}
$obj=new Num();
// $obj->num=2;
echo $obj->getNum();


?>