<?php

class Person{
   public $name;
   public $yosh;
    public function __construct(){
        $this->name="John";
    }
    public function __call($a, $str){
              echo " mavjud bo'lmagan o'zgaruvchiga murojat";
    }
    public function setYosh($yosh){
        $this->yosh=$yosh;
    }
 public function  __destruct(){
    echo "Dastur yopildi";
 }


}

 $john=new Person();
 echo $john->name. "<br>";
 echo $john->city(). "<br>";
    


    
    


?>