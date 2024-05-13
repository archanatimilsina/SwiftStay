<?php
include ('connection.php');
require ('inc/header.php'); ?>

<style>
  * {
    box-sizing: border-box;
    margin: 0;
    padding: 0;

  }

  #home {
    display: flex;
    flex-direction: column;
    position: relative;
    width: 100%;
    border: 1px solid black;
    height: 600px;
    z-index: -1;
    justify-content: center;
    align-items: center;
    margin-bottom: 100px;
    padding: 0px 30px;
  }

  #home img {
    position: absolute;
    width: 100%;
    height: 600px;
  }

  .h1 {
    position: absolute;
    z-index: 1;
    font-size: 4rem;
    padding: 12px;
  }

  .room-section {
    max-width: 98%;
    height: 500px;
    display: flex;
    flex-direction: row;
    border: 1px solid black;
    margin: 40px;
  }

  .room-content {
    width: 45%;
    height: 100%;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;

  }

  .room-content a {
    width: 100%;
  }

  .sectionTag {
    color: black;
    font-size: 40px;
    font-weight: 600;
    text-align: center;


  }

  .sectionsubTag {
  
    font-size: 18px;
    font-family: Verdana, Geneva, Tahoma, sans-serif;
    color: rgb(130, 30, 245);
    padding: 10px;
    margin-top: 10px;
  }

  .price-btn {
    width: 60%;
    background-color: crimson;
    color: white;
    height: 40px;
    margin-left: 59px;

  }

  .price {
    font-family: Verdana, Geneva, Tahoma, sans-serif;
    color: green;
    font-size: 17px;
    margin: 10px;
    text-align: center;

  }

  .room-img {
    width: 55%;
    height: 100%;
    position: relative;
    z-index: -1;
  }

  .room-img img {
    position: absolute;
    width: 100%;
    height: 100%;
    
  }

  #services {
    max-width: 100%;
    height: 530px;
    display: flex;
    flex-direction: row;
    margin: auto;
    padding: 10px;
background-color: white;
  }

  #services .box {
    width: 31%;
    height: 95%;
    border: 1px solid black;
    margin: 10px;
    display: flex;
    flex-direction: column;
    align-items: center;
    padding: 10px;
    border-radius: 10px;
    background-color: lavender;
  }

  #services .box a {
    font-family: 'Baloo 2', cursive;
    margin: 20px;
  }

  #services .box h2 {
    font-family: 'Baloo 2', cursive;

  }

  #services .box p {
    font-family: 'Baloo 2', cursive;
    text-align: center;
    font-size: 18px;
  }

  .h-primary {
    font-size: 2.8rem;
    font-family: 'Baloo 2', cursive;
    text-align: center;
    margin-top: 20px;
  }

  .h-secondary {
    font-size: 2rem;
    font-family: 'Baloo 2', cursive;
    text-align: center;
    margin-bottom: 10px;
  }

  #services .box img {
    height: 160px;
    margin: auto;
    display: block;
    border-radius: 10px;
  }

  #hall {
    display: flex;
    flex-direction: column;
    position: relative;
    max-width: 100%;
    margin: auto;
    height: 600px;
    z-index: -1;
    justify-content: center;
    align-items: center;

  }

  #hall img {
    position: absolute;
    width: 100%;
    height: 600px;
  }

  #hall .h1 {
    position: absolute;
    z-index: 1;
    font-size: 2rem;
    padding: 12px;
  }
  #services-container
  {
    
    margin-bottom: 20px;
  }
  
</style>
<?php require ('inc/navbar.php'); ?>

<!-- home img -->
<?php
$queryhome="SELECT * FROM ihome_img order by hid DESC";
$resulthome=mysqli_query($con,$queryhome);
$data1=mysqli_fetch_assoc($resulthome);
$index=$data1['home_img'];
?>
<section id="home">
  <h1 class="h1">Welcome to SwiftStay</h1>
  <img src="admin/index/homepage/<?php echo $index; ?>">
</section>
<!-- home img -->


<!-- book room -->
<?php

$querydelux="SELECT * FROM idelux_img order by did DESC";
$resultdelux=mysqli_query($con,$querydelux);
$data2=mysqli_fetch_assoc($resultdelux);
$delux=$data2['delux_img'];
?>

<section>
  <div class="deluxac room-section">

    <div class="room-content">
      <p class="sectionTag">A.C. Room</p>
      <p class="sectionsubTag font"> 24 hours check-out. We provide
        Lorem ipsum dolor, sit amet consectetur adipisicing elit. world class services in very low cost. i.e. 900rs.</p>
      <p class="price">Price per room :Rs 1800/-</p>
      <a href="room.php"><button class="price-btn">Book A Room</button></a>
    </div>
    <div class="room-img">
      <img src="admin/index/deluximg/<?php echo $delux;?>" alt="#">
    </div>
  </div>

  <?php
  $queryac="SELECT * FROM iac_img order by aid DESC";
  $resultac=mysqli_query($con,$queryac);
  $data3=mysqli_fetch_assoc($resultac);
  $ac=$data3['ac_img'];
  ?>
  <div class="ac room-section">
    <div class="room-img">
      <img src="admin/index/acimg/<?php echo $ac;?>" alt="#">
    </div>
    <div class="room-content">
      <p class="sectionTag">A.C. Room</p>
      <p class="sectionsubTag font"> 24 hours check-out. We provide
        Lorem ipsum dolor, sit amet consectetur adipisicing elit. world class services in very low cost. i.e. 900rs.</p>
      <p class="price">Price per room :Rs 1800/-</p>
      <a href="room.php"><button class="price-btn">Book A Room</button></a>
    </div>
  </div>

  <?php

$querynonac="SELECT * FROM inonac_img order by nid DESC";
$resultnonac=mysqli_query($con,$querynonac);
$data4=mysqli_fetch_assoc($resultnonac);
$nonac=$data4['nonac_img'];
?>
  <div class="nonac room-section">
    <div class="room-content">
      <p class="sectionTag">A.C. Room</p>
      <p class="sectionsubTag font"> 24 hours check-out. We provide
        Lorem ipsum dolor, sit amet consectetur adipisicing elit. world class services in very low cost. i.e. 900rs.</p>
      <p class="price">Price per room :Rs 1800/-</p>
      <a href="room.php"><button class="price-btn">Book A Room</button></a>
    </div>
    <div class="room-img">
      <img src="admin/index/nonacimg/<?php echo $nonac;?>" alt="#">
    </div>
  </div>
</section>
<!-- book room -->

<!-- food -->
<?php


?>

<section id="services-container">
  <h1 class="h-primary center">Our Speciality</h1>
  <div id="services">
    <div class="box">
      <a href="food.php"><img src="img/thali.jpg" alt="manchurion"></a>
      <h2 class="h-secondary center">Typical Nepali Thali</h2>
      <p class="center">The Nepali staples consist primarily of rice, Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor architecto non error dolorum laborum numquam molestias vero nam repellat similique?
      </p>
    </div>

</section>
<!-- food -->

<!-- party hall -->

  <?php

  $queryhall="SELECT * FROM ihall_img order by hid DESC";
  $resulthall=mysqli_query($con,$queryhall);
  $data5=mysqli_fetch_assoc($resulthall);
  $hall=$data5['hall_img'];
  ?>


<section id="hall">
  <img src="admin/index/hall/<?php echo $hall;?>" alt="">
  <h1 class="h1">Party And Marriage Halls</h1>
</section>

<!-- party hall -->


<?php require ('inc/footer.php'); ?>
<?php require ('inc/script.php'); ?>
<?php require ('inc/footertag.php'); ?>