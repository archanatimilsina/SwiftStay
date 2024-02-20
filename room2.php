<?php 
include('connection.php');
include('inc/header.php') ?>
<style>
    .room-status{
        display: none;
    }
</style>

<div id="room-home">
     <figure>
         <img src="img/deluxroom.jpg" alt="delux">
         <img src="img/delux2.jpg" alt="delux">
         <img src="img/delux3.jpg" alt="delux">
         <img src="img/deluxroom.jpg" alt="delux">
         <img src="img/delux3.jpg" alt="delux">
     </figure>
</div>

<div id="f1">
    <h2 class="room-h2"><i class="fas fa-hotel"></i>SEARCH YOUR ROOMS HERE</h2>
         <form action="room.php " method="GET"> 
         <table >
             <tr>
                 
                <th width="20%" height="50px" required>Check In Date</th>
                 <th width="20%" height="50px" required>Check Out Date</th>
                 <th width="20%" height="50px">Room</th>
                 <td rowspan="2"><input type="submit" name="sub" id="check-btn" value="Check"></td>
             </tr>
             <tr>
                
                <td width="20%" height="50px"><input type="date" name="ci" required></td>
                 <td width="20%" height="50px"><input type="date" name="co" required></td>
                 <td width="20%" height="50px">
                    <select name="room">
                         <option >1</option>
                         <option >2</option>
                         <option >3</option>
                         <option >4</option>
                         <option >5</option>
                     </select>
            </form>
                 </td>
             </tr>
         </table>

         <?php 
         if(isset($_GET['sub']))
         {
                $r = $_GET['room'];
                 $ci=$_GET['ci'];
               $co=$_GET['co'];
         }
         ?>

         <!---------------------------------  delux ac--------------------- -->
         <?php
               $qryy="SELECT * FROM `deluxac_room` WHERE `status`='un book'";
               $run=mysqli_query($con,$qryy);
               $row=mysqli_fetch_assoc($run);
               $rno=$row['roomno'];

               $qry="SELECT * FROM `deluxac_room` WHERE `status`='un book'";
               $run=mysqli_query($con,$qry);
               $row=mysqli_num_rows($run);
               if($r <= $row)
               {
                   ?>
                   <section id="rooms-right">
                   <div class="paras">
                     <p class="sectionTag">Delux A.C. Room</p>
                     <p class="sectionsubTag g">Status :Available </p>
                     <p class="sectionsubTag ">Price per room : 1100 Rs</p>
                     <form action="r1.php" method="get">
                     <input type="date" name="ci"  value="<?php echo $ci; ?>" required>
                     <input type="date" name="co"  value="<?php echo $co; ?>" required>
                     <input type="text" name="rt" value="Delux AC" required>
                     <input type="text" name="nr" value="<?php echo $r; ?>" required>
                     <input type="submit" name="submit" id="room-btn">
                     </form>
                     <br>
                     <!-- <a href="r1.php">Book A Room</a> -->
                     </div>
                     <div class="thumbnail">
                         <img src="img/deluxroom.jpg" alt="delux" class="imgFluid">
                     </div>
               </section>
                   <?php

               }
               else{
                ?>
                <section id="rooms-right">
            <div class="paras">
               <p class="sectionTag">Delux Ac Room</p>
               <p class="sectionsubTag r">Status :not Available </p>
               <p class="sectionsubTag r">Sorry :Please come another day</p>
            </div>
            <!-- <div class="thumbnail">
                <img src="img/deluxroom.jpg" alt="delux" class="imgFluid">
            </div> -->
        </section>
         <?php
               }
            ?>
            
             <!---------------------------------   ac--------------------- -->

             <?php
               $qryy="SELECT * FROM `ac_room` WHERE `status`='un book'";
               $run=mysqli_query($con,$qryy);
               $row=mysqli_fetch_assoc($run);
               $rno=$row['roomno'];

               $qry="SELECT * FROM `ac_room` WHERE `status`='un book'";
               $run=mysqli_query($con,$qry);
               $row=mysqli_num_rows($run);
               if($r <= $row)
               {
                   ?>
                   <section id="rooms-right">
                   <div class="paras">
                     <p class="sectionTag"> A.C. Room</p>
                     <p class="sectionsubTag g">Status :Available </p>
                     <p class="sectionsubTag ">Price per room : 900 Rs</p>
                     <form action="r2.php" method="get">
                     <input type="date" name="ci"  value="<?php echo $ci; ?>" required>
                     <input type="date" name="co"  value="<?php echo $co; ?>" required>
                     <input type="text" name="rt" value="A.C. Room" required>
                     <input type="text" name="nr" value="<?php echo $r; ?>" required>
                     <input type="submit" id="room-btn">
                     </form>
                     <br>
                     <!-- <a href="r1.php">Book A Room</a> -->
                     </div>
                     <div class="thumbnail">
                         <img src="img/deluxroom.jpg" alt="delux" class="imgFluid">
                     </div>
               </section>
                   <?php

               }
               else{
                ?>
                <section id="rooms-right">
            <div class="paras">
               <p class="sectionTag"> Ac Room</p>
               <p class="sectionsubTag r">Status :not Available </p>
               <p class="sectionsubTag r">Sorry :Please come another day</p>
            </div>
            <!-- <div class="thumbnail">
                <img src="img/deluxroom.jpg" alt="delux" class="imgFluid">
            </div> -->
        </section>
         <?php
               }
            ?>
            
             <!---------------------------------  non ac--------------------- -->
             <?php
               $qryy="SELECT * FROM `nonac_room` WHERE `status`='un book'";
               $run=mysqli_query($con,$qryy);
               $row=mysqli_fetch_assoc($run);
               $rno=$row['roomno'];

               $qry="SELECT * FROM `nonac_room` WHERE `status`='un book'";
               $run=mysqli_query($con,$qry);
               $row=mysqli_num_rows($run);
               if($r <= $row)
               {
                   ?>
                   <section id="rooms-right">
                   <div class="paras">
                     <p class="sectionTag">Non A.C. Room</p>
                     <p class="sectionsubTag g">Status :Available </p>
                     <p class="sectionsubTag ">Price per room : 700 Rs</p>
                     <form action="r3.php" method="get">
                     <input type="date" name="ci"  value="<?php echo $ci; ?>" required>
                     <input type="date" name="co"  value="<?php echo $co; ?>" required>
                     <input type="text" name="rt" value="Non AC" required>
                     <input type="text" name="nr" value="<?php echo $r; ?>" required>
                     <input type="submit" id="room-btn">
                     </form>
                     <br>
                     <!-- <a href="r1.php">Book A Room</a> -->
                     </div>
                     <div class="thumbnail">
                         <img src="img/deluxroom.jpg" alt="delux" class="imgFluid">
                     </div>
               </section>
                   <?php

               }
               else{
                ?>
                <section id="rooms-right">
            <div class="paras">
               <p class="sectionTag">Non Ac Room</p>
               <p class="sectionsubTag r">Status :not Available </p>
               <p class="sectionsubTag r">Sorry :Please come another day</p>
            </div>
            <!-- <div class="thumbnail">
                <img src="img/deluxroom.jpg" alt="delux" class="imgFluid">
            </div> -->
        </section>
         <?php
               }
            ?>
        

     </div>

    <div class="room-status">

     <section id="rooms-right">
        
    </section>
    <section id="rooms-right">
       
    </section>
    <section id="rooms-right">
        
    </section>
    </div>
    
   
