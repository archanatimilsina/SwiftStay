<?php
include('../connection.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SWIFTSTAY</title>
    
    <link href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@500&display=swap" rel="stylesheet">
    <style>
      *{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}

/* navbar */
.navbar{
    width: 100%;
    position: sticky;
    height: 100px;
    background-color: #fa9579;
    display: flex;
    align-items: center;
    justify-content: center;
      top: 0;
   
}
.left-nav{
    width: 20%;
}
.left-nav p{
    font-family: 'Baloo 2', cursive;
    font-size: 35px;
    
}

.right-nav{
    width: 100%;
    margin-top: 13px;

}
.right-nav ul{
  display: flex;
  justify-content: center;
}
.right-nav ul li{
   list-style: none;
   margin: 30px;
   
}
.right-nav ul li a{
    text-decoration: none;
    color: #222;
    font-family: 'Baloo 2', cursive;
  
    font-size: 26px;
    font-weight: 400;
    position: relative;
   
    }
.right-nav ul li a:hover{
    color: black;
    background: white;
    border-radius: 30px;
}
.right-nav ul .paste-button li{
    text-decoration: none;
    color: #222;
    font-family: 'Baloo 2', cursive;
    font-size: 26px;
    font-weight: 400;
    position: relative;
   
    }
.right-nav ul .paste-button li:hover{
    color: black;
    background: white;
    border-radius: 30px;
}
             
.paste-button {
    position: relative;
    display: inline-block;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  }
  
  .button {
    background-color: #fa9579;
    color: black;
    font-size: 15px;
    border: 2px solid transparent;
    border-radius: 15px;
    cursor: pointer;
  }
  
  .dropdown-content {
    display: none;
    font-size: 13px;
    position: absolute;
    z-index: 1;
  }
  
  .dropdown-content a {
    color: #222;
    font-family: 'Baloo 2', cursive;
    font-size: 26px;
    font-weight: 400;
    text-decoration: none;
    display: block;
   width: 180px;
   height: 45px;
   border-radius: 5px;
  border: black solid 1px;
  text-align: center;
  background-color:white ;
  
  }
  
  .dropdown-content a:hover {
   background-color:#fa9579;
 
  }
  
  .paste-button:hover button {
    background-color:white ;
  }
  
  .paste-button:hover .dropdown-content {
    display: block;
  }
 
.room-h2{
    margin-top: 24px;
    text-align: center;
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
}
#f1
{
    width: 500px;
  height: 150px;
    margin: auto;
    margin-bottom: 80px;
    
}
#f1 form table{
    
   display: flex;
   justify-content: center;
   width: 100%;
  border-radius: 10px;
  height: 150px;
  border: 1px solid red;
}
#f1 form{
 
    width: 100%;
    margin-top: 20px;
    
}
#f1 form table tr th{
    font-size: 17px;
    font-weight: 700;
}
#f1 form table tr td input{
    font-size: 14px;
    font-weight: 700;
    margin: 0px 15px;
}

#check-btn{
    padding: 4px;
    background-color: crimson;
    color: white;
   border-radius: 2px;
}

#rooms-right{
    height: 500px;
    display: flex;
    align-items: center;
    justify-content: space-evenly;
   width: 90%;
    margin:auto;
    border: 1px solid black; 
    margin-bottom: 100px; 
}

.paras{
    padding: 0 40px;
    
}
.paras form{
    display: flex;
    justify-content: center;
    flex-direction: column;
    padding: 3px;
    
}
.paras form input{
    margin-top: 6px;
    padding: 4px;
}
#room-btn{
    background-color: #fa9579;
    color: white;
    font-size: 15px;
}

#rooms-left{
    height: 500px;
    display: flex;
    align-items: center;
    justify-content: space-evenly;
    max-width: 90%;
    margin: auto;
    border: 1px solid black;
    flex-direction: row-reverse;
    
}
.sectionTag{
    color: black;
    font-size: 40px;
    font-weight: 600;
    margin-bottom: 10px;
}
.g{
    /* color: green; */
    font-weight: 700;
}
.r{
    /* color: red; */
    font-weight: 700;
}
.sectionsubTag{
    padding-top: 10px;
    font-size: 20px;
}
.font{
    font-family: Verdana, Geneva, Tahoma, sans-serif;
    font-size: 17px;
    color: rgb(130, 30, 245);
}
#rooms-left .thumbnail img{
    width: 700px;
}
.price-btn{
    width: 80%;
    background-color: #e46262;
    color: white;
    margin-top: 20px;
    padding: 6px 0;
}
.thumbnail img{
    padding-right: 10px;
    width: 700px;
}
.price{
    color: green;
    margin-top: 20px;
    font-size: 19px;
    font-weight: 600;
}


  </style>
