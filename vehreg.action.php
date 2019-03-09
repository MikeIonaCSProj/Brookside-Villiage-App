<?php

if(isset($_POST['vehicle-submit'])){
	require 'DatabaseConn.php';
	
	$owner = $_POST['owner'];
	$MakeModel = $_POST['makemodel'];
	$year = $_POST['year'];
	$license = $_POST['license'];
	
	if(empty($owner) || empty($MakeModel) || empty($year) || empty($license)){
		header("Location: ../Vehicle.php?error=emptyfeilds");
		exit();
		
	}
	else{
		$sql = "SELECT * FROM vehicle Where license = ?;";
		$stmt = mysqli_stmt_init($conn);
		if(!mysqli_stmt_prepare($stmt, $sql)){
			header("Location: ../Vehicle.php?error=sqlerror");
			exit();
		}
		else{
			
			mysqli_stmt_bind_param($stmt, "s", $license);
			mysqli_stmt_execute($stmt);
			mysqli_stmt_store_result($stmt);
			$resultnum = mysqli_stmt_num_rows($stmt);
			if($resultnum > 0){
				
				header("Location: ../Vehicle.php?error=taken");
					exit();
			}
			else{
				$approved = 0;
				$sql= "INSERT INTO vehicle (owner, MakeModel, year, license, approved) VALUES (?,?,?,?,?)";
				$stmt = mysqli_stmt_init($conn);
				if(!mysqli_stmt_prepare($stmt, $sql)){
					header("Location: ../Vehicle.php?error=sqlerror");
					exit();
				}
				else{
					mysqli_stmt_bind_param($stmt, "ssisi", $owner, $MakeModel, $year, $license, $approved);
					mysqli_stmt_execute($stmt);
					header("Location: ../Vehicle.php?register=success");
					exit();
				}
			}
			
			
		}
	}



}
else{
	header("Location: ../Vehicle.php");
	exit();	
	
}