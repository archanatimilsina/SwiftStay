<?php require('connection1.php');?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php 
if(isset($_POST['register']))
{
$filename=$_FILES['profile']['name'];
$tmpname=$_FILES['profile']['tmp_name'];
$folder="uploads/".$filename;
move_uploaded_file($tmpname,$folder);
$name=$_POST['fullname'];
$username=$_POST['username'];
$email=$_POST['email'];
$password=$_POST['password'];
$check_query="SELECT * FROM users WHERE email='$email' or username='$username'";
$check_result=mysqli_query($con,$check_query);
$data=mysqli_fetch_array($check_result);
if($check_result)
{
    // check
    echo" <script>
    alert('hello3');
    window.location.href='index.php';
    </script>";
        // check
if(mysqli_num_rows($check_result)>0)
{
    // check
    echo" <script>
    alert('hello4');
    window.location.href='index.php';
    </script>";
        // check
if($_POST['username']=$data['username'])
{
    echo" <script>
    alert('Username already taken');
    window.location.href='index.php';
    </script>";
}
else{
    echo" <script>
    alert('Email already taken');
    window.location.href='index.php';
    </script>";
}
}
else{
     $password=password_hash($password,PASSWORD_BCRYPT);
     $query="INSERT INTO users (profile,name,username,email,password) VALUES ('$folder','$name','$username','$email','$password')";
$result=mysqli_query($con,$query);
if($result)
{
    // check
    echo" <script>
alert('hello1');
window.location.href='index.php';
</script>";
    // check
echo" <script>
alert('Registration successful');
window.location.href='index.php';
</script>";
}
else{
     // check
     echo" <script>
     alert('hello2');
     window.location.href='index.php';
     </script>";
         // check
    echo "<script>
    alert('Cannot Run!');
     window.location.href='index.php';
    </script>";
}
}

}
else{
    echo "<script>
    alert('cannot run!');
     window.location.href='index.php';
    </script>";
}
}
?>

</body>
</html>