</head>

<body>
<nav class="navbar">
    <div class="left-nav">
            <p>Room</p>
        </div>
        <div class="right-nav mt-4">
            <ul>
                <li class="item"><a href="aroom.php">Home</a></li>
         <div class="paste-button"> <li class="item">update </li>
          <div class="dropdown-content">
        <a id="first" href="adelux.php">Delux AC</a>
        <a id="second" href="aac.php">AC</a>
        <a id="third" href="anonac.php">Non AC</a>
      </div>
   </div>
 
              
   <!-- <li class="item"><a href="roomdetails.php">Details</a></li> -->
   <div class="paste-button"> <li class="item">Rooms</li>
          <div class="dropdown-content">
          <a id="first" href="deluxacdata.php">Delux AC</a>
        <a id="second" href="acdata.php">AC</a>
        <a id="third" href="nonacdata.php">Non AC</a>
      </div>
   </div>
                 <li class="item"><a href="roomstatus.php">Status</a></li>
                 <li class="item"><a href="admin.php">Admin Panel</a></li>
          </ul>
        </div>
    </nav>

    <section>
        <div class="img">
        <img src="../img/acdeluxnew.avif" alt="#" width="100%" height="500px"></div>
        
<div id="f1">
    <h2 class="room-h2"><i class="fas fa-hotel"></i> SEARCH YOUR ROOMS HERE</h2>
         <form action="aroom.php " method="get"> 
         <table >
             <tr>
                 
                <th width="22%" height="50px" id="cin" required>Check In Date</th>
                 <th width="40%" height="50px" id="cout" required>Check Out Date</th>
                 <th width="21%" height="50px">Room</th>
                 <td rowspan="2" width="17%"><input type="submit" name="sub" id="check-btn" value="Check"  ></td>
             </tr>
             <tr>
                <td width="26%" height="50px"><input type="date" name="ci" id="ci-input" required></td>
                 <td width="30%" height="50px"><input type="date" name="co" id="co-input" required></td>
                 <td width="25%" height="50px">
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
                         <option >11</option>
                         <option >12</option>
                        
                     </select>
            </form>
           
                 </td>
             </tr>
         </table> </div>
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
                     <p class="sectionsubTag ">Price per room : 1100 Rs</p>
                     <form action="../deluxbook.php" method="get">
                     <input type="date" name="ci"  value="<?php echo $ci; ?>" required>
                     <input type="date" name="co"  value="<?php echo $co; ?>" required>
                     <input type="text" name="rt" value="Delux AC" required>
                     <input type="text" name="nr" value="<?php echo $r; ?>" required>
                     <input type="submit" name="submit" id="room-btn">
                     </form>
                     <br>
                     
                     </div>
                     <div class="thumbnail">
                         <img src="../img/deluxroom.jpg" alt="delux" class="imgFluid">
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
                   <section id="rooms-right">
                   <div class="paras">
                     <p class="sectionTag"> A.C. Room</p>
                     <p class="sectionsubTag g">Status :Available </p>
                     <p class="sectionsubTag ">Price per room : 900 Rs</p>
                     <form action="../acbook.php" method="get">
                     <input type="date" name="ci"  value="<?php echo $ci; ?>" required>
                     <input type="date" name="co"  value="<?php echo $co; ?>" required>
                     <input type="text" name="rt" value="A.C. Room" required>
                     <input type="text" name="nr" value="<?php echo $r; ?>" required>
                     <input type="submit" id="room-btn">
                     </form>
                     <br>
                     
                     </div>
                     <div class="thumbnail">
                         <img src="../img/deluxroom.jpg" alt="delux" class="imgFluid">
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
                     <p class="sectionsubTag ">Price per room : 700 Rs</p>
                     <form action="../nonacbook.php" method="get">
                     <input type="date" name="ci"  value="<?php echo $ci; ?>" required>
                     <input type="date" name="co"  value="<?php echo $co; ?>" required>
                     <input type="text" name="rt" value="Non AC" required>
                     <input type="text" name="nr" value="<?php echo $r; ?>" required>
                     <input type="submit" id="room-btn">
                     </form>
                     <br>
                     
                     </div>
                     <div class="thumbnail">
                         <img src="../img/deluxroom.jpg" alt="delux" class="imgFluid">
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
  <script>
        // JavaScript code to set minimum date to today's date
window.onload = function() {
    var today = new Date().toISOString().split('T')[0];
    document.getElementById('ci-input').setAttribute('min', today);
    document.getElementById('co-input').setAttribute('min', today);
};
    </script>
</body>
</html>