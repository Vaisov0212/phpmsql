<?php

abstract class Car{
    protected $sped=0;
    abstract function harakat($tezlik);
    

    protected function mator($tezlik){
        $this->sped=$this->sped+$tezlik;
   
    }

}

class Damas extends Car{
public $sped=0;
    public function harakat($tezlik){
       
       $this->mator($tezlik);
        return $this->sped;
    }

}


$a="";
if(isset($_POST['gaz'])){
    $tezlik=$_POST['gaz'];
    $damas=new Damas();
    $a=$damas->harakat($tezlik);
}
if(isset($_POST['tormoz'])){
    $tezlik=$_POST['gaz'];
    $damas=new Damas();
   $a= $damas->harakat($tezlik*(-1));
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .box{
            display: flex;
            padding:50px 200px;
            
        }
        .box1{

            background-color: green;
            width: 50%;
            height: 60px;
        }
        .box1 button{
            background-color: wheat;
            font-size: 3rem;
            width: 100%;
            margin-right:4%;
        }
        .box2 button{
            margin-left:4%;
             font-size: 3rem;
            width: 100%;
        }
        .box2{
            background-color: red;
            width: 50%;
            height: 60px;
               
        }
    </style>
</head>
<body>
    <h1><?php if(isset($a)){ echo $a;} ?></h1>
   <div class="box">
     <div class="box1">
        <form action="" method="POST" >
        <input type="hidden" name="gaz" value=100 id="">
        <button type="submit" >GAZ</button>
        </form>
     </div>
     <div class="box2">
         <form action="" method="POST" >
        <input type="hidden" name="tormoz" value=100 id="">
        <button type="submit" >TORMOZ</button>
    </form>
     </div>
   </div>
</body>
</html>
