<?php
$a=[1,4,6,8,9,3,6,-12,13,12];

for($i=count($a)-1; $i>=0; $i-- ){
        echo $a[$i] . "<br>";
}

$maxsulot=[
    "olma"=>8000 ,
    "nok"=>12000,
    "anor"=>15000,
    "pepsi"=>15000,
    "cola"=>18000
];

$maxsulot["banan"]=17000;

// print_r($maxsulot);
// echo $maxsulot["pepsi"];
foreach($maxsulot as $key=>$value){
    echo $key . " --- " .$value .   "<br>";
}




?>