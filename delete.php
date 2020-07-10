<?php
	$con =mysqli_connect('127.0.0.1','root','');
	mysqli_select_db($con,'books');

	$sql ="DELETE FROM books WHERE ID='$_GET[id]'";
	if(mysqli_query($con,$sql)){
		echo("deleted");
		header("refresh:1;url=remove.php");
	}
	else
		echo "Not deleted";
	?>