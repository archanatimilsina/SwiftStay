<?php
include('connection.php');
// $ci=$_GET['ci'];
//  $co=$_GET['co'];
//  $rt=$_GET['rt'];
//  $nr=$_GET['nr'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ac room form</title>
</head>
<style>
     .head{
            text-align: center;
            font-size: 30px;
            font-weight: 200;
             color: #fa9579 ;
        }
        #delux-book{
            width: 50%;
            height: 820px;
            border: solid 1px black;
            margin: auto;
            margin-top: 10px; 
            background-color:#fa9579 ;
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
<body>
<h1 class="head">Please fill up the form first</h1>
<section id="delux-book">
    <h1 class="box-head">
Delux AC Room
    </h1>
    
    <div class="user-data">
        <form action="r11.php" method="post">
            <table>
                <tr>
                    <td>Status</td>
                    <td><input type="text" placeholder="Available"></td>
                </tr>
                <tr>
                    <td>Roomtype</td>
                    <td><input type="text" value="Delux Ac" name="rt"></td>
                </tr>
                <tr>
                    <td>Name</td>
                    <td><input type="text" name="name" required></td>
                </tr>
                <tr>
                    <td>Address</td>
                    <td><input type="text" name="address" required></td>
                </tr>
                <tr>
                    <td>City</td>
                    <td><input type="text" name="city" required></td>
                </tr>
                <tr>
                    <td>Phone</td>
                    <td><input type="text" name="phone" required></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input type="text" name="email" required></td>
                </tr>
                <tr>
                    <td>Check In Date</td>
                    <td><input type="date" name="cin" required></td>
                </tr>
                <tr>
                    <td>Chech Out Date</td>
                    <td><input type="date" name="cout" required><td>
                </tr>
                <tr>
                    <td>Members</td>
                    <td><input type="text" name="members" required></td>
                </tr>
                <tr>
                    <td>No Of Room</td>
                    <td><input type="text" name="nr" value="" required></td>
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
            $name=$_POST['name'];
        $address=$_POST['address'];
        $state=$_POST['state'];
        $city=$_POST['city'];
        $email=$_POST['email'];
        $ci=$_POST['cin'];
        $co=$_POST['cout'];
        $members=$_POST['members'];
        $roomtype=$_POST['roomtype'];
        $noofroom=$_POST['noofroom'];

        $qryy="SELECT * FROM `deluxac_room` WHERE status='available'";
        $run=mysqli_query($con,$qryy);
        $data=mysqli_fetch_assoc($run);
        print_r($data);
        // $rno=$ow['roomno'];
//         $row=mysqli_fetch_assoc($run);
//         $rno=$row['room_no'];
//             $qry="INSERT INTO 'room_booking' ('name', 'address', 'state', 'city', 'email', 'cin', 'cout', 'members', 'roomtype', 'no of rooms') VALUES ('$name', '$address', '$state', '$city', '$email', '$ci', '$co', '$members', '$roomtype', '$noofroom');";
//             $run=mysqli_query($con,$qry);
//             if($run==true)
//             {
//                 mysqli_query($con,"UPDATE 'deluxac_room' SET status='Booked' WHERE 'room_no'='$rno'");
//                 header('location:cartpayment2.php');
//                 ?>
//                 <script>
//                     alert("Room Booked Successfully");
//                 </script>
//                 <?php
//             }
//             else{
// echo "try again";
//             }

        }
    
    ?>

</body>
</html>