<?php

$con = mysqli_connect('127.0.0.1','root','');

if(!$con)
{
	echo 'Not connected to database';
}

if(!mysqli_select_db($con,'books'))
{
	echo 'Database not selected';
}

$bookname = $_POST['bookname'];
$bookauthor = $_POST['bookauthor'];
$quantity = '1';

$query = mysqli_query($con," SELECT * FROM books WHERE bookname='$_POST[bookname]' and bookauthor='$_POST[bookauthor]'");
  $rowcount=mysqli_num_rows($query);
  if($rowcount==true)
  {
  	mysqli_query($con,"UPDATE books set quantity=quantity+1 WHERE bookname='$_POST[bookname]' and bookauthor='$_POST[bookauthor]'");
  }
  else
  {
	$sql = "INSERT INTO books (bookname,bookauthor,quantity) VALUES ('$bookname','$bookauthor','$quantity')";
	$query = mysqli_query($con,$sql);
   }
if(!$query)
{
	echo '<script>window.alert("book not registered");window.location.href="add.html";</script>';
}

else
{
	echo 'Book Registered successfully';
}

header("refresh:2; url=add.html");

?>
