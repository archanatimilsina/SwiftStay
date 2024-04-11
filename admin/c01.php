<?php
include('../connection.php');
$rno=$_GET['rno'];
if(mysqli_query($con,"UPDATE `ac_room` SET `status`='Available' WHERE `room_no`='$rno' "))
{
    header('location:roomdetails.php');
}
?>