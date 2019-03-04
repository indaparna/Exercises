<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);


$flightname=$_POST['flightname'];
$fromCity=$_POST['fromCity'];
$toCity=$_POST['toCity'];
$seats=$_POST['people'];

echo $flightname;
echo $fromCity;
echo $toCity;
echo $seats;

$servername="localhost";
$username="aparna";
$password="password";
$dbname="flights";	
$remSeats;

function checkAvailability()
{
	global $servername,$username,$password,$dbname;	
	global $flightname,$fromCity,$toCity,$seats,$remSeats;
	try 
	{
		$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
		echo "Connected successfully: "; 
		$sth = $conn->prepare("SELECT * FROM user WHERE flightname = '{$flightname}' AND fromCity='{$fromCity}' AND toCity='{$toCity}'AND remainingSeats >= '{$seats}' ");
		$sth->execute();
		$sth->setFetchMode(PDO::FETCH_ASSOC);
		$result = $sth->fetchAll();
		
		if(empty($result))
		{
			echo "NO DATA FOUND";
			echo "sorry !! Seats are not available";
			die();
		}
		echo "<h3>RESULTS FOUND:</h3>";
		echo "<table border='1', style=\"float:center\">";
		foreach($result as $key=>$row) {
			echo "<tr>";
			foreach($row as $key2=>$row2){
				echo "<td>" . $row2 . "</td>";
				$remSeats = $row2;
			}
			echo "</tr>";
		}
		echo "</table>";
		echo "congrats you can book your flight now";
	}
	catch(PDOException $e)
	{
		echo "Connection failed: " . $e->getMessage();
	}
}

function bookFlights(){

	global $servername,$username,$password,$dbname,$remSeats;
	global $flightname,$fromCity,$toCity,$seats,$remSeats;

	try 
	{
		$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
		echo "Connected successfully: "; 
		$seats = $seats-$remSeats;
		// $seats = $remSeats-$seats;
		$sth = $conn->prepare("UPDATE user SET remainingSeats = '{$seats}' WHERE flightname = '{$flightname}' AND fromCity='{$fromCity}' AND toCity='{$toCity}'");
		$sth->execute();
		
		echo "congrats Booking Done!!";
		$conn = null;
	}
	catch(PDOException $e)
	{
		echo "Connection failed: " . $e->getMessage();
	}



}



if (isset($_POST['checkFlightAvailability'])) {
	checkAvailability();
}




if (isset($_POST['bookFlights'])) {
	checkAvailability();
	bookFlights();

}





?>