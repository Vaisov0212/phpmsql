<?php


$a=fopen('test.txt','r');
echo fgetc($a);
fclose($a);

?>