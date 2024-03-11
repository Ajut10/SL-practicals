<?php

class Sweet{
    public $name;
    public $taste;
    function __construct($name,$taste){
        $this->name=$name;
        $this->taste=$taste;
        echo "<h1> {$this->name}</h1>";
    }
    function intro(){
        echo"{$this->name} are {$this->taste} in taste,<br>";

    }

}
class Rasugulla extends Sweet{
    function desc(){
        echo "and are round and white in color";
    }

}

$obj= new Rasugulla("Rasgullas","sweet");
$obj->intro();
$obj->desc();






?>