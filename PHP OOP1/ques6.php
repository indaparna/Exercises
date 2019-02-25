<?php
echo '<h1>The factorial of given number is:</h1>';
class Factorial 
{
  protected $_n;
  public function __construct($n)
   {
     if (!is_int($n))
	   {
	      echo "Not a Number";
       }
    $this->_n = $n;
	}
  public function result()
    {
     $factorial = 1;
     for ($i = 1; $i <= $this->_n; $i++)
	  {
	    $factorial *= $i;
      }
	   return $factorial;
	 }
 }

$newfactorial = New Factorial(5);
echo $newfactorial->result();
?>