<?php

class Person{
    public $name;
    protected $eage;
    protected $pass;
    protected $data;


}

class Ota extends Person{
    protected $soch_rangi="Malla";
    public function __construct()
    {
        $this->name="Ism";
        $this->eage="Yoshi";
        $this->data="Tugílgan sana";
    }

}

class John extends Ota{
 public $soch_rangi="qora";

 public function get(){
    return $this->name;
 }

}

class Jek extends Ota{
    public function soch(){
        return $this->soch_rangi;
    }
}


$john=new John();
$john->name="John";
// echo $john->soch_rangi;

$jek=new Jek;
echo $jek->soch();


?>