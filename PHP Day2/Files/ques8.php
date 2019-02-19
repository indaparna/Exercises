<?php
function Factorial($number){
  if($number<=1){
    return 1;
  }
  else {
    return$number*Factorial($number-1);
  }
}
echo Factorial(5);
?>
