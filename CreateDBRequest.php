<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Add New Request</title>
		<link rel="stylesheet" type="text/css" href="TheBestCss6.css">
		<meta charset="utf-8">
	</head>
	<body>
		<?php

		include ("ConnectRailroadDB.php");

		$request = $_GET["newRequest"];
		$date = $_GET["newDate"];
		$category = $_GET["newCategory"];
		$priority = $_GET["newPriority"];
		$description = intval($_GET["newDescription"]);
		$sqlEmp="SELECT * FROM Request" ;
		$result = $conn->query($sqlEmp) or die('Could not run query: '.$conn->error);

		$sql = "INSERT INTO Request Request='".$request."', Date='".$date."', Category='".$category."', Priority=".$priority.", Description='".$description."';";

		if ($conn->query($sql) == TRUE) {
		    echo "Request created successfully";
		} else {
		    echo "Error: " . $sql . "<br>" . $conn->error;
		}

		$conn->close();

		?>
	</body>
</html>
