<?php require('../connection.php');
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
if(isset($_GET['id']))
{
    $id=$_GET["id"];
    $query="DELETE FROM messages WHERE m_id='$id'";
    $result=mysqli_query($con,$query);
    header('location:admintry.php');
}

?>
</body>
</html>