<?php require('connection.php');
session_start();
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <script src="https://kit.fontawesome.com/c5a4938a4c.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@500&display=swap" rel="stylesheet">
 <style>
    *
    {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
   
.warn{
    border: solid 1px red;
    box-shadow:  4px 4px 10px -7px inset red;
    background-color:white;
}
.warn span{
    color: red;
    font-size: 19px;
    font-family: 'Baloo 2', cursive;
}
.warn i{
   margin: 7px;
}
 .aloginform{
width: 400px;
height: 470px;
margin: auto;
display: flex;
flex-direction: column;
border: solid 1px black;
padding: 30px;
justify-content: space-around;
margin-top: 70px;
    }
    #alogin-head
    {
        text-align: center;
        font-size: 23px;
        font-family: 'Baloo 2', cursive;
        margin-top: 20px;
    }
   
    .aloginform form{
       width: 100%;
       padding: 20px; 
       margin-top: -20px;
    }
    .aloginform form label{
        font-size: 21px; 
        font-family: 'Baloo 2', cursive;
        font-weight: 300;
    }
   
    .aloginform form input
    {
 width: 90%;
    margin: 10px;
    outline: none;
    border: 1px solid black;
     padding: 3px 0;
    text-align: center;
    font-family: 'Baloo 2', cursive;
    font-size: 16px;
    }
    
    #submit-btn
    {
background-color: black;
color: white;
    }
  
 </style>
</head>
<body>
   <h1 class="warn">
   <i class="fa-solid fa-triangle-exclamation" style="color: #ff0000;"></i>
   <span>You can login if you have official permission only!</span>
   </h1>
    <div class="aloginform">
<h1 id="alogin-head">Admin Login Form</h1>
<form action="#" method="POST">
<label for="name">Name</label>
<input type="text" name="name" height="30px"  required>
<label for="name">Email</label>
<input type="email" name="email" required >
<label for="name">Password</label>
<input type="password" name="password" required >
<label for="name">Secret Code</label>
<input type="text" name="scode" required >
<input type="submit" name="submit" value="submit" id="submit-btn">
</form>
</div>
 
 <?php 
 if (isset($_POST['submit']))
 {
$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];
$scode=$_POST['scode'];

$query="SELECT * FROM admins Where email='$email' OR secret_code='$scode'";
$result1=mysqli_query($con,$query);
if($result1)
{
if(mysqli_num_rows($result1)>=1)
{
$data=mysqli_fetch_assoc($result1);
if(password_verify($password,$data['password']))
{
    
    if(password_verify($scode,$data['secret_code']))
    {
        
    $_SESSION['admin_panel']['logged_in']=true;
$_SESSION['name']=$data['name'];
$_SESSION['admin_panel']['profile']=$data['profile'];
?>
<script>
window.location.href='admin/admin.php'; 
</script>
<?php  }

else
{
    ?>
    <script>
 alert("Your given code is incorrect!!");
 window.location.href='index.php';
</script>
<?php  
}
}
else
{
    echo "<script>
    alert('Incorrect password!!Try Again');
    window.location.href='index.php';
    </script>";
}
}
else{
    ?>
    <script>
 alert("Data Not Found!!!");
 window.location.href='index.php';
</script>
<?php 
}
}
else{
    ?>
    <script>
 alert("Cannot Run!!");
 window.location.href='index.php';
</script>
<?php
}
 }

 ?>
</body>
</html>