<?php include('../../connection.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Page</title>
    <style>
        *
        {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
#tp-btn
        {
            background-color: blue;
            color: white;
            font-size: 16px; 
        font-family: 'Baloo 2', cursive;
        width: 150px;
        height: 40px;
   margin: 50px 50px;
   border-radius: 10px;
        }
        .aregisterform{
width: 400px;
height: 350px;
margin: auto;
display: flex;
flex-direction: column;
background-color: white;
padding: 30px;
justify-content: space-around;
margin-top: 30px;
border: solid 1px black;
    }
.aregisterform:hover{
    
    border-radius: 10px;
    background-color: lavender;
}
    
    #aregister-head
    {
        text-align: center;
        font-size: 23px;
        font-family: 'Baloo 2', cursive;
        margin-top: 20px;
    }
   
    .aregisterform form{
       width: 100%;
       padding: 20px; 
    
    }

    .aregisterform form label{
        font-size: 21px; 
        font-family: 'Baloo 2', cursive;
        font-weight: 300;
    }
   
    .aregisterform form input
    {
 width: 90%;
    margin: 10px;
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
<section class="main">
<div class="container">
    <a href="create.php"><button id="tp-btn">Manage Tasks</button></a>
  <?php 
  if(isset($_GET['id']))
  {
    $id=$_GET['id'];
    $select="SELECT * FROM holidays where hid='$id'";
    $result=mysqli_query($con,$select);
    $data=mysqli_fetch_assoc($result);
  }
  ?>
   <!-- form -->
  <div class="aregisterform">
<h1 id="aregister-head">Holiday Update</h1>
<form action="#" method="POST" enctype="multipart/form-data">

<label for="subject">Subject</label>
<input type="text" name="subject" height="30px" required>
<label for="holiday date">Holiday Date</label>
<input type="date" name="holdate" height="30px" required>

<input type="submit" name="submit" value="submit" id="submit-btn">
</form>
</div>
  <!-- form -->
<?php
 if(isset($_POST['submit']))
 {
    $subject=$_POST['subject'];
    $holdate=$_POST['holdate'];

$query1="UPDATE holidays SET subject='$subject', hdate='$holdate' Where hid='$id'";
$result1=mysqli_query($con,$query1);

if($result1)
{
   ?>
   <script>
alert("Data Updated Successfully");
document.location.href='index.php';
</script>
<?php
}
 else{
   ?>
   <script>
alert("Cannot Run!!!");
document.location.href='edit.php';
</script>
<?php
 }

 }
?>

</div>
    </section>
</body>
</html>