<?php require('connection1.php'); 
session_start();?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
if(isset($_POST['login']))
{
    $email_username=$_POST['email_username'];
    $password=$_POST['password'];
    $query="SELECT * FROM users WHERE email='$email_username' OR username='$email_username'";
    $result=mysqli_query($con,$query);
    if($result)
    {
if(mysqli_num_rows($result)>=1)
{
    $data=mysqli_fetch_assoc($result);
if(password_verify($password,$data['password']))
{
    $_SESSION['user_panel']['logged_in']=true;
$_SESSION['username']=$data['username'];
?>
<script>
window.location.href='index.php'; 
</script>
<?php
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
    echo "<script>
    alert('Incorrect password or username!!Try Again');
    window.location.href='index.php';
    </script>";
}
    }
    else
    {
        echo "<script>
alert('cannot run');
window.location.href='index.php';
</script>";
    }
}

?>



</body>
</html>

