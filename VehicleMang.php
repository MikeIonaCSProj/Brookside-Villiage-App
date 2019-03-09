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
	$sql="SELECT owner, MakeModel, year, license
	FROM vehicle WHERE approved = 0;";
	
	require 'php files/DatabaseConn.php';

	$result = $conn->query($sql) or die('Could not run query: '.$conn->error);

	if ($result->num_rows > 0) {
		echo ' <table class = "table4" frame="box" cellspacing = "0", align=left> ';
		echo '<caption> Pending </caption>';
		echo "<tr>
				<th> </th>
				<th> </th>
				<th>owner </th>
				<th> make/model </th>
				<th> year </th>
				<th> license plate </th>
				</tr>";
		while($row = $result->fetch_assoc()) {
						$owner=$row["owner"];
						$MakeModel=$row["MakeModel"];
						$year=$row["year"];
						$license=$row["license"];
						

						echo'<form action="php files/vehiclemang.action.php" method="POST">';
		 	 			echo '<tr>
						  <td><button name="approve"  type="submit"> Approve</button></td>
						  <td><button name="delete"  type="submit"> Delete</button></td>
						  <td>'.$owner.'</td>
							 <td width = "100"> '.$MakeModel.' </td> 
						  <td>'.$year.'</td>
							<td>'.$license.'</td>
							<input name="owner" type="hidden" value="'.$owner.'" >
							<input name="makemodel" type="hidden" value="'.$MakeModel.'" >
							<input name="year" type="hidden" value="'.$year.'" >
							<input name="license" type="hidden" value="'.$license.'" >
					</tr>';
						echo'</form>';
				}
					echo"</table >";

					}
	?>
	
	<?php
	$sql="SELECT owner, MakeModel, year, license
	FROM vehicle WHERE approved = 1;";
	
	require 'php files/DatabaseConn.php';

	$result = $conn->query($sql) or die('Could not run query: '.$conn->error);

	if ($result->num_rows > 0) {
		echo ' <table class = "table5" frame="box" cellspacing = "0", align=right> ';
		echo '<caption> Approved </caption>';
		echo "<tr>
				<th> </th>
				<th>owner </th>
				<th> make/model </th>
				<th> year </th>
				<th> license plate </th>
				</tr>";
		while($row = $result->fetch_assoc()) {
						$owner=$row["owner"];
						$MakeModel=$row["MakeModel"];
						$year=$row["year"];
						$license=$row["license"];
						

						echo'<form action="php files/vehiclemang.action.php" method="POST">';
		 	 			echo '<tr>
						  <td><button name="deny"  type="submit"> Deny</button></td>
						  <td>'.$owner.'</td>
							 <td width = "100"> '.$MakeModel.' </td> 
						  <td>'.$year.'</td>
							<td>'.$license.'</td>
							<input name="owner" type="hidden" value="'.$owner.'" >
							<input name="makemodel" type="hidden" value="'.$MakeModel.'" >
							<input name="year" type="hidden" value="'.$year.'" >
							<input name="license" type="hidden" value="'.$license.'" >
					</tr>';
						echo'</form>';
				}
					echo"</table >";

					}
	?>
	
	</main>
	
<?php


?>