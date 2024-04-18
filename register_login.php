<?php require('connection1.php'); 
session_start();
?>

<!-- login -->
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
$_SESSION['logged_in']==true;
$_SESSION['username']=$data['username'];

header('location:index.php');
}
else
{
    echo "<script>
    alert('Incorrect password!!Try Again');
    window.location.href:'index.php';
    </script>";
}
}
else{
    echo "<script>
    alert('Incorrect password or username!!Try Again');
    window.location.href:'index.php';
    </script>";
}
    }
    else
    {
        echo "<script>
alert('cannot run');
window.location.href:'index.php';
</script>";
    }
}

?>
<!-- registration -->

<?php 
if(isset($_POST['register']))
{
$name=$_POST['fullname'];
$username=$_POST['username'];
$email=$_POST['email'];
$password=$_POST['password'];


$password=password_hash($password,PASSWORD_BCRYPT);
$query="INSERT INTO users (name,username,email,password) VALUES ('$name','$username','$email','$password')";
$result=mysqli_query($con,$query);

if($result)
{
   echo "<script>
    alert('Registration Successful')
    </script>";
}
else{
    echo "<script>
    alert('Error Occurred!')
    </script>";
}
}
?>



