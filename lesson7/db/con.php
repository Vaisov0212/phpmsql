<?php 

$host="localhost";
$dbname="tech_db";
$user="root";
$password="";

try{
    $dsn="mysql:host=$host;dbname=$dbname;a charset=utf8mb4";
    $con= new PDO($dsn, $user, $password);
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}catch(PDOException $e){
        echo "Ulanishda xatolik : " . $e->getMessage();
        exit;
}





?>