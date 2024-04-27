<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Document</title>
    <script src="https://kit.fontawesome.com/c5a4938a4c.js" crossorigin="anonymous"></script>
    <style>
        *
        {
            margin: 0;
            padding: 0;
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
    font-size: 2rem;
    font-family: 'Baloo 2', cursive;
    font-style: bold;
    color: white;
}
.right-nav{
    width: 80%;
    margin-top: 13px;

}
.right-nav ul{
  display: flex;
}
.right-nav ul li{
   list-style: none;
  
   margin: 20px;
   
}
.right-nav ul li a{
    text-decoration: none;
    color: #222;
    font-family: 'Baloo 2', cursive;
    padding: 0px 10px;
    font-size: 25px; 
     font-weight: 400; 
    position: relative;
   
    }
.right-nav ul li a:hover{
    color: black;
    background: white;
    border-radius: 30px;
}
#user-icon
{

    padding: 10px;
    position: relative;
    display: inline-block;

}
#admin-box
{
    position: absolute;
    z-index: 1;
    width: 250px;
    height: 250px;
    top: 80px;
    background-color: white;
    font-family: 'Baloo 2', cursive;
    border: solid 2px black;
    right: 10px;
     display: none; 
     flex-direction: column;
     padding-bottom: 20px;
     cursor:pointer;
}
#profile-pic
{
    height: 90px;
    width: 40%;
    border: 0.1px solid black;
    border-radius: 50%;
    margin: auto;
  margin-top: 20px;
 
}

#admin-username
{
    text-align: center;
    font-family: 'Baloo 2', cursive;
    font-weight: 300;

}
#logout-button
{
 margin-left: 29%;
    background-color: #fa9579;
    color: black;
    font-family: 'Baloo 2', cursive;
    font-weight: 100;
    font-size: 18px;
width: 100px;
margin-bottom: 6px;
}
#logout-button a{
    text-decoration: none;
    color: black;
     font-family: 'Baloo 2', cursive;
}
#naccount-button
{height: 30px;
    width: 80%;
    background-color: #fa9579;
    color: black; 
     margin-left: 10%;
     margin-top: 10px;
}
#naccount-button a{
    text-decoration: none;
    color: black;
     font-family: 'Baloo 2', cursive;
     font-size: 19px;
}

.head{
  width: 100%;
  height: 70px;
  
}
.message{
display: inline-block;
}
.message a button{
  background-color: Blue;
  color: white;
  height: 50px;
  width: 170px;
  margin: 10px 0px 0px 20px;

}

#post-message
{
  display: flex;
  flex-direction: column;
  width: 60%;
height: 300px;
  
  border: solid black 1px;
  border-radius: 10px;
  border-collapse: collapse;
  margin:40px;
}
#message-header
{

width: 100%;
height: 80px;
display: flex;
flex-direction: row;
position: relative;
background-color: lavender;
border-radius: 9px;
z-index: -1;

}
#message-section
{
  width: 100%;

  height: 160px;
  
}
#message-section p{
  font-size: 21px; 
font-family: 'Baloo 2', cursive;
font-weight: 300;
padding: 20px;

}
#message-footer
{
  width: 100%;
  height: 70px;
 display: flex;
 flex-direction: row;
 justify-content: center;

}
#message-footer a
{
margin: 10px;
}
#message-footer a button{
  width: 100px;
  height: 50px;
}
 #delete-btn{
  border: 1px solid black;
  background-color:red;
  color: white;
}
#edit-btn{
  border: 1px solid black;
  background-color: green;
  color: white;
}

#message-profile
{
width: 15%;
height: 100%;
 display: inline-block;
}
#post-detail
{
  width: 15%;
  height: 100%;

display: inline-block;
}
#account-type
{
width:15%;
height: 50%;
display: inline-block;
right: 15px;
  position: absolute;
  margin-top: 30px;
background-color: black;
border: 1px solid black;
border-collapse: collapse;

}
#account-type p{
    color: white;
    font-size: 23px; 
        font-family: 'Baloo 2', cursive;
        text-align: center;
}
#post-username
{
        height: 60%;
        width: 100%;

}
#post-username p{
  font-size: 25px; 
        font-family: 'Baloo 2', cursive;
        font-weight: 300;
        text-align: center;
      
}
#post-time
{

 height: 40%;
width: 100%;
       
}
#post-time p{
  font-size: 10px; 
        font-family: 'Baloo 2', cursive;
        margin-top:0px;
        text-align: center;
      
}
#profilepic
{
    height:100%;
    width: 80%;
    border: 1px solid black;
    border-radius: 50%;
    margin: auto;
    position: relative;
  
 
}
#profilepic img{
    width: 100%;
    height: 100%;
    border-radius: 50%;
    position: absolute;
}
        #menu
        {
            position: absolute;
            width: 30%;
            height: 400px;
            border: 1px solid black;
           right: 100px;
           top: 50px;
          display: none;
       flex-direction: column;
       z-index: 2;
        }
        .menu-first
        {
            width: 100%;
            border: 1px solid black;
            height: 25%;
           
        }
        
