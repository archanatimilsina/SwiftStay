<?php
include('../connection.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SWIFT STAY</title>
    <link rel="stylesheet" href="css/style.css">
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
                <li class="item"><a href="aroomupdate.php">Update</a></li>
                <li class="item"><a href="roomdetails.php">Details</a></li>
                 <li class="item"><a href="booking.php">Status</a></li>
                 <li class="item"><a href="../admin.php">Admin Panel</a></li>
      
          </ul>
        </div>
    </nav>

    <section>
        <div class="img">
        <img src="../img/acdeluxnew.avif" alt="#" width="100%" height="500px"></div>

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
        

    $cin=$_GET['cin'];
    $cout=$_GET['cout'];
    $r=$_GET['room'];
    ?>
    <section class="result">
    <?php

    // delux ac room 
    $query1="SELECT * FROM deluxac_room  WHERE 'status'='available'";
    $result1=mysqli_query($con,$query1);
    $data1=mysqli_fetch_assoc($result1);
    $rno=$data1['room_no'];

    $query2="SELECT * FROM deluxac_room  WHERE 'status'='available'";
    $result2=mysqli_query($con,$query2);
    $data2=mysqli_num_rows($result2);
    
    if($r<=$data2)
    {
        ?>
<div class="dac-available">
    <h1>Deluc AC Room</h1>
    <p>STATUS : Available</p>
    <form action="r1.php" method="GET">
                     <input type="date" name="ci"  value="<?php echo $ci; ?>" required>
                     <input type="date" name="co"  value="<?php echo $co; ?>" required>
                     <input type="text" name="rt" value="Delux AC" required>
                     <input type="text" name="nr" value="<?php echo $r; ?>" required>
                     <input type="submit" id="room-btn">
                     </form>
</div>
        <?php
    }
    else
    {
        ?>
        <div class="dac-available">
    <h1>Deluc AC Room</h1>
    <p>SORRY NOT AVAILABlE</p>
    <p>TOTAL ROOM AVAILABLE= <?php echo $data2; ?></p>
</div>
<?php 
    }
     // delux ac room
     

    //  ac room
    $query5="SELECT * FROM ac_room  WHERE 'status'='available'";
    $result5=mysqli_query($con,$query5);
    $data5=mysqli_fetch_assoc($result5);
    $rno=$data5['room_no'];
    
    $query6="SELECT * FROM ac_room  WHERE 'status'='available'";
     $result6=mysqli_query($con,$query6);
     $data6=mysqli_num_rows($result6);
     
     if($r<=$data6)
     {
         ?>
 <div class="dac-available">
     <h1>Deluc AC Room</h1>
     <p>STATUS : Available</p>
     <form action="r1.php" method="GET">
         <input type="date" name="ci"  value="<?php echo $ci; ?>" required>
                      <input type="date" name="co"  value="<?php echo $co; ?>" required>
                      <input type="text" name="rt" value="Delux AC" required>
                      <input type="text" name="nr" value="<?php echo $r; ?>" required>
                      <input type="submit" id="room-btn" value="BOOk HERE">
                    </form>
                </div>
                <?php
     }
     else
     {
         ?>
         <div class="dac-available">
     <h1>AC Room</h1>
     <p>SORRY NOT AVAILABlE</p>
     <p>TOTAL ROOM AVAILABLE= <?php echo $data6; ?></p>
    </div>
    <?php 
     }
     //  ac room
     
     
     //  non ac room 
     $query3="SELECT * FROM nonac_room  WHERE 'status'='available'";
     $result3=mysqli_query($con,$query3);
     $data3=mysqli_fetch_assoc($result3);
     $rno=$data3['room_no'];
     
     $query4="SELECT * FROM nonac_room  WHERE 'status'='available'";
     $result4=mysqli_query($con,$query4);
     $data4=mysqli_num_rows($result4);
     
     if($r<=$data4)
     {
         ?>
<div class="dac-available">
    <h1>NON AC Room</h1>
    <p>STATUS : Available</p>
    <form action="r2.php" method="GET">
        <input type="date" name="ci"  value="<?php echo $ci; ?>" required>
        <input type="date" name="co"  value="<?php echo $co; ?>" required>
        <input type="text" name="rt" value="Delux AC" required>
        <input type="text" name="nr" value="<?php echo $r; ?>" required>
        <input type="submit" id="room-btn">
    </form>
</div>
<?php
    }
    else
    {
        ?>
        <div class="dac-available">
            <h1> NON AC Room</h1>
            <p>SORRY NOT AVAILABlE</p>
            <p>TOTAL ROOM AVAILABLE= <?php echo $data2; ?></p>
        </div>
        <?php 
    }
    //  non ac room 


        ?>
      
        </section>
          </div>
    </section>

    
</body>
</html>