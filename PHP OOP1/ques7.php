
<?php 
echo '<h1>Abstract Class:</h1>';
abstract class Car { 
    function __construct() { 
        echo "This is an Abstract Class"; 
    } 
  
    abstract function something(); 
} 
class Derived extends Car{ 
    function __construct() { 
        echo "Derived class constructor".'<br>'; 
    } 
    function something() { 
        echo "Derived function"; 
    } 
} 
$b1 = new Derived; 
$b1->something(); 
?> 
