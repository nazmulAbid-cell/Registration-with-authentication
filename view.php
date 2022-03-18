<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="view.css">
</head>
<body>
<?php
include_once "database.php";
    $sql = " select * from addressbook";
    $query =   mysqli_query($conn,$sql);
?>
 
<table border ="1">
<tr>
  <th>Name</th>
  <th>Mobile</th>
  <th>Address</th>
  <th>Action</th>
</tr>
<?php
 while( $row = mysqli_fetch_array($query)){
?> 
    <tr>
        <td> <?php echo $row["Name"] ;?></td>
        <td> <?php echo $row["Mobile"] ;?></td>
        <td> <?php echo $row["Address"] ;?></td>
        <td>  <a href="update.php?id=<?php echo $row['ID']; ?>" class = "updatebtn" >Edit</a> /  <a href="delete.php?id=<?php echo $row['ID']; ?>" class = "delebtn" >delete</a> </td>
        
    </tr>

     <?php }  ?>



</table>

</body>
</html>