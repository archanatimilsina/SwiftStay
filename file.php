<?php  include('connection.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IMAGE UPLOAD</title>
    <style>
        .file-upload{
            margin: auto;
            width: 300px;
            height: 300px;
            border: solid 1px black;

        }
        .file-upload form{
            width: 100%;
            height: 100%;
            padding: 30px;
        }
        .file-upload form input{
            margin: 20px;
        }
        .image{
            width: 70px;
            height: 70px;
            border: 2px solid black;
            border-radius: 50%;
           margin: auto;
        }
        

    </style>
</head>
<body>
    <div class="file-upload">
<form action="#" method="POST" enctype="multipart/form-data">
<input type="file" name="image">
<input type="submit" name="submit">
</form>
    </div>
    <?php 
    
    if(isset($_POST['submit']))
    {
        $file_name=$_FILES['image']['name'];
        $tempname=$_FILES['image']['tmp_name'];
        $folder='images/'.$file_name;

        $query1="INSERT INTO images (image) values ('$file_name')";
        $result1=mysqli_query($con,$query1);



        $qry="SELECT * FROM images";
        $result=mysqli_query($con,$qry);

while($data=mysqli_fetch_assoc($result))
{
   ?> 
      <div class="image"> 
<img src="images/<?php echo $data['image']; ?>" alt="#">
     </div>    
        <?php
  }
 
}
    ?>
</body>
</html>