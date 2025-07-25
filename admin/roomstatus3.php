<!-- emergency wala -->
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
  #book-section
  {
    width: 100%;
  }
#book-head
{
  text-align: center;
  margin: 30px;
  font-size: 30px;
}
  .book-table
  {
    width: 100%;
    
  }
  .book-table table th{
    font-size:19px;
    background-color: lavender;
  }
  table,
        th,
        td {
            border: 3px solid black;
            border-collapse: collapse;
            padding: 5px;
        }
.book-table table tr{
  height: 90px;

}
.book-table table tr td{
text-align: center;
font-size: 17px;

}
#room
{
  width: 50px;
  height: 35px;
  border: black solid 1px;
   background-color: red; 
  color: Black;
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
                <!-- <li class="item"><a href="roomdetails.php">Rooms</a></li> -->
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
   <section id="book-section">
    <h1 id="book-head">ROOM BOOK DETAILS</h1>
    <div class="book-table">
<table>
  <thead>
<tr>
  <th scope="col">S.N</th>
  <th scope="col">Name</th>
  <th scope="col">Address</th>
  <th scope="col">City</th>
  <th scope="col">Phone</th>
  <th scope="col">Email</th>
  <th scope="col">CheckIn Date</th>
  <th scope="col">CheckOut Date</th>
  <th scope="col">Members</th>
  <th scope="col">Room Type</th>
  <th scope="col">No. Of Room</th>
  <th scope="col">Booked Datetime</th>
  <th scope="col">Action</th>
</tr>
  </thead>
  <tbody>
<?php 
$query="SELECT * FROM room_booking";
$result=mysqli_query($con,$query);
$i=1;
while($data=mysqli_fetch_array($result))
{
?>
<tr>
  <td scope="row"><?php echo $i++; ?></td>
  <td scope="row"><?php echo $data['name']; ?></td>
  <td scope="row"><?php echo $data['address']; ?></td>
  <td scope="row"><?php echo $data['city']; ?></td>
  <td scope="row"><?php echo $data['phone']; ?></td>
  <td scope="row"><?php echo $data['email']; ?></td>
  <td scope="row"><?php echo $data['cin']; ?></td>
  <td scope="row"><?php echo $data['cout']; ?></td>
  <td scope="row"><?php echo $data['members']; ?></td>
  <td scope="row"><?php echo $data['room_type']; ?></td>
  <td scope="row"><?php echo $data['no_of_room']; ?></td>
  <td scope="row"><?php echo $data['time']; ?></td>
  <td>
<a href="roomdata.php?email=<?php echo $data['email'];?>"><button value="Rooms" id="room">Room</button></a>
</td>
</tr>
<?php
}
?>
  </tbody>
</table>
</div>
   </section>
    </body>
 </html>