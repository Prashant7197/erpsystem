<?php




$server = "localhost";
$user = "root";
$password = "";
$database = "mohalla";


$conn = new mysqli($server, $user, $password, $database);



if(!$conn){
    die("Sorry! Unable to connect database");
}
?>