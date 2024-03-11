<?php
class Area{
    public $r;
    public $area;
   
    function __construct($r){
        
        
        $this->area=$r*$r*3.14;
        

    }
    function getArea(){
        return $this->area;
        
    }

}
$test = new Area(4);
echo "area of circle= ".$test->getArea();


?>