<?php 
include('inc/footer.php') ?>



<?php
include('connection.php');
$ci=$_GET['ci'];
 $co=$_GET['co'];
 $rt=$_GET['rt'];
 $nr=$_GET['nr'];

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
    body{
        background-color:orange;
    }
   #r1-container{
     
   }
   #r1-container h1{
       text-align:center;
       margin-top: 30px;
   }
   form{
       display: flex;
       justify-content:center;
       align-items: center;
       
       flex-direction:column;
       

   }
   table{
      width: 200px;
      height:150px;
      border:1px solid black;
      background-color:red;
      padding: 40px;
      border-radius:20px;
   }
   table tr td{
       padding: 8px;
   }
   table tr td input{
       font-size:17px;
   }
</style>
<body>
    <div id="r1-container">
    <h1>Please Fill Up The Form Given Below</h1>
<form action="r1.php" method="post">
<h1>BOOK NOW</h1>
    <table>
        <tr>
            <td>Status</td>
            <td><input type="text" name="status" title="status" placeholder="Availble"></td>
        </tr>
       
        <tr>
            <td>name</td>
            <td><input type="text" name="name" title="name" required></td>
        </tr>
        <tr>
            <td>Address</td>
            <td><input type="text" name="address" title="address" required></td>
        </tr>
        <tr>
            <td>State</td>
            <td><input type="text" name="state" title="state" required></td>
        </tr>
        <tr>
            <td>City</td>
            <td><input type="text" name="city" title="city" required></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><input type="email" name="email" title="email" required></td>
        </tr>
        <tr>
            <td>Check in Date</td>
            <td><input type="date" name="cin" title="cindate" value="<?php echo $ci; ?>"> </td>
            <td>Check out Date</td>
            <td><input type="date" name="cout" title="coutdate" value="<?php echo $co; ?>"></td>
        </tr>
        <tr>
            <td>Members</td>
            <td><input type="text" name="members" title="members" required></td>
        </tr>
        <tr>
            <td>Room Type</td>
            <td><input type="text" name="roomtype" title="roomtype" value="<?php echo $rt; ?>"></td>
        </tr>
        <tr>
            <td>No of Rooms</td>
            <td><input type="text" name="noofroom" title="No of Room" value="<?php echo $nr; ?>"></td>
        </tr>
        <tr>
            
            <td><input type="submit" name="submit" value="submit"></td>
        </tr>
    </table>
    <?php
        
        
        if(isset($_POST['submit']))
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

        $qryy="SELECT * FROM `deluxac_room` WHERE `status`='un book'";
        $run=mysqli_query($con,$qryy);
        // $rno=$ow['roomno'];
        $row=mysqli_fetch_assoc($run);
        $rno=$row['roomno'];

        
        

            $qry="INSERT INTO `room_booking` (`id`, `name`, `address`, `state`, `city`, `email`, `cin`, `cout`, `members`, `roomtype`, `no of rooms`) VALUES (NULL, '$name', '$address', '$state', '$city', '$email', '$ci', '$co', '$members', '$roomtype', '$noofroom');";
           
            $run=mysqli_query($con,$qry);
            
           
           
            if($run==true)
            {
                mysqli_query($con,"UPDATE `deluxac_room` SET `status`='book' WHERE `roomno`='$rno'");
                header('location:cartpayment2.php');
                ?>
                <script>
                    alert("room book Successfully");
                </script>
                <?php
            }
            else{

            }
        }
    ?>
