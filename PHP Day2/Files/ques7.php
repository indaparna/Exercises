<?php
echo "<h1>Print 1,2,3,6,7</h1>";
$numbers=[1,2,3,4,5,6,7];
for($i=0 ; $i<sizeof($numbers) ; $i++)
{
  if($numbers[$i] == 4 || $numbers[$i] == 5)
  {
    continue;
  }
  if($i == sizeof($numbers)-1)
  {
    echo $numbers[$i];
    break;
  } 
  echo $numbers[$i].',';
}
?>
