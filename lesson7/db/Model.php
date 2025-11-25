<?php
require_once "db.php";

class Model extends Database{
    protected $table_name;
    protected array $fillable;
    protected function insert(array $values){
       $columns=[];
       $placeholders=[];
       $data=[];
       foreach($this->$fillable as ){

       }
    }
}


?>