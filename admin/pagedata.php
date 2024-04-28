<?php
include('../connection.php');
 require('inc/aheader.php');
  ?>
    <style>
        *{
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }
    /* head */
    .head{
      width: 100%;
      height: 70px;
      
    }
    /* head */


    /* message */
        .message
        {
          position: absolute;
          right: 10px;
        }
        
        .message a button{
          background-color: Blue;
          color: white;
          height: 50px;
          width: 170px;
          /* message */
          
        }
        /* menu icon */
.menu-icon
{
position: relative;
margin-left: 10px;
  top: 10px;
}
#menu
{
           position: absolute;
            width: 300px;
            /* height: 800px; */
            border: 1px solid black;
           left: 28px;
           top: 105px;
          display: none;
       flex-direction: column;
      z-index: 1;
        }
        
        .menu-first
        {
            width: 100%;
            border: 1px solid black;
            height: 12.5%;
        }
        
.div1
{
    position:relative;

}
#sec-menu{
    position: absolute;
    left:330px;
    height: 300px;
    width:200px ;
    border: 1px solid black;
    display: none;
    flex-direction: column;
    top: 150px;
    
}

.div11
{
    position: relative;
}
#reg-check{
position: absolute;
width: 100px;
height: 70px;
border: 1px solid black;
left: 535px;
display: none;
flex-direction: column;
}
.menu-third
{
    width: 100%;
            border: 1px solid black;
            height: 50%; 
}
.menu-first
{
    padding: 30px;
    
}
.menu-second
{
            width: 100%;
            border: 1px solid black;
            height: 16.67%; 
            padding:15px ; 
          
} 
.menu-second a{
  display: inline-block;
  text-decoration: none;
  text-align: center;
    font-family: 'Baloo 2', cursive;
    font-size: 20px;
    font-weight: 400;
    color: black;
}
.menu-first a{
  display: inline-block;
  text-decoration: none;
  text-align: center;
    font-family: 'Baloo 2', cursive;
    font-size: 26px;
    font-weight: 400;
    color: black;
}
    </style>
    <?php require('inc/anavbar.php'); ?>
</head>
<body>
    
<div class="head">
  <div class="menu-icon">
  <a><i class="fa-solid fa-bars fa-lg" onclick="menu()"></i></a>
</div>
</div>

<!-- main menu -->
<div id="menu">
        <div class="menu-first div1" onclick="menuFirst()">
        <a>Official Users</a>
        <i class="fa-solid fa-caret-right" style="color: #000000;"></i>
    </div>
        <div class="menu-first div2">
        <a href="notices/index.php">Notices</a>
        </div>
        <div class="menu-first div3">
        <a href="holidays/index.php">Holidays</a>
        </div>
       
        <div class="menu-first div4">
        <a href="index/index.php">Index Page</a>
        </div>
        <div class="menu-first div5">
        <a href="about/index.php">About Page</a>
        </div>
        <div class="menu-first div6">
        <a href="food/index.php">Food Page</a>
        </div>
        <div class="menu-first div7">
        <a href="contact/index.php">Contact Page</a>
        </div>
        <div class="menu-first div8">
        <a href="feedback/index.php">Feedback Page</a>
        </div>
    </div>
   
    <!-- main menu -->
    

<!-- Div 1 Ko Secondary menu -->
<div id="sec-menu">
<div class="menu-second div11">
<a href="roomservice">Room Services</a>
<i class="fa-solid fa-folder" style="color: #000000;"></i>
</div>
<div class="menu-second div12">
<a href="admin">Admin</a>
<i class="fa-solid fa-folder" style="color: #000000;"></i>
</div>
<div class="menu-second div13">
<a href="reception">Reception</a>
<i class="fa-solid fa-folder" style="color: #000000;"></i>
</div>
<div class="menu-second div14">
<a href="cleaning">Cleaning service</a>
<i class="fa-solid fa-folder" style="color: #000000;"></i>
</div>
<div class="menu-second div15">
<a href="cashier">Cashier</a>
<i class="fa-solid fa-folder" style="color: #000000;"></i>
</div>
<div class="menu-second div16">
<a href="food">Kitchen service</a>
<i class="fa-solid fa-folder" style="color: #000000;"></i>
</div>
</div> 
<!-- Div 1 Ko Secondary menu -->
<?php require('inc/ascript.php');?>
<script>
    function menu() {
      let x = document.getElementById('menu');
      let y=document.getElementById('sec-menu');
      let z= document.getElementById('reg-check');
      if(x.style.display=="none")
    {
        x.style.display="flex";
    }
    else{
        x.style.display="none";
        y.style.display="none"; 
        z.style.display="none"; 
    }
    } 
    function menuFirst() {
     
      let y=document.getElementById('sec-menu');

    if(y.style.display=="none")
    {
        y.style.display="flex";
    }
    else{
        y.style.display="none";
       
    }
    } 
    
</script>
</body>
</html>