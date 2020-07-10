 <html>

<title>
        block/remove student
</title>

<head>
  <link rel="stylesheet" type="text/css" href="style.css">

</head>

<body>
<div align="center">
  <h1>LIBRARY MANAGEMENT SYSTEM</h1>
</div>
<div>
<ul>
  <li><a class="activate" href="homeadmin.html">Home</a></li>
    <li style="float:right"><a  href="logoutadmin.php">Logout</a></li>
  <li style="float:right"><a href="contact.html">Contact</a></li>
  <li style="float:right"><a  href="about.html">About</a></li>
  
</ul>
</div>
<div class="sidenav">
  <a href="add.html">Add Book</a>
  <a href="remove.html">Remove Book</a>
  <a href="searchadmin.html">Search Book</a>
  <a href="blockstudent.php">Delete student</a>
</div>
<div>
<table align="center"border=1 cellpadding=1 cellspacing=1 id="container" style="background-color: #e5e4d7" >
  <tr>
    <th>Name</th>
    <th>Email</th>
  </tr>
  <?php
    $con =mysqli_connect('127.0.0.1','root','');
    mysqli_select_db($con,'tutorial1');
    $sql="SELECT * FROM user1";
    $records=mysqli_query($con,$sql);
    while($row=mysqli_fetch_array($records))
    {
      echo "<tr>";
      echo "<td>".$row['Name']."</td>";
      echo "<td>".$row['Email']."</td>";
      echo "<td><a href=deletestudent.php?id=".'$row[id]'.">Remove</a></td>";
    }
  ?> 
</table>
</div>

</body>

</html>