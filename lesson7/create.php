<?php 

include("products/productdb.php");

$name=isset($_POST["name"]) ? trim($_POST["name"]) : '';

$subject=isset($_POST["su"]) ? trim($_POST["su"]) : '';

$image='images';

if($name!='' &&  $subject!=''){
    insertProduct($con, $name, $subject,$image);
    echo "ok";
}



?>