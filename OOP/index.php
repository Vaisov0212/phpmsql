<?php 

namespace Model;

class Students{

  public $name;
  public $yoshi;
  public $kursi;

  public function set_attr($name, $yoshi, $kursi){
        $this->name=$name;
        $this->yoshi=$yoshi;
        $this->kursi=$kursi;
  }
  public function get_attr(){
    echo $this->name . "<br>";
    echo $this->yoshi . "<br>";
    echo $this->kursi . "<br>";
  }


}

$ali=new Students();
$ali->set_attr("Ali",19,2);

$ali->get_attr();

?>