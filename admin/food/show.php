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


 .thumbnail{
    width: 700px;
    height: 500px;
    position: relative;
    margin: auto;
    margin-top: 20px;
    border: 1px solid black;
    
}
.thumbnail img{
    position: absolute;
    width: 700px;
    height: 500px;
}
    </style>
</head>
<body>
    <?php 
     if(isset($_GET['id']))
     {
        $id=$_GET['id'];
$select="SELECT * FROM iac_img where aid='$id'";
$result=mysqli_query($con,$select);
$data=mysqli_fetch_assoc($result);
     }
?>
  <div class="thumbnail">
          <img src="<?php echo $data['ac_img'];?>" alt="ac" class="imgFluid">
          </div>

</body>
</html>
