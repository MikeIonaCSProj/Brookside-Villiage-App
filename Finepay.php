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
		<form  action ="php files/fine.action.php" method = "post">
			<?php
				if(isset($_GET['error'])){
					if($_GET['error'] == "emptyfeilds"){
						echo '<p class="error"> One or more of the following feilds was left empty </p>';
						
					}
					else if($_GET['error'] == "sqlerror"){
						echo '<p class="error"> An SQL error has occured, Please contact you Administrator </p>';
						
					}
					else if($_GET['error'] == "taken"){
						echo '<p class="error"> This vehicle already exists in our records </p>';
						
					}
					else if($_GET['error'] == "emptyfeilds"){
						echo '<p class="error"> One or more of the following feilds was left empty </p>';
						
					}
				}
				else if(isset($_GET['error'])){
					
					if($_GET['register'] == "success"){
						echo '<p class="success"> Your vehicle registration was successfully submited. Now awaiting approval </p>';
						
					}
					
					
				}
			?>
			<tr>
				<th>Name of Card Holder:   <input type = "text" name = "owner" placeholder = "First Last"></th>			
			</tr>
			<tr>
				<th>Address:   <input type = "text" name = "address" placeholder = "# street, city, state, zip code"></th>
			</tr>
			<tr>
				<th>Card Number:   <input type = "text" name = "cardnum" placeholder = "####-####-####-####"></th>
			</tr>
			<tr>
				<th>Expiration Date:   <input type = "text" name = "cardnum" placeholder = "MM/YY"></th>
			</tr>
			<tr>
				<th>CVV Value:   <input type = "text" name = "cvv" placeholder = "###"></th>
			</tr>
			<tr>
				<th><button type = "submit" name = "vehicle-submit"> Pay </button></th>
			</tr>
		</form>
		</table>
	
	
	</main>
	
<?php


?>