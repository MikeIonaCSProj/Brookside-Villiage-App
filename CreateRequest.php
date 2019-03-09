<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Create Request Data</title>
		<link rel="stylesheet" type="text/css" href="TheBestCss4.css">
		<meta charset="utf-8">
	</head>
	<body>
		<?php

		include ("DatabaseConn.php");

			while($row = $result->fetch_assoc()) {

				echo '<form action="CreateDBRequest.php" method="get"> <tr>
					<td> <input type="text" name="newRequest" value='.$row["Request"]. '> </td>
					<td> <input type="text" name="newDate" value='.$row["Date"]. '> </td>
					<td> <input type="text" name="newCategory" value='.$row["Category"]. '> </td>
					<td> <input type="text" name="newPriority" value='.$row["Priority"]. '> </td>
					<td> <input type="text" name="newDescription" value='.$row["Description"]. '> </td>
				</tr>
					<input type="hidden" name="newUserID" value='.$row["UserID"]. '>
					<input type="submit">
				</form>';
		
			}
		} else {
				echo "That user does not exist.";
		}
		$conn->close();

		?>
	</body>
</html>