.div1
{
    position:relative;

}
#sec-menu{
    position: absolute;
    right: 400px;
    height: 200px;
    width:200px ;
    border: 1px solid black;
    display: flex;
    flex-direction: column;
    
}
.menu-second
{
            width: 100%;
            border: 1px solid black;
            height: 16.67%;  
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
right: 700px;
display: flex;
flex-direction: column;
}
.menu-third
{
    width: 100%;
            border: 1px solid black;
            height: 50%; 
}
.menu-icon
{
 display: inline-block;
  float: right;
  margin:20px 15px 0px 0px ;
  width: 40px;
}

    </style>
</head>
<body>
      <nav class="navbar">
    <div class="left-nav">
      <P>Admin Panel</P>
    </div>
    <div class="right-nav mt-4">
      <ul>
        <li class="item"><a href="admin.php">Home</a></li>
        <li class="item"><a href="aroom.php">Room</a></li>
        <li class="item"><a href="afood.php">Food</a></li>
        <li class="item"><a href="acontact.php">Contact</a></li>
        <li class="item"><a href="afeedback.php">Feedback</a></li>
        <li class="item "><a href="../index.php" onclick="confirmBox()">User</a>
        <?php 
        if(isset($_SESSION['admin_panel']['logged_in'])&& $_SESSION['admin_panel']['logged_in']==true)
        {
          ?>
        <li class="item">
           <div id="user-icon">
           <a class='icons'> <i class="fa-solid fa-user" onclick="AdminBox()"></i></a>
          </div>
        </li>
        <div id="admin-box">
          <div id="profile-pic">
              <img src="<?php echo $_SESSION['admin_panel']['profile']; ?>" alt="profile load error"  width="100%" height="100%">
          </div>
      
          <h1 id="admin-username"><?php echo $_SESSION['admin_panel']['name']; ?></h1>
          <button id="logout-button"><a href="alogout.php">LogOut</a></button>
       
          <button id="naccount-button"><a href="aregister.php">Create New Account</a></button>
        </div>
        <?php
 }

 ?>
      </ul>
    </div>
  </nav>
<div class="head">
<div class="message">
  <a href="message.php"><button>Leave Messages</button></a>
</div>

<div class="menu-icon">
  <a><i class="fa-solid fa-bars" onclick="menu()"></i></a>
</div>
</div>
    <!-- main menu -->
    <div id="menu">
        <div class="menu-first div1" onclick="menuFirst()">
    </div>
        <div class="menu-first div2"><a></a></div>
        <div class="menu-first div3"><a></a></div>
        <div class="menu-first div4"><a></a></div>
    </div>
    <!-- main menu -->



<!-- Div 1 Ko Secondary menu -->
<div id="sec-menu">
<div class="menu-second div11" onclick="menuSecond()"></div>
<div class="menu-second div12"></div>
<div class="menu-second div13"></div>
<div class="menu-second div14"></div>
<div class="menu-second div15"></div>
<div class="menu-second div16"></div>
</div> 
<!-- Div 1 Ko Secondary menu -->



    
    <!-- Register Check Dropdown -->
    <div id="reg-check">
        <div class="menu-third register"></div>
        <div class="menu-third check"></div>
    </div> 
      <!-- Register Check Dropdown -->


    <script>
  function menu() {
      let x = document.getElementById('menu');
    
      if (x.style.display=="none") {
        x.style.display="flex";
        
      } else {
        x.style.display="none";
      }
    } 

    function menuSecond() {
      let x = document.getElementById('reg-check');
      if (x.style.display=="none") {
        x.style.display="flex";
      } else {
        x.style.display="none";
      }
    } 

    function menuFirst() {
      let x = document.getElementById('reg-check');
      let y=document.getElementById('sec-menu');

    if(y.style.display=="none")
    {
        y.style.display="flex";
    }
    else{
        y.style.display="none";
        x.style.display="none"; 
    }
    } 

    </script>
</body>
</html>
