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
  body{
        background-color:pink;
    }
   
    h1{
        text-align:center;
        margin-top: 20px;
    }
    .delux-insert{
        height: 200px;
        width: 400px;
        border-radius:10px;
        background-color:crimson;
        margin-top: -10px;
        margin-left: 38%;
        
    }
    .delux-insert form{
          display: flex;
          flex-direction:column;
          align-items:center;
          justify-content:center;
          padding-top: 30px;
    }
    .delux-insert form table tr td input{
       padding:4px 0;
       margin-bottom: 10px;
       border-radius:8px;
       padding-left: 10px;
    }
    .delux-insert form table tr td{
        font-size:20px;
    }
    #delux-btn{
        width:80%;
        background-color:blue;
        font-size:16px;
    }
    .imgg{
        display: flex;
        justify-content:space-evenly;
        margin-top: 10px;
    }
    img{
        width: 350px;
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
                 <li class="item"><a href="../admin.php">Admin Panel</a></li>
          </ul>
        </div>
    </nav>
    
    <h1 >Delux AC Rooms insert Section</h1>
    <div class="imgg">
    <img src="../img/about13.avif" alt="delux ac">
    <img src="../img/about12.avif" alt="delux ac">
    </div>
   
<div class="delux-insert">
    
    <form action="adelux.php" method="post">
             <table>
                
                <tr>
                   <td>Room No</td>
                   <td><input type="text" name="rno" placeholder="Enter Room No" title="Enter Room No" required></td>
                  
                </tr>
                <tr>
                    <td>Room Type</td>
                    <td><input type="text" name="type" placeholder="Enter Room Type " title="Room Type" required> </td>
                </tr>
                <tr>
                    <td>Room Price</td>
                    <td><input type="text" name="price" placeholder="Enter Room Price " title="Room Price" required> </td>
                </tr>
                
                
                
                <td>
                    <td><input type="submit" id="delux-btn" name="submit" value=Insert></td>
                </td>
            </table>
    </form>
    <?php
      if(isset($_POST['submit']))
      {
          $rno=$_POST['rno'];
          $rtype=$_POST['type'];
          $price=$_POST['price'];
         
          $qry="INSERT INTO deluxac_room(room_no, room_type, price) VALUES ('$rno','$rtype','$price')";
          $run=mysqli_query($con,$qry);
          if($run==true)
          {
            ?>
            <script>
                alert('Data Inserted Successfully');
            </script>
            <?php
          }
          else{
              echo "Not Inserted";
          }

      }
    ?>
</div>
    </body>
 </html>