</form> 
</div>
</body>
</html>

<?php
include('connection.php');
$ci=$_GET['ci'];
 $co=$_GET['co'];
 $rt=$_GET['rt'];
 $nr=$_GET['nr'];

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
    body{
        background-color:orange;
    }
   #r1-container{
     
   }
   #r1-container h1{
       text-align:center;
       margin-top: 30px;
   }
   form{
       display: flex;
       justify-content:center;
       align-items: center;
       
       flex-direction:column;
       

   }
   table{
      width: 200px;
      height:150px;
      border:1px solid black;
      background-color:red;
      padding: 40px;
      border-radius:20px;
   }
   table tr td{
       padding: 8px;
   }
   table tr td input{
       font-size:17px;
   }
</style>
<body>
    <div id="r1-container">
    <h1>Please Fill Up The Form Given Below</h1>
<form action="r2.php" method="post">
<h1>BOOK NOW</h1>
    <table>
        <tr>
            <td>Status</td>
            <td><input type="text" name="status" title="status" placeholder="Availble"></td>
        </tr>
       
        <tr>
            <td>name</td>
            <td><input type="text" name="name" title="name" required></td>
        </tr>
        <tr>
            <td>Address</td>
            <td><input type="text" name="address" title="address" required></td>
        </tr>
        <tr>
            <td>State</td>
            <td><input type="text" name="state" title="state" required></td>
        </tr>
        <tr>
            <td>City</td>
            <td><input type="text" name="city" title="city" required></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><input type="email" name="email" title="email" required></td>
        </tr>
        <tr>
            <td>Check in Date</td>
            <td><input type="date" name="cin" title="cindate" value="<?php echo $ci; ?>"> </td>
            <td>Check out Date</td>
            <td><input type="date" name="cout" title="coutdate" value="<?php echo $co; ?>"></td>
        </tr>
        <tr>
            <td>Members</td>
            <td><input type="text" name="members" title="members" required></td>
        </tr>
        <tr>
            <td>Room Type</td>
            <td><input type="text" name="roomtype" title="roomtype" value="<?php echo $rt; ?>"></td>
        </tr>
        <tr>
            <td>No of Rooms</td>
            <td><input type="text" name="noofroom" title="No of Room" value="<?php echo $nr; ?>"></td>
        </tr>
        <tr>
            
            <td><input type="submit" name="submit" value="submit"></td>
        </tr>
    </table>
    <?php
        
        
        if(isset($_POST['submit']))
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

        $qryy="SELECT * FROM `ac_room` WHERE `status`='un book'";
        $run=mysqli_query($con,$qryy);
        // $rno=$ow['roomno'];
        $row=mysqli_fetch_assoc($run);
        $rno=$row['roomno'];

        
        

            $qry="INSERT INTO `room_booking` (`id`, `name`, `address`, `state`, `city`, `email`, `cin`, `cout`, `members`, `roomtype`, `no of rooms`) VALUES (NULL, '$name', '$address', '$state', '$city', '$email', '$ci', '$co', '$members', '$roomtype', '$noofroom');";
           
            $run=mysqli_query($con,$qry);
            
           
           
            if($run==true)
            {
                mysqli_query($con,"UPDATE `ac_room` SET `status`='book' WHERE `roomno`='$rno' ");
                header('location:cartpayment2.php');
                ?>
                <script>
                    alert("room book Successfully");
                </script>
                <?php
            }
            else{

            }
        }
    ?>
