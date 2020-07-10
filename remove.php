<?php
	$con =mysqli_connect('127.0.0.1','root','');
	mysqli_select_db($con,'books');

$bookname=$_POST['bookname'];
$result=mysqli_query($con,"SELECT*FROM books WHERE bookname='$bookname'");
echo"<table border=1>
<tr>
<th>id</th>
<th>bookname</th>
<th>bookauthor</th>
</tr>";

while($row=mysqli_fetch_array($result))
{
	echo"<tr>";
	echo"<td>".$row['id']."</td>";
	echo"<td>".$row['bookname']."</td>";
	echo"<td>".$row['bookauthor']."</td>";
	echo "<td><a href=deletebook.php?id=".$row['id'].">Remove book</a></td>";
	echo"</tr>";
}
echo"</table>";

mysqli_close($con);
?>