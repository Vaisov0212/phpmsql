<?php

class Hayvon{
    public function sound(){
        return " ovoz";
    }
}

class Mushuk extends Hayvon{
    public function sound()
    {
       return Hayvon::sound(). " Miauv";
    }
}

class Dog extends Hayvon{ 
    public function sound(){
        return "Vov";
    }
}
class Mol extends Hayvon{
    public function sound(){
        return 'Moo';
    } 
} 

// $mushuk=new Mushuk;

// echo $mushuk->sound();
// echo "<br>";
// $dog=new Dog();

// echo $dog->sound(). "<br>";
// $a=new Hayvon();
// echo $a->sound();


class Kassa{
    public $kirim=[];
    public function setMoney($payment, $money){
        $this->kirim["$payment"]= $money;
        
    }
}

class Click extends Kassa{
        public function setMoney($payment, $money)
        {
            return Kassa::setMoney($payment, $money). " Clik orqali to'lov";
        }
}
class Paynet extends Kassa{
    public function setMoney($payment, $money)
        {
            return Kassa::setMoney($payment, $money). " Paynet orqali to'lov";
        }
}
$payment=new Click();
echo $payment->setMoney("Soliq uchun", 100000);

print_r($payment->kirim) ;



?>