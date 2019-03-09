<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Create Request</title>
		<link rel="stylesheet" type="text/css" href="TheBestCss4.css">
		<meta charset="utf-8">
	</head>
	<body>
<?php

session_start();

$idnum = $_SESSION['userid'];
$firstnum = substr($idnum, 0, 1);

if($firstnum == 1){
	
	require "header1.php";
	
}

else if($firstnum == 2){
	
	require "header2.php";
	
}

?>
		

		<table class="table3" frame="box", align=center>
		<tr><td>Request: <input type="text" name="NRequest"></td></tr>
		<tr><td>Date: <input type="text" name="NDate"></td></tr>
		<tr><td>Category: <input type="text" name="NCategory"></td></tr>
		<tr><td>Priority: <input type="text" name="NPriority"></td></tr>
		<tr><td>Description: <input type="text" name="NDescription"></td></tr>
		</form>
		<tr><td><form class="button1"><input type="submit" action="CreateRequest.php" method="get"></td></tr>
		</table>
		
	</body>
</html>