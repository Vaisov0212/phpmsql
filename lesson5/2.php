<?php
$maxulot=[
    "olma"=>16000,
    "nok"=>15000,
    "apelsin"=>21000,
    "ananas"=>32000,
    "pechenye"=>17000,
    "pepsi"=>15000
];
foreach($maxulot as $key=>$value){
    if($value ==15000 ){
        echo $key . "=" . $value . "<br>";
    }
}



?>