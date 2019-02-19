<?php
echo "<h1>Display 1-2-3-4-5-6-7-8-9-10</h1>";
/*echo 1;
$value=2;
do{
  echo"-$value";
  $value++;
}while($value<=10);*/
$start=1;
$end=10;
for($i=$start;$i<=$end;$i++){
  if($i==$end){
    echo$end;
  }
  else{
    echo$i.'-';
  }
}
?>
