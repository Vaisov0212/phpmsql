<?php

class Person{
    private $eage;
   public function setEage($e){
    if($e>0){
        $this->eage=$e;
    }
   }
   public function getEage(){
    return $this->eage;
   }

}

$john=new Person();
$john->setEage(17);

// echo $john->getEage();

class Bank{

    private $xisob_raqam=0;

    public function setMoney($money){
        if($money>0){
            $this->money_add($money);
        }
    }
    private function money_add($money){
        $this->xisob_raqam+=$money;
    }
    public function minus_money($money){
            if($money>0 && $this->xisob_raqam>=$money ){
                $this->xisob_raqam-=$money;
            }
    }
    public function getMoney(){
        return $this->xisob_raqam;
    }


}


$john=new Bank();

$john->setMoney(-100000);
$john->minus_money(17000);
// echo $john->getMoney();



class Car{
    public $name;
    private $sped=0;
    public function gaz($tezlik){
        if($tezlik>0){
                $this->sped+=$tezlik;
        }
    }
    public function tormoz($a){
        if($a>0){
            $this->sped-=$a;
        }
    }
    public function getSped(){
        return $this->sped;
    }

}

$damas=new Car();
$bmw=new Car();

$damas->gaz(50);
$damas->tormoz(20);
echo $damas->getSped();

$bmw->gaz(100);
$bmw->tormoz(40);
echo "<br>";
echo $bmw->getSped();



?>