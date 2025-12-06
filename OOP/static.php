<?php
//static property va methodlar

class Person{
public static $id=0;
// public $user_id;
// public $name;
const PI=3.14;
public function getPi(){
    return self::PI;
}
public function __construct()
{
     echo self::$id+=1;
}


}



echo Person::PI;


?>