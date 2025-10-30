<?php
//  Indexlangan massivalr
// $cars=array("BMW",2009,"2.8L");
// $cars[]="Dewo";
// print_r($cars) ;
// echo "<br>";
// $numbers=[1,23,45,23];
// $numbers=[];
// $numbers[1]=12;
// $numbers[2]=90;
// $numbers[3]=90;

// $numbers[5]="34";
// $numbers[6]=90;

// $numbers[4]="hello";
// $numbers[3]=56;
// print_r($numbers);
// $numbers=[];
//     $j=1;
// for($i=2; $i<=100; $i=$i+2){
//     $numbers[$j]=$i;
//     $j++;
// }
// // print_r($numbers);
// for($i=1; $numbers[$i]<=100; $i++){
//     echo $numbers[$i]. "<br>";
// }
// Kalitli massivlar kalit=>qiymat
// $users=[];
// $users["name"]="John";
// $users["age"]=12;
// $users["login"]="John_89";
$user=["name"=>"John","age"=>12, "login"=>"john_89"];

$user["password"]="john_doe";

// print_r($users); 
foreach($user as $key=>$value){
        echo $a."=".$b."<br>";
}







?>