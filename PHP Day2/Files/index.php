<?php

$res=0;
$a=0;
$b=1;
echo "Fibonacci Series";
echo $a. ' '.$b;
while($res<10)
{
$c=$a+$b;
echo $c. ' ';
$a=$b;
$b=$c;
$res=$res+1;
}
?>
