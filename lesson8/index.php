<?php 
function tub($a){
    $k=false;
    for($i=2; $i<=sqrt($a); $i++){
        if($a%$i==0){
           $k=true;
            break;
        }
    }
    if($k==false){
        return "Tub son";
    }
    else{
        return "Tub emas";
    }
}

$n=5827;

echo tub($n);
echo "<br>";
function param($a="salom"){
    return $a;
}
$b="Bunjur";
echo param($b);

?>