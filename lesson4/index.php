<?php
// indexlangan massivlar

$arr=array(5,8,"salom",5,-9,6.7);

// $car=[4,8,-9,"olma",-9,56];
$arr[6]=90;
$arr[7]=45;

$arr[]=78;
array_push($arr, 56);

$soni=count($arr);
for($i=0; $i<$soni; $i++){
        echo $i."=". $arr[$i]. "<br>";
}





?>