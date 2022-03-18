<?php
include_once "database.php";
if (isset($_GET['id'])) {
    $id = $_GET['id'];
echo $id;

$deletequery = mysqli_query($conn," delete from addressbook where ID = '$id'");

   // $updatequery =mysqli_query($conn, "UPDATE addressbook SET Name = '$name', Mobile = '$mobile', Address = '$address' where ID = '$id'");

}

?>

