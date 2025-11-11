<?php

$a=[1,3,5,7,8,4,-1];
// $a[3];
for($i=0; $i<count($a); $i++){
        // echo $a[$i]."<br>";
}

$a[]=67;
$arr=[
    [5,4,6,3,4,0],
    [1,-8,13,24,5,3,-9],
    [1,7,5,3,5]
    // [78]
];

for($i=0; $i<count($arr); $i++ ){
    for($j=0; $j<count($arr[$i]); $j++){
        echo $arr[$i][$j]. " , " ;
    }
    echo "<br>";
}


$karr=[
["Yoshi"=>13, "bo'yi"=>"120sm", "Tug'ilgan_Sana"=>"12-aprel"],
["Yoshi"=>15, "bo'yi"=>"140sm", "Tug'ilgan_Sana"=>"1-mart"],
["Yoshi"=>14, "bo'yi"=>"150sm", "Tug'ilgan_Sana"=>"12-iyun"]
];

 $karr["Laylo"]["pochta"]="user@gmail.com";

 foreach($karr as $name=>$value){
    echo $name ." "; 
    foreach($value as $key=>$v){
        echo $key. "---" . $v . " ";
    }
    echo "<br>";
 }







?>