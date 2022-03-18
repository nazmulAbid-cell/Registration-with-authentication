<?php
include_once "database.php";
if (isset($_GET['id'])) {
    $id = $_GET['id'];
echo $id;

$query = mysqli_query($conn," select * from addressbook where ID = '$id'");
$row = mysqli_fetch_array($query);
$prename = $row['Name'];
$premobile = $row['Mobile'];
$preaddress = $row['Address'];
if(isset($_POST['update'])){
    $name = $_POST["name"];
    $address = $_POST["address"];
    $mobile = $_POST["mobile"];
    $sql = mysqli_query($conn," INSERT INTO addressbook (Name,Mobile,Address) VALUES ('$name','$mobile','$address')");

    $updatequery =mysqli_query($conn, "UPDATE addressbook SET Name = '$name', Mobile = '$mobile', Address = '$address' where ID = '$id'");

}

}

?>
<form action = "" method = "POST">
    Name:<br>
     <input type = "text" name = "name" value = "<?php echo $prename;?>"><br>
	Mobile:<br>
	 <input type="number" name="mobile"  value = "<?php echo $premobile;?>"><br>
     Address:<br>
     <input type= "text"   name = "address" value = "<?php echo $preaddress;?>"><br>
     <input type = "submit" name = "update">



</form>

