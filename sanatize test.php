<!doctype>
<html>
<head>
<?php
	
/*$sql="INSERT INTO equipment (itemName, itemLocation, itemSport, itemAssignment, itemDescription)
		VALUES
		('$_POST[itemName]','$_POST[itemLocation]','$_POST[itemSport]','$_POST[itemAssignment]','$_POST[itemDescription]')";*/


  $good_string = sanitize($bad_string);
  // $good_string returns "Hi! It\'s a good day!"

  // Also use for getting POST/GET variables
  $_POST = sanitize($_POST);
  $_GET  = sanitize($_GET);?>
<?php
	function sanitize($input) {
		if (is_array($input)) {
			foreach($input as $var=>$val) {
				$output[$var] = sanitize($val);
			}
		}
		else {
			if (get_magic_quotes_gpc()) {
				$input = stripslashes($input);
			}
			$input  = cleanInput($input);
			$output = mysql_real_escape_string($input);
		}
		return $output;
	}
?>
 <?php include "sanatizeInputs.php"; ?>
 </head>
 <body>
 <form action="" method="post">
				<table>
				<tr>
					<td class="label">netID: (Username)</td> 
					<td><input type="text" name="userName" value=""></td>
					<td>@alfredstate.edu</td>    
				</tr>
				<tr>
					<td class="label">Password: </td> 
					<td><input type="password" name="password" value=""></td>
				</tr>
				</table>
</form>
 </body> 
</html>