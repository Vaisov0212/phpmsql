<?php
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

session_start();
include('connect_db.php');


if($_SERVER['REQUEST_METHOD'] !== 'POST'){
      http_response_code(405);
    exit;
}
else{
  
    $token=$_POST["token"];
    $csrf=$_SESSION["csrf"];
    if(empty($token) || !hash_equals($csrf,$token)){
        http_response_code(403);
        exit("token xato");
    }
    else{
        $user_id=$_POST["user_id"];
        $sql="DELETE FROM users WHERE id='$user_id'";
        if($conn->query($sql)===TRUE){
            $_SESSION["success"]="Malumotlar oçhirildi";
            header("Location: ../view.php");
        }
        else{
            $errors = [];
            $errors['xatolik']=$conn->error;
            $_SESSION["errors"]=$errors;
        }
        $conn->close();
    }
}


?>