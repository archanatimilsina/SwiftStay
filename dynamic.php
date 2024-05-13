<?php 
include('connection.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *
        {
            margin: 0;
            padding: 0;
        box-sizing: border-box;
        }
#home{
    display: flex;
    flex-direction: column;
    padding: 3px 200px;
    justify-content: center;
    align-items: center;
    height: 600px;
    margin-bottom: 100px;
 
 }
 #home::before{
     position: absolute;
     content: "";
     height: 95%;
     width: 100%;
     z-index: -1;
     opacity: 0.89;
     background: url('../img/home.jpg') center center/cover no-repeat;
 
 }
 #home .h1{
     color: black;
     font-size: 4rem;
     padding: 12px;
     text-align: center;
 }

    </style>
</head>
<body>
    


<?php 
$query1="SELECT * FROM ihome_img order by hid DESC";
$result1=mysqli_query($con,$query1);
$data=mysqli_fetch_assoc($result1);
$index_img = $data['home_img'];

?>
  <!-- ----------  Home --------------------- -->
  <section id="home">
        <h1 class="h1">Welcome to SwiftStay</h1>
        <img src="<?php echo 'admin/index/homepage/'.$index_img; ?>" alt="Home image">
    </section>

</body>
</html>