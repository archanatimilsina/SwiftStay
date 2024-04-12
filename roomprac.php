<?php 
include('connection.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
#room-home{
    overflow: hidden;
}
#room-home figure{
     position: relative;
    width: 500%;
    margin: 0;
    left: 0;
    animation: 20s slider infinite; 
   
}
#room-home figure img{
     width: 20%;
    float: left; 
    height: 550px;
}
@keyframes slider{
    0%{
        left: 0;
    }
    20%{
        left: 0;
    }
    25%{
        left: -100%;
    }
    45%{
        left: -100%;
    }
    50%{
        left: -200%;
    }
    70%{
        left: -200%;
    }
    75%{
        left: -300%;
    }
    95%{
        left: -300%;
    }
    100%{
        left: -400%;
    }
}

  .room-check
  {
    border: 1px solid black ;
    border-radius: 20px;
   width: 40%;
    height: 150px;
    display: flex;
    margin: auto;
    margin-top: 20px;
  }
  .room-check form{
width: 100%;
  }
  .room-check form table{
    width: 100%;
  }
  #check-btn{
    width: 80px;
    height: 35px;
    margin-top: 75%;
    background-color:  #fa9579;
  }
  #room-option{
    margin-left: 35px;
  }
  #cin
  {
    margin:0px 7px;
  }
  #cout
  {
    margin:0px 7px;
  }
  .dac-available
  {
    width: 70%;
    margin: auto;
    height: 350px;
    border: black dotted 3px;

  }
  #book-btn
  {
    background-color: #fa9579 ;
  }
    .room-status{
        display: none;
    }
    
#rooms-right{
  margin-top: 100px;
} 

.room-h2{
    margin-top: 24px;
    text-align: center;
    font-family: 'Baloo 2', cursive;
}
#f1 form table{
    margin-left: 50px;
    border: 1px solid  #fc8260;
   display: flex;
   justify-content: center;
   width: 38%;
  border-radius: 10px;
  padding: 10px;
  font-family: 'Baloo 2', cursive;
  margin: auto;
}
#f1 form{
  
    margin-top: 20px;
    z-index: -1;
 
}
#f1 form table tr th{
    font-size: 20px;
    font-weight: 700;
}
#f1 form table tr td input{
    font-size: 16px;
    font-weight: 700;
}
#check-btn{
    padding: 4px;
     background-color: #fc8260; 
    color: black;
    margin-left: 20px;
    border-radius: 2px;
}


  
</style>
</head>
<body>
    
<div id="room-home">
     <figure>
         <img src="img/deluxroom.jpg" alt="delux">
         <img src="img/delux2.jpg" alt="delux">
         <img src="img/delux3.jpg" alt="delux">
         <img src="img/deluxroom.jpg" alt="delux">
         <img src="img/delux3.jpg" alt="delux">
     </figure>
</div>

<div class="room-check">
            <form action="room.php" method="get">
            <table>
                <thead>
                    <tr height="70px">
                        <th width="26%">Check in date</th>
                        <th width="30%">Check out date</th>
                        <th width="25%">No. of rooms</th>
                        <th width="19%" rowspan="2"><input type="button" name="check" id="check-btn" value="Check"></th>
                        </tr>
                </thead>
                <tr>
                    <td>
                        <input type="date" name="cin" id="cin" required>
                    </td>
                    <td>
                        <input type="date" name="cout" id="cout" required>
                    </td>
                    <td>
                        <select name="room" id="room-option" required>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                            <option>6</option>
                            <option>7</option>
                            <option>8</option>
                            <option>9</option>
                            <option>10</option>
                            <option>11</option>
                            <option>12</option>
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
                     <form action="r1prac.php" method="get">
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
    
</body>
</html>


