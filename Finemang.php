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

	<main>
		<table class="table2" frame="box" cellspacing = "0", align=right>
		<form  action ="php files/finemang.action.php" method = "post">
			<?php
				if(isset($_GET['error'])){
					if($_GET['error'] == "emptyfeilds"){
						echo '<p class="error"> One or more of the following feilds was left empty </p>';
						
					}
					else if($_GET['error'] == "sqlerror"){
						echo '<p class="error"> An SQL error has occured, Please contact you Administrator </p>';
						
					}
					else if($_GET['error'] == "nousers"){
						echo '<p class="error"> There is no user in our record with that name </p>';
						
					}
					else if($_GET['error'] == "emptyfeilds"){
						echo '<p class="error"> One or more of the following feilds was left empty </p>';
						
					}
				}
				else if(isset($_GET['register'])){
					
					if($_GET['register'] == "success"){
						echo '<p class="success"> Your fine was successfully submited. </p>';
						
					}
					
					
				}
			?>
			<tr>
				<th>Description/Reason for Fine:   <input type = "text" name = "desc" placeholder = "Description and Rule broken"></th>			
			</tr>
			<tr>
				<th>Price:   <input type = "text" name = "price" placeholder = "$$.$$"></th>
			</tr>
			<tr>
				<th>Name of Recipiant:   <input type = "text" name = "name" placeholder = "First Last"></th>
			</tr>

			<tr>
				<th><button type = "submit" name = "finemang-submit"> Submit </button></th>
			</tr>
			
		</form>
		</table>
	
	
	</main>
	
<?php


?>