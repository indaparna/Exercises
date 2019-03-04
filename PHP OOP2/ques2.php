<!Doctype html>

<?php
$name="name";
$value="Aparna";
setcookie($name, $value, time()+30*24*60*60);
if(!isset($_COOKIE[$name])) {
    echo "Cookie named '" . name . "' is not set!";
} else {
    echo "Cookie '" . $name . "' is set!<br>";
    echo "Value is : " . $_COOKIE[$name];
}
?>
<html>
    <head>
    <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
    <style>
        body{
            width:150px;
            border-radius: 10px;
            border: 2px solid #ccc;
            padding: 18px;
            margin-top: 15%;
            margin-left: 40%;
            color:black;
            font-family: 'Lobster', cursive;
        }
    </style>
    </head>
    <body> 
        
         
</body>
</html>