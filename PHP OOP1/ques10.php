<?php
echo '<h1>This Keyword</h1>';
class Student{
Public $name;
Public $roll;
function get($a, $b){
$this->name= $a;
$this->roll= $b;
}
function display(){
echo $this->name."<br>";
echo $this->roll;
}
} 
$obj= new Student();
$obj->get("Aman",05);
$obj->display();
?>
