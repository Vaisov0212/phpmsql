<?php

interface Payment{
    public function pay($amount);
}


class Click implements Payment{
    public function pay($amount){
        return "Click: $amount";
    }
}class Payme implements Payment{
    public function pay($amount){
        return "Payme: $amount";
    }
}


function makePayment(Payment $service, $amount){
         return  $service->pay($amount);
}

echo makePayment(new Click(), 47000);


?>