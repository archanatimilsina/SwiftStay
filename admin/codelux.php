<?php include('../connection.php'); ?>
<?php
$rno=$_GET['rno'];

$qry="UPDATE deluxac_room SET status='available' WHERE room_no='$rno'";
$result=mysqli_query($con,$qry);
if($result)
{
 header('location:roomstatus.php');
}

?>