<?php 
class Database{
    protected $pdo;
    public string $error;
    protected function __construct(){
        $host="localhost";
        $user="root";
        $db_name="tech_db";
        $pass="";
        $con="mysql:host=$host;dbname=$db_name;charset=utf8mb4";
        try{
            $this->pdo=new PDO($con,$user,$pass);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            $this->pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            $this->pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
       
        }catch(PDOException $e){
            $this->error= "ulanishda xatolik". $e->getMessage();
        }
    }

}




?>