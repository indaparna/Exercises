<?php
echo '<h1>Method Chaining:</h1>';
class person{
 private $name="";
 private $age="";
 public function setName($name=""){
  $this->name=$name; 
   return $this;
   }
   public function setAge($age="20"){
    $this->age=$age;
    return $this;
  }
  public function getInfo(){
    echo "Hello, My name is ".$this->name." and my age is ".$this->age." years.";
  }
} 
$person = new person();
$person->setName("Aparna")->setAge("21")->getInfo(); 
?>
 
