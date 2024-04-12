
<?php 
include('connection.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $n=1;

    $query="SELECT * FROM deluxac_room Where status='available'";
 $result=mysqli_query($con,$query);
 $data=mysqli_num_rows($result);


 $data1=mysqli_fetch_array($result);
 while($data1)
 {
     print_r($data1);
 }
?>   
</body>
</html>