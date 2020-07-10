<?php

$con = mysqli_connect('127.0.0.1','root','');

if(!$con)
{
	echo 'Not connected to database';
}

if(!mysqli_select_db($con,'tutorial'))
{
	echo 'Database not selected';
}

$Name = $_POST['Name'];
$Email = $_POST['Email'];
$Password = $_POST['Password'];
$Confirm_password = $_POST['Confirm_password'];
if($Password==$Confirm_password)
{
	$sql = "INSERT INTO userreg (Name,Email,Password,Confirm_password) VALUES ('$Name','$Email','$Password','$Confirm_password')";
	$query = mysqli_query($con,$sql);
}
else{
	echo '<script>window.alert("Passwords donot match");</script>';
}
if(!$query)
{
	echo '<script>window.alert("Not registered");window.location.href="admin.html";</script>';
}

else
{
	echo 'Registered';
}

header("refresh:2; url=admin.html");

?>
