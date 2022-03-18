<?php
include_once "database.php";
if(isset($_POST['submit2'])){
    $name = $_POST["name"];
    $address = $_POST["address"];
    $mobile = $_POST["mobile"];
    $sql = mysqli_query($conn," INSERT INTO addressbook (Name,Mobile,Address) VALUES ('$name','$mobile','$address')");
//i am sorry for doing wierd thing 
//problem is data  is inserting succesfully in data base despite it executing the else statemennt that why i  obliged to print 
//succesfull message in else block  

    if (mysqli_query($conn,$sql)) {

		function_alert(" Eorr !!");
	}
	else
	{
			function_alert(" successfull Inserted");
  
	}
}
function function_alert($message) {
      
    // Display the alert box 
    echo "<script>alert('$message');</script>";
}

	
?>






