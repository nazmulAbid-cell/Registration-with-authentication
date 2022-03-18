<?php
include_once "database.php";
if(isset($_POST['submit'])){
    $name = $_POST["name"];
    $email = $_POST["email"];
    $pass = $_POST["pwd"];
    $ancriptPass = md5($pass);
    $mobile = $_POST["mobile"];
    $sql = mysqli_query($conn," INSERT INTO registration (Name,Email,Mobile,Password) VALUES ('$name','$email','$mobile','$pass')");

    if($sql)
    {
        $sql1 =  mysqli_query($conn," INSERT INTO user (Username,Password) VALUES ('$email','$ancriptPass')");
        
    }
    
    if (mysqli_query($conn,$sql1)) {
		echo "Data insert successfully";
	}
	else
	{
		echo "Sorry! data not added";
	}
}

	
?>






