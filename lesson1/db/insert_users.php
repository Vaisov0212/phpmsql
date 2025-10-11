<?php
include('connect_db.php');
session_start();
if($_SERVER['REQUEST_METHOD']=="POST"){
    $message=[];
    $error=0;
    if(!empty($_POST["name"])){
        $name=$_POST["name"];
    }
    else{
        $message["ism"]="to'ldirilmgan";
        $error++;
    }
      if(!empty($_POST["email"])){
        $email=$_POST["email"];
    }
    else{
        $message["email"]="to'ldirilmgan";
          $error++;
    }
      if(!empty($_POST["pass"])){
        $pass=$_POST["pass"];
    }
    else{
        $message["paro`l"]="to'ldirilmgan";
          $error++;
    }

    if(!$error>0){
        $sql="INSERT INTO users (name,email,password)
        VALUES('$name','$email','$pass')";
        if($conn->query($sql)==TRUE){
            $_SESSION["success"]="Malumotlar qo'shildi";
            header("Location: ../index.php");
        }
        else{
             $_SESSION["success"]="Malumotlar qo'shishda xatolik";
            header("Location: ../index.php");
        }
    }
    else{
        $_SESSION["errors"]=$message;
        header("Location: ../index.php");
    }






};



?>