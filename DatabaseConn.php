<?php
$servername = "localhost";
$username = "root";
$password = "";
$databasename = "brooksidevilliage";

$conn = mysqli_connect($servername, $username, $password, $databasename);

if(!$conn){
	die("Connection faileddue to the following error:".mysqli_connect_error());	
}

?>