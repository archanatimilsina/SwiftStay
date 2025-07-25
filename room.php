<?php 
include('connection.php');?>
<?php require('inc/header.php');?>
<link rel="stylesheet" href="css/room.css">
<?php require('inc/navbar.php');?>

<div id="room-home">
     <figure>
     <img src="img/deluxroom1.jpg" alt="delux">
         <img src="img/deluxe.jpg" alt="delux">
         <img src="img/delux2.jpg" alt="delux">
         <img src="img/ac.jpg" alt="delux">
         <img src="img/de1.jpg" alt="delux">
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
            //    $rno=$row['room_no'];

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
                     <p class="sectionsubTag ">Price per room :Rs 2000</p>
                     <form action="deluxbook.php" method="get">
                     <input type="date" name="ci"  value="<?php echo $ci; ?>" required>
                     <input type="date" name="co"  value="<?php echo $co; ?>" required>
                     <input type="text" name="rt" value="Delux AC" required>
                     <input type="text" name="nr" value="<?php echo $r; ?>" required>
                     <input type="submit" name="submit" id="room-btn">
                     </form>
                     <br>
                     
                     </div>
                     <div class="thumbnail">
                         <img src="img/deluxe.jpg" alt="delux" class="imgFluid">
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
            //    $rno=$row['room_no'];

               $qry="SELECT * FROM `ac_room` WHERE `status`='available'";
               $run=mysqli_query($con,$qry);
               $row=mysqli_num_rows($run);
               if($r <= $row)
               {
                   ?>
                   <section id="rooms-left">
                   <div class="paras">
                     <p class="sectionTag"> A.C. Room</p>
                     <p class="sectionsubTag g">Status :Available </p>
                     <p class="sectionsubTag ">Price per room : Rs 1800</p>
                     <form action="acbook.php" method="get">
                     <input type="date" name="ci"  value="<?php echo $ci; ?>" required>
                     <input type="date" name="co"  value="<?php echo $co; ?>" required>
                     <input type="text" name="rt" value="A.C. Room" required>
                     <input type="text" name="nr" value="<?php echo $r; ?>" required>
                     <input type="submit" id="room-btn">
                     </form>
                     <br>
                     
                     </div>
                     <div class="thumbnail">
                         <img src="img/ac.jpg" alt="delux" class="imgFluid">
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
            //    $rno=$row['room_no'];

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
                     <p class="sectionsubTag ">Price per room : Rs 1500</p>
                     <form action="nonacbook.php" method="get">
                     <input type="date" name="ci"  value="<?php echo $ci; ?>" required>
                     <input type="date" name="co"  value="<?php echo $co; ?>" required>
                     <input type="text" name="rt" value="Non AC" required>
                     <input type="text" name="nr" value="<?php echo $r; ?>" required>
                     <input type="submit" id="room-btn">
                     </form>
                     <br>
                     
                     </div>
                     <div class="thumbnail">
                         <img src="img/non.jpg" alt="delux" class="imgFluid">
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
     <?php require('inc/footer.php');?>
    <?php require('inc/script.php');?>
    <script>
        // JavaScript code to set minimum date to today's date
window.onload = function() {
    var today = new Date().toISOString().split('T')[0];
    document.getElementById('ci-input').setAttribute('min', today);
    document.getElementById('co-input').setAttribute('min', today);
};
    </script>
    <?php require('inc/footertag.php');?>


    
   