</form> 
</div>
</body>
</html>

<?php
include('connection.php');
$ci=$_GET['ci'];
 $co=$_GET['co'];
 $rt=$_GET['rt'];
 $nr=$_GET['nr'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Non ac room form</title>
</head>
<style>
    body{
        background-color:orange;
    }
   #r1-container{
     
   }
   #r1-container h1{
       text-align:center;
       margin-top: 30px;
   }
   form{
       display: flex;
       justify-content:center;
       align-items: center;
       
       flex-direction:column;
       

   }
   table{
      width: 200px;
      height:150px;
      border:1px solid black;
      background-color:red;
      padding: 40px;
      border-radius:20px;
   }
   table tr td{
       padding: 8px;
   }
   table tr td input{
       font-size:17px;
   }
</style>
<body>
    <div id="r1-container">
    <h1>Please Fill Up The Form Given Below</h1>
<form action="r3.php" method="post">
<h1>BOOK NOW YOUR NON AC ROOM</h1>
    <table>
        <tr>
            <td>Status</td>
            <td><input type="text" name="status" title="status" placeholder="Availble"></td>
        </tr>
       
        <tr>
            <td>name</td>
            <td><input type="text" name="name" title="name" required></td>
        </tr>
        <tr>
            <td>Address</td>
            <td><input type="text" name="address" title="address" required></td>
        </tr>
        <tr>
            <td>State</td>
            <td><input type="text" name="state" title="state" required></td>
        </tr>
        <tr>
            <td>City</td>
            <td><input type="text" name="city" title="city" required></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><input type="email" name="email" title="email" required></td>
        </tr>
        <tr>
            <td>Check in Date</td>
            <td><input type="date" name="cin" title="cindate"  value="<?php echo $ci; ?>"> </td>
            <td>Check out Date</td>
            <td><input type="date" name="cout" title="coutdate" value="<?php echo $co; ?>"></td>
        </tr>
        <tr>
            <td>Members</td>
            <td><input type="text" name="members" title="members" required></td>
        </tr>
        <tr>
            <td>Room Type</td>
            <td><input type="text" name="roomtype" title="roomtype" value="<?php echo $rt; ?>"></td>
        </tr>
        <tr>
            <td>No of Rooms</td>
            <td><input type="text" name="noofroom" title="No of Room" value="<?php echo $nr; ?>"></td>
        </tr>
        <tr>
            
            <td><input type="submit" name="submit" value="submit"></td>
        </tr>
    </table>
    <?php
        
        
        if(isset($_POST['submit']))
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

        $qryy="SELECT * FROM `nonac_room` WHERE `status`='un book'";
        $run=mysqli_query($sql,$qryy);
        // $rno=$ow['roomno'];
        $row=mysqli_fetch_assoc($run);
        $rno=$row['roomno'];

        
        

            $qry="INSERT INTO `room_booking` (`id`, `name`, `address`, `state`, `city`, `email`, `cin`, `cout`, `members`, `roomtype`, `no of rooms`) VALUES (NULL, '$name', '$address', '$state', '$city', '$email', '$ci', '$co', '$members', '$roomtype', '$noofroom');";
           
            $run=mysqli_query($sql,$qry);
            
           
           
            if($run==true)
            {
                mysqli_query($sql,"UPDATE `nonac_room` SET `status`='book' WHERE `roomno`='$rno' ");
                header('location:cartpayment2.php');
                ?>
                <script>
                    alert("room book Successfully");
                </script>
                <?php
            }
            else{

            }
        }
    ?>
</form> 
</div>
</body>
</html>