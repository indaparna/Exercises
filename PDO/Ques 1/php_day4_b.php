<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

 if (!isset($_POST['submit'])) {
	echo "Something went wrong!";
	die();
}
if (!isset($_POST['first_name']) || !isset($_POST['last_name']) || !isset($_POST['email']) || !isset($_POST['phone'])) {
	echo "Please check that all fields are filled";
	die();
}
$first_name=$_POST['first_name'];
$last_name=$_POST['last_name'];
$email=$_POST['email'];
$phone=$_POST['phone'];



if ((!preg_match("/^([1-9]{1}[0-9]{9})$/", $phone)) && strlen($phone) !=10) {
	echo "Enter valid phone number";
	die();
}

if (preg_match("/^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/", $email)) {
	echo "Email Validated";
}
else{
	echo "Email Invalid";
	die();
}
$servername="localhost";
$username="aparna";
$password="password";
$dbname="db_new";

try{
	$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	$sql = "INSERT INTO details(first_name, last_name,e_mail, phone) VALUES ('$first_name', '$last_name', '$email', $phone)";
	$conn->exec($sql);
	echo "New record created successfully";
	$conn=null;
}
catch(PDOException $e){
	echo $sql."<br>".$e.getMessage();
}
?>