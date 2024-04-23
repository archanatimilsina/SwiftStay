<?php require('../connection.php');

session_start();?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@500&display=swap" rel="stylesheet">
    <title>Profile</title>
    <style>
        .profile{
            width: 400px;
            height: 200px;
            border: 1px solid black;
            margin: auto;
            margin-top: 80px;
        }
        .profile-head{
            margin-top: 20px;
            text-align: center;
            font-size: 22px;
             font-family: 'Baloo 2', cursive;
        }
       .profile form label{
            display: inline;
            font-size: 18px;
             font-family: 'Baloo 2', cursive;
             margin-left: 10px;
        }
        .profile form{
            display: flex;
           flex-direction: column;
        }
        .profile form input{
            margin: 8px;
        }
        .display{
            width: 40px;
            height: 40px;
            border: 1px solid black;
            margin: auto;
            margin-top: 80px;  
            border-radius: 50%;
        }
        .display img{
       width: 40px;
       height: 40px;
       border-radius: 50%;
        }
    </style>
</head>
<body>
  <div class="profile">
    <h1 class="profile-head">Upload your Profile Picture</h1>
    <form action="#" method="POST" enctype="multipart/form-data">
        <label for="image">Upload here:</label>
<input type="file" name="uploadfile">
<input type="submit" name="submit_image" value="Upload">
    </form>
  </div>  

  <?php
  if(isset($_POST['submit_image']))
  {
    $filename=$_FILES['uploadfile']['name'];
    $tmpname=$_FILES['uploadfile']['tmp_name'];
    $folder="uploads/".$filename;

    if(move_uploaded_file($tmpname,$folder))
    {
        echo "File Uploaded";
        $_SESSION['admin_panel']['profile']=$folder;
    }
    else{
        echo "Unable to upload";
    }

  }
  
  ?>
  <div class="display">
    <img src="<?php echo $_SESSION['admin_panel']['profile'];?>" alt="#" width="100%" height="100%">
  </div>
</body>
</html>