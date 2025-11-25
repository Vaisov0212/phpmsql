<?php 

$host="loclahost";
$user="root";
$pass="";
$dn_name="tech_db";

$con="mysql:host=$host; dbname=$db_name; charset=utf8mb4";
try{
    $pdo=new PDO($con, $user,$pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);

}catch(PDOException $e){
    echo "ulanishda xatolik" .$e->getMessage();

}




?>