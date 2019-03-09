<?php

if(isset($_POST['approve'])){
	require 'DatabaseConn.php';
	
	$owner = $_POST['owner'];
	$MakeModel = $_POST['makemodel'];
	$year = $_POST['year'];
	$license = $_POST['license'];
	
	$sql = "UPDATE vehicle SET approved = 1 WHERE license = ?;";
	$stmt = mysqli_stmt_init($conn);
	if(!mysqli_stmt_prepare($stmt, $sql)){
		header("Location: ../VehicleMang.php?error=sqlerror");
		exit();
	}
	else{
		
		mysqli_stmt_bind_param($stmt, "s", $license);
		mysqli_stmt_execute($stmt);
		header("Location: ../VehicleMang.php?register=success");
		exit();
	}
				
}

else if(isset($_POST['delete'])){
	
	require 'DatabaseConn.php';
	
	$owner = $_POST['owner'];
	$MakeModel = $_POST['makemodel'];
	$year = $_POST['year'];
	$license = $_POST['license'];
	
	$sql = "DELETE FROM vehicle WHERE license = ?;";
	$stmt = mysqli_stmt_init($conn);
	if(!mysqli_stmt_prepare($stmt, $sql)){
		header("Location: ../VehicleMang.php?error=sqlerror");
		exit();
	}
	else{
		
		mysqli_stmt_bind_param($stmt, "s", $license);
		mysqli_stmt_execute($stmt);
		header("Location: ../VehicleMang.php?register=success");
		exit();	
	}
	
	
	
}


else if(isset($_POST['deny'])){
	require 'DatabaseConn.php';
	
	$owner = $_POST['owner'];
	$MakeModel = $_POST['makemodel'];
	$year = $_POST['year'];
	$license = $_POST['license'];
	
	$sql = "UPDATE vehicle SET approved = 0 WHERE license = ?;";
	$stmt = mysqli_stmt_init($conn);
	if(!mysqli_stmt_prepare($stmt, $sql)){
		header("Location: ../VehicleMang.php?error=sqlerror");
		exit();
	}
	else{
		
		mysqli_stmt_bind_param($stmt, "s", $license);
		mysqli_stmt_execute($stmt);
		header("Location: ../VehicleMang.php?register=success");
		exit();
	}
				
}
			
else{
	header("Location: ../VehicleMang.php");
	exit();	
	
}