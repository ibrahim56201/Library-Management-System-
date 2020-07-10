<?php
if(isset($_POST["submit"])){
$con=mysqli_connect('127.0.0.1','root','');
if(!$con){
echo 'not connected to database';
}
if(!mysqli_select_db($con,'tutorial1'))
{
echo 'database not seleted';
}
  $query = mysqli_query($con," SELECT * FROM user1 WHERE Email='$_POST[Email]' and Password='$_POST[Password]'");
  $rowcount=mysqli_num_rows($query);
  if($rowcount==true){
    echo '<script>window.alert("Logged in");window.location.href="homestudent.html";</script>';
  }
  else{
    echo '<script>window.alert("invalid details");</script>';
  }
}
header("refresh:2;url=student.html");
?>