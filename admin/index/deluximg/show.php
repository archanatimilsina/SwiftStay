<?php include('../../../connection.php'); ?>
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

/* #home{
    display: flex;
    flex-direction: column;
    padding: 3px 200px;
    justify-content: center;
    align-items: center;
    height: 600px;
    margin-bottom: 100px;
 
 }

 #home img{
    position: absolute;
    height: 95%;
     width: 100%;
     z-index: -1;
     opacity: 0.89;
    background: center center/cover no-repeat ;
 } */
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
$select="SELECT * FROM idelux_img where did='$id'";
$result=mysqli_query($con,$select);
$data=mysqli_fetch_assoc($result);
     }
?>
  <div class="thumbnail">
          <img src="<?php echo $data['delux_img'];?>" alt="delux" class="imgFluid">
          </div>
<!-- <section id="home">
        <img src="" alt="#">
    </section>   -->
</body>
</html>
