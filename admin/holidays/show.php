<?php include('../../connection.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Page</title>
    <style>
       *{
margin: 0;
padding: 0;
box-sizing: border-box;
        }



    </style>
</head>
<body>
    <?php 
     if(isset($_GET['id']))
     {
        $id=$_GET['id'];
$select="SELECT * FROM holidays where hid='$id'";
$result=mysqli_query($con,$select);
$data=mysqli_fetch_assoc($result);
     }
?>
  

</body>
</html>
