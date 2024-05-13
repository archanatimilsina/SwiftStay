<?php 
include('connection.php');
$x=0;
 $nr=$_GET['nr'];
 $ci=$_GET['ci'];
 $co=$_GET['co'];
 $rt=$_GET['rt'];
session_start();

if(!isset($_SESSION["username"])  )
{
    ?>
    <script>
 alert(" Please Login First");
 window.location.href='index.php';
</script>
<?php

}


?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delux AC Room Book</title>
    <style>
        .head{
            text-align: center;
            font-size: 30px;
            font-weight: 200;
             color:black;
        }
        #delux-book{
            width: 50%;
            height: 820px;
            border: solid 1px black;
            margin: auto;
            margin-top: 10px; 
            background-color:lavender;
        }
        .box-head{
            text-align: center;
            font-size: 30px;

        }
        .user-data
        {
            width: 100%;
         
           
        }
        .user-data form{
            width: 100%;
         
        }

        .user-data form table{
            width: 100%;
            display: flex;
            flex-direction: row;
            justify-content: center;
            padding: 10px;
           
        }
        .user-data form table tr td{
            font-size: 22px;
            margin: 5px;
        }
        .user-data form table tr td input{
            width: 100%;
            height: 30px;
            margin: 10px;
            font-size: 19px;

        }
        #book-button{
            width: 70%;
           margin: 20px 50px;
        }
    
    </style>
</head>
<body>
    <h1 class="head">Please fill up the form first</h1>
<section id="delux-book">
    <h1 class="box-head">
Delux AC Room
    </h1>
    
    <div class="user-data">
        <form action="deluxbook.php" method="POST">
            <table>
                <tr>
                    <td>Status</td>
                    <td><input type="text" value="Available"></td>
                </tr>
                <tr>
                    <td>Roomtype</td>
                    <td><input type="text" name="rt" value="<?php echo $rt;?>"></td>
                </tr>
                <tr>
                    <td>Full Name</td>
                    <td><input type="text" name="name" required pattern="(^[a-zA-Z]{1,20} [a-zA-Z]{1,20}$)"  title="FirstName <space> LastName"></td>
                </tr>
                <tr>
                    <td>Address</td>
                    <td><input type="text" name="address" required ></td>
                </tr>
                <tr>
                    <td>City</td>
                    <td><input type="text" name="city" required ></td>
                </tr>
                <tr>
                    <td>Phone</td>
                    <td><input type="text" name="phone" required maxlength="12"></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input type="text" name="email" required pattern=".+@gmail\.com"></td>
                </tr>
                <tr>
                    <td>Check In Date</td>
                    <td><input type="date" name="cin"  value="<?php echo $ci; ?>" required></td>
                </tr>
                <tr>
                    <td>Check Out Date</td>
                    <td><input type="date" name="cout" value="<?php echo $co; ?>" required><td>
                </tr>
                <tr>
                    <td>Members</td>
                    <td><input type="text" name="members" required maxlength></td>
                </tr>
                <tr>
                    <td>No Of Room</td>
                    <td><input type="text" name="nr" value="<?php echo $nr; ?>" required></td>
                </tr>
                <tr>
              <td colspan="2">
              <input type="submit" value="Book" name="book" id="book-button">
             </td>
           </tr>
            </table>
        </form>
    </div>
</section>

<?php 
if(isset($_POST['book']))
{
    $roomtype=$_POST['rt'];
    $name=$_POST['name'];
    $address=$_POST['address'];
    $city=$_POST['city'];
    $phoneno=$_POST['phone'];
    $email=$_POST['email'];
    $cin=$_POST['cin'];
    $cout=$_POST['cout'];
    $rt=$_POST['rt'];
    $members=$_POST['members'];
    $nr=$_POST['nr'];
$user=$_SESSION['user'];
   $n=1;
    while($n<=$nr)
    { 
    $query="SELECT * FROM deluxac_room WHERE status='available'";
    $result1=mysqli_query($con,$query);
    $data=mysqli_fetch_assoc($result1);
    $rno=$data['room_no'];
$query1="INSERT INTO room_booking (name,room_no,address,city,phone,email,cin,cout,members,room_type,no_of_room) VALUES ('$name','$rno','$address','$city','$phoneno','$email','$cin','$cout','$members','$rt','$nr')";
$result=mysqli_query($con,$query1);

if($result==true)
{
$query2="UPDATE deluxac_room SET status='booked' WHERE room_no='$rno'";
$result1=mysqli_query($con,$query2);

} 
else{
    ?>
    <script>
    alert("Error! Try Again");
   </script>
   <?php
} 
$n++;
}
if($result1==true)
{
    ?>
    <script>
 alert("Room Booked Successfully");
 window.location.href='index.php';
</script>
<?php

}
}
?>
</body>
</html>