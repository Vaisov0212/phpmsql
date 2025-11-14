<?php

$arr=["c",2,"d",-7,"a",0,12];
$karr=["b"=>56, "a"=>-89, "c"=>1];
// rsort($arr);
// arsort($karr);
krsort($karr);

print_r($karr);
?>