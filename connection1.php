<?php 
$server_name="localhost";
$user_name="root";
$password="";
$db_name="swiftstay_users";

$con=new mysqli($server_name,$user_name,$password,$db_name);

if(!$con)
{
    echo "Database is not connected";
}
?>