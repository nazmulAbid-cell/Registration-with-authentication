<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname= "assingment";

$conn = mysqli_connect($servername,$username,$password,$dbname);
if(!$conn)
{
  die("connection faield".mysqli_connect_error());
}

?>


