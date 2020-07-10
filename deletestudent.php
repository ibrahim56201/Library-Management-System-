<?php
	$con =mysqli_connect('127.0.0.1','root','');
	mysqli_select_db($con,'tutorial1');

	$sql ="DELETE FROM user1 WHERE ID='$_GET[id]'";
	if(mysqli_query($con,$sql)){
		echo("Removed");
		header("refresh:1;url=blockstudent.php");
	}
	else
		echo '<script>window.alert("Not Removed");window.location.href="add.html";</script>';
	?>