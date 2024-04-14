<?php 
include('connection.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 <link rel="stylesheet" href="css/roomstyle.css">
</head>
<body>
    
<nav class="navbar">
        <div class="left-nav">
            <img src="img/logo1.png" alt="logo">
        </div>
        <div class="right-nav mt-4">
            <ul>
                <li class="item"><a href="index.php">Home</a></li>
                <li class="item"><a href="about.php">About</a></li>
                <li class="item"><a href="room.php">Rooms</a></li>
                <!-- <li class="item"><a href="food.php">Food</a></li> -->
                <li class="item"><a href="contact.php">Contact</a></li>
                <!-- <li class="item"><a href="cart.php">Cart</a></li> -->
                <li class="item"><a href="admin.php">Admin</a></li>
                <!-- <li class="item"><a href="bookinghall.php">Booking</a></li> -->
                <li class="item"><a href="feedback.php">Feedback</a></li>  
        <?php
            if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']==true)
            {
               ?>
               <button class="login12"> <?php 
               
                   echo $_SESSION["username"].
                 
                   '-<a href="logout.php">Logout</a>';
                  ?>
                 </button>
               <?php 
            }
            else{
                echo "
                <div class='sign-in-up'>
                <button type='button' onclick=\"popup('login-popup')\">Login</button>
                <button type='button' onclick=\"popup('register-popup')\">Register</button>
                </div>
                ";
            }
        ?>
          </ul>
        </div>
    </nav>


    <div class="popup-container" id="login-popup">
        <div class=" popup">
            <form action="login_register.php" method="POST">
                <h2>
                    <span>User Login</span>
                    <button type="reset" onclick="popup('login-popup')">X</button>
                </h2>
                <input type="text" placeholder="E-mail or Username" name="email_username" required>
                <input type="password" placeholder="Password" name="password" required>
                <button type="submit" class="login-btn" name="login">Login</button>
            </form>
            <div class="forgot-btn">
                <button type="button" onclick="forgotPopup()">Forgot Password</button>
            </div>
        </div>
    </div>


    <div class="popup-container" id="register-popup">
        <div class="register popup">
            <form action="login_register.php" method="POST">
                <h2>
                    <span>User REGISTER</span>
                    <button type="reset" onclick="popup('register-popup')">X</button>
                </h2>
                <input type="text" placeholder="FULL NAME"  name="fullname" required>
                <input type="text" placeholder="User Name" name="username" required>
                <input type="email" placeholder="E-Mail"  name="email" required>
                <input type="password" placeholder="Password"  name="password" required>
                <button type="submit" class="register-btn" name="register">Register</button>
            </form>
        </div>
    </div>

    <div class="popup-container" id="forgot-popup">
        <div class="forgot popup">
            <form action="forgotpassword.php" method="POST">
                <h2>
                    <span>Reset Password</span>
                    <button type="reset" onclick="popup('forgot-popup')">X</button>
                </h2>
                <input type="email" placeholder="E-mail" name="email">
                
                <button type="submit" class="reset-btn" name="send-reset-link">Send Link</button>
            </form>
            
        </div>
    </div>
    
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
                
                <td width="20%" height="50px"><input type="date" id="ci-input" name="ci" required></td>
                 <td width="20%" height="50px"><input type="date" id="co-input" name="co" required></td>
                 <td width="20%" height="50px">
                 <select name="room">
                         <option >1</option>
                         <option >2</option>
                         <option >3</option>
                         <option >4</option>
                         <option >5</option>
                         <option >6</option>
                         <option >7</option>
                         <option >8</option>
                         <option >9</option>
                         <option >10</option>
                        
                     </select>
            </form>
                 </td>
             </tr>
         </table>
</div>
         <?php 
         if(isset($_GET['sub']))
         {
                $r = $_GET['room'];
                 $ci=$_GET['ci'];
               $co=$_GET['co'];
         
         ?>

         <!---------------------------------  delux ac--------------------- -->
         <?php
               $qryy="SELECT * FROM `deluxac_room` WHERE status='available'";
               $run=mysqli_query($con,$qryy);
               $row=mysqli_fetch_assoc($run);
               $rno=$row['room_no'];

               $qry="SELECT * FROM `deluxac_room` WHERE status='available'";
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
           
        </section>
         <?php
               }
            ?>
            
             <!---------------------------------   ac--------------------- -->

             <?php
               $qryy="SELECT * FROM `ac_room` WHERE `status`='available'";
               $run=mysqli_query($con,$qryy);
               $row=mysqli_fetch_assoc($run);
               $rno=$row['room_no'];

               $qry="SELECT * FROM `ac_room` WHERE `status`='available'";
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
           
        </section>
         <?php
               }
            ?>
            
             <!---------------------------------  non ac--------------------- -->
             <?php
               $qryy="SELECT * FROM `nonac_room` WHERE `status`='available'";
               $run=mysqli_query($con,$qryy);
               $row=mysqli_fetch_assoc($run);
               $rno=$row['room_no'];

               $qry="SELECT * FROM `nonac_room` WHERE `status`='available'";
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
          
        </section>
         <?php
               }
        }
?>
  <?php
  include('inc/footer.php')
  ?>
</body>
</html>


    
   
