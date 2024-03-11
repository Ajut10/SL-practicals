<?php
class A {
    function example() {
        echo "this is parent<br />\n";
    }
}

class B extends A {
    function example() {

        echo "this is child.<br />\n";
    }
    function example2() {
        $this->example();
        parent::example();
    }
}

$b = new B;

// This will call B::example(), which will in turn call A::example().
$b->example2();
?>