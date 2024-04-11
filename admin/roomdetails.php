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
  background-color:white;
  
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
  /* navbar */
  
  .admin-room-details{
        background:rgba(255,255,255,0.5); 
        
    }
    .admin-room-details h1{
        text-align:center;
        margin-top: 20px;
    }
    body::before{
    position: absolute;
    content: "";
    height: 170%;
    width: 100%;
    z-index: -1;
    opacity: 0.89;
    background: url('../img/adminhotel2.jpg') center center/cover no-repeat;
    }
    .admin-booking table tr{
        font-size:20px;
        font-family: 'Rubik', sans-serif;
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
 
                <li class="item"><a href="roomdetails.php">Details</a></li>
                 <li class="item"><a href="roomstatus.php">Status</a></li>
                 <li class="item"><a href="../admin.php">Admin Panel</a></li>
          </ul>
        </div>
    </nav>
    <div class="admin-room-details">
         <h1 style="color:blue; text-align:center;">Delux room details</h1>
         <table>
             <tr>
                     <th width="25%" height="50px">Room No</th>
                     <th width="25%" height="50px">Room Type</th>
                     <th width="25%" height="50px">Price</th>
                     <th width="25%" height="50px">Status</th>
                     <th width="25%" height="50px">Option</th>
             </tr>
             <?php
                $qry="SELECT * FROM `deluxac_room`";
                $run=mysqli_query($con,$qry);
                while( $row=mysqli_fetch_assoc($run))
                {
                    $rno=$row['room_no'];
                    $rtype=$row['room_type'];
                    $price=$row['price'];
                    $status=$row['status'];

                    ?>
                    <tr>
                    <td width="25%" height="50px"><?php echo $rno ?></td>
                     <td width="25%" height="50px"><?php echo $rtype ?></td>
                     <td width="25%" height="50px"><?php echo $price ?></td>
                     <td width="25%" height="50px"><?php echo $status ?></td>
                     <td><a style="color:blue;" href="co.php? rno=<?php echo $rno; ?>">Check Out</a></td>
                    </tr>
                    <?php
                }
             ?>
         </table>
    </div>

    <div class="admin-room-details">
         <h1 style="color:blue; text-align:center;">Ac room details</h1>
         <table>
             <tr>
                     <th width="25%" height="50px">Room No</th>
                     <th width="25%" height="50px">Room Type</th>
                     <th width="25%" height="50px">Price</th>
                     <th width="25%" height="50px">Status</th>
                     <th width="25%" height="50px">Option</th>
             </tr>
             <?php
                $qry="SELECT * FROM `ac_room`";
                $run=mysqli_query($con,$qry);
                while( $row=mysqli_fetch_assoc($run))
                {
                    $rno=$row['room_no'];
                    $rtype=$row['room_type'];
                    $price=$row['price'];
                    $status=$row['status'];

                    ?>
                    <tr>
                    <td width="25%" height="50px"><?php echo $rno ?></td>
                     <td width="25%" height="50px"><?php echo $rtype ?></td>
                     <td width="25%" height="50px"><?php echo $price ?></td>
                     <td width="25%" height="50px"><?php echo $status ?></td>
                     <td><a style="color:blue;" href="co1.php? rno=<?php echo $rno; ?>">Check Out</a></td>
                    </tr>
                    <?php
                }
             ?>
         </table>
    </div>
    <div class="admin-room-details">
         <h1 style="color:blue; text-align:center;">Non Ac room details</h1>
         <table>
             <tr>
                     <th width="25%" height="50px">Room No</th>
                     <th width="25%" height="50px">Room Type</th>
                     <th width="25%" height="50px">Price</th>
                     <th width="25%" height="50px">Status</th>
                     <th width="25%" height="50px">Option</th>
             </tr>
             <?php
                $qry="SELECT * FROM `nonac_room`";
                $run=mysqli_query($con,$qry);
                while( $row=mysqli_fetch_assoc($run))
                {
                    $rno=$row['room_no'];
                    $rtype=$row['room_type'];
                    $price=$row['price'];
                    $status=$row['status'];

                    ?>
                    <tr>
                    <td width="25%" height="50px"><?php echo $rno ?></td>
                     <td width="25%" height="50px"><?php echo $rtype ?></td>
                     <td width="25%" height="50px"><?php echo $price ?></td>
                     <td width="25%" height="50px"><?php echo $status ?></td>
                     <td><a style="color:blue;" href="co2.php? rno=<?php echo $rno; ?>">Check Out</a></td>
                    </tr>
                    <?php
                }
             ?>
         </table>
    </div>
    </body>
 </html>