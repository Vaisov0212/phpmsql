<?php 
include("db/con.php");

function insertProduct($con, $name, $subject, $image){
    $sql="INSERT INTO product (name, subject, image) VALUES(:name, :subject,:image)";
    $stmt=$con->prepare($sql);
    $stmt->bindParam(':name',$name);
    $stmt->bindParam(':subject', $subject);
    $stmt->bindParam(':image', $image);
    return $stmt->execute();
    

}


?>