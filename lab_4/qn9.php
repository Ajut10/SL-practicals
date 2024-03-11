<?php
class personal{
    public static $name = "Baba";
    public static function show(){
    echo self::$name;
    }
}
// personal::$name;
personal::show();
?>