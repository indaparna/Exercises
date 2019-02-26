<?php
$servername = "localhost";
$username = "aparna";
$password = "password";
$name = $_POST['first_name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
if(empty($_POST['first_name']) && empty($_POST['email']) && empty($_POST['phone']))
{
    echo "Please Enter Something";
    die();
}
    try 
    {
        $conn = new PDO("mysql:host=$servername;dbname=db_new", $username, $password);
        echo "Connected successfully"; 
        $sth = $conn->prepare("SELECT * FROM details WHERE first_name LIKE '%{$name}%' AND phone LIKE '%{$phone}%' AND e_mail LIKE '%{$email}%'");
        $sth->execute();
        $sth->setFetchMode(PDO::FETCH_ASSOC);
        $result = $sth->fetchAll();
        
    if(empty($result))
    {
        echo "NO DATA FOUND";
        die();
    }
        echo "<h3>RESULTS FOUND:</h3>";
        echo "<table border='1'>";
        foreach($result as $key=>$row) {
            echo "<tr>";
            foreach($row as $key2=>$row2){
                echo "<td>" . $row2 . "</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    }
    catch(PDOException $e)
    {
        echo "Connection failed: " . $e->getMessage();
    }
?>