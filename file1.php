<?php
include('connection.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IMAGE UPLOAD</title>
</head>
<body>
    <form action="#" method="POST" enctype="multipart/form-data">
        <label for="image">Image</label>
        <input type="file" name="uploadfile"><br><br>
        <input type="submit" name="submit" value="upload">
    </form>
    <div class="hello" width="100px" height="300px">
        <img src="<?php echo $data['img_source'] ;?>" alt="" width="100px" height="300px">
    </div>

</body>
</html>
<?php


$filename= $_FILES["uploadfile"]["name"];
$tempname= $_FILES["uploadfile"]["tmp_name"];
// print_r($_FILES['uploadfile']);
$folder="images/".$filename;

move_uploaded_file($tempname,$folder);




$query="INSERT INTO std_img (img_source) values ('$folder')";
$result=mysqli_query($con,$query);


$qry="SELECT * FROM std_img";
$result=mysqli_query($con,$qry);
$data=mysqli_fetch_assoc($result);


?>
