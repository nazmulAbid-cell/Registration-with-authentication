<!DOCTYPE html> 
<html> 
<head>
    <style>
     
     .b{
        text-decoration:none;
  display: inline-block;
  background: #000;
  border-radius: 4px;
  font-family: "arial-black";
  font-size: 16px;
  color: #FFF;
  padding: 8px 12px;
  cursor: pointer;   
}

.b1{
        text-decoration:none;
  display: inline-block;
  background: #000;
  border-radius: 4px;
  font-family: "arial-black";
  font-size: 16px;
  color: #FFF;
  padding: 8px 12px;
  cursor: pointer;  
  margin:10px 
}



   </style>

</head>
<body>
<?php
include_once "database.php";
if(isset($_POST['submit1'])){
    $Username = $_POST["fname"];
    $pass = $_POST["pwd1"];
    $enc_pass = md5($pass);

    $query = mysqli_query($conn,"select * from user where Username= '$Username' and Password = '$enc_pass'");
    $count = mysqli_num_rows($query);

    //echo $count;
    if($count){      
        if(isset($_POST['button1'])) {
            header("location: insert.php");
        }
        if(isset($_POST['button2'])) {
            echo "This is Button2 that is selected";
        }
        
    }else{
        echo "please do registration first ";
    }

}

?>


        <a href = "insert.php" class= "b"> Insert new Record </a>
        <a href = "view.php" class = "b1">  view Record </a>

</body>

</html>

