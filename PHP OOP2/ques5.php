<?php
echo '<h2>Check File Existance</h2>';
$filename = './ques10.php';
try{
if (file_exists($filename)) {
    echo "The file $filename exists";
} else {
    // echo "The file $filename does not exist";
    throw new Exception("The file".$filename." does not exist"); 
    return true; 
}
}
catch(Exception $e){
    echo $e;
}
?>
