<?php
echo "<h1>Check if value is greater than 5 or not</h1>";
#$value=[1,2,3,4,5,6,7];
$value=4;
switch($value){
  case ($value<5):
    echo "Value is less than 5";
    break;
  case ($value==5):
    echo "Value is equal to 5";
    break;
  case ($value>5):
    echo "Value is greater than 5";
    break;
}
?>
