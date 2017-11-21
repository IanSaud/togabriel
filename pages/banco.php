<?php
$con=mysqli_connect("localhost","root","","riobus");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

// Perform queries 
mysqli_query($con,"SELECT * FROM Excursao");

phpinfo();

mysqli_close($con);
?>