<?php
// array sort 

$a=[9,8,5,-5,0,4,3];
print_r($a);
echo "<br>";
// -5,0,3,4,5,8,9

for($i=0; $i<count($a); $i++){
    for($j=1; $j<count($a); $j++){
        if($a[$j-1]>$a[$j]){
            $x=$a[$j];
            $y=$a[$j-1];
            $a[$j-1]=$x;
            $a[$j]=$y;
        }
    }
}

 for($i=0; $i<count($a); $i++){
    echo $a[$i]."<br>";
 }





?>