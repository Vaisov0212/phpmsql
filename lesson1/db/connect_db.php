<?php

$host="localhost";
$username="root";
$password="";
$db="phplessons";

$conn=new mysqli($host,$username,$password,$db);

if($conn->connect_errno){
    die("Connect failed: ".$conn->connect_error);
}
else{
    $connected= "success";
}

$conn->set_charset('utf8mb4');

?>