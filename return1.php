 <html>

<title>

  lend page

</title>

<head>
  <link rel="stylesheet" type="text/css" href="style.css">

</head>

<body>
<div align="center">
  <h1>LIBRARY MANAGEMENT SYSTEM</h1>
</div>
<ul>
  <li><a class="activate" href="homestudent.html">Home</a></li>
    <li style="float:right"><a  href="logoutstudent.php">Logout</a></li>
  <li style="float:right"><a href="contact.html">Contact</a></li>
  <li style="float:right"><a  href="about.html">About</a></li>
</ul>
</div>
  <div class="sidenav">
  <a href="lend.html">Lend Book</a>
  <a href="return.html">Return Book</a>
  <a href="search.html">Search Book</a>
</div>
<div id="container">
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
$quantity = '';

$query = mysqli_query($con," SELECT * FROM books WHERE bookname='$_POST[bookname]' and bookauthor='$_POST[bookauthor]'");
  $rowcount=mysqli_num_rows($query);
  if($rowcount==true)
  {
    if($quantity=='0')
    {
      echo "books not available";
    }
    else
    {
    mysqli_query($con,"UPDATE books set quantity=quantity+1 WHERE bookname='$_POST[bookname]' and bookauthor='$_POST[bookauthor]'");

    $sql="SELECT * FROM books WHERE bookname='$_POST[bookname]' and bookauthor='$_POST[bookauthor]'";
    $records=mysqli_query($con,$sql);
    while($row=mysqli_fetch_array($records))
    {
        echo "thank you for returning ".$row['bookname']." <br> Books Remaining:".$row['quantity']." ";
    }
    }
  }   
  else
  {
    echo "Book not found";
  }

  ?> 
</div>

</body>

</html>

