<!DOCTYPE html>
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
	
		include ("php files/DatabaseConn.php");
	?>

<main>

	<?php
	$idnum = $_SESSION['userid'];
	$sql="SELECT fineid, description, price, state, tenantid, employeeid
	FROM Fines";

	$result = $conn->query($sql) or die('Could not run query: '.$conn->error);

	if ($result->num_rows > 0) {
		echo ' <table class = "table3" frame="box" align=center> ';
		echo "<tr>
				<th> </th>
				<th>Fine ID </th>
				<th> Description </th>
				<th> Price </th>
				<th> State </th>
				<th> Tenant ID </th>
				<th> Employee ID</th>
				</tr>";
		while($row = $result->fetch_assoc()) {
						$fineid=$row["fineid"];
						$desc=$row["description"];
						$price=$row["price"];
						$state=$row["state"];
						$tenantid=$row["tenantid"];
						$employeeid=$row["employeeid"];
						

						echo'<form action="Finepay.php" method="POST">';
		 	 			echo '<tr>
						  <td><button name="Pay"  type="submit"> Pay</button></td>
						  <td>'.$fineid.'</td>
							 <td width = "100"> <font size = "4">'.$desc.' </font> </td> 
						  <td>'.$price.'</td>
							<td>'.$state.'</td>
							<td>'.$tenantid.'</td>
							<td>'.$employeeid.'</td>
					</tr>';
						echo'</form>';
				}
					echo"</table >";

					}
	?>
	
</main>