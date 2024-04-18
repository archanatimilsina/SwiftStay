<?php
include('connection.php');
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SWIFTSTAY</title>
    
    <link href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@500&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/c5a4938a4c.js" crossorigin="anonymous"></script>
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

/* button.user{
    padding:20px;
    border: none;
    background-color: #fa9579;
    border-radius: 50%;
    margin-right: 30px;
}
button:hover {
    color: white;
    background-color: grey;
}
button:active {
    background-color: white;
}
#username{
    font-size: larger;
    padding: 25px;
}
#icon{
    margin: 10px 10px;
}
dialog{
    border-radius: 20px;
    margin: auto;
}
#dialogbox{
    padding: 5px 20px;
}

#userdetail{
    background-color: white;
    padding: 10px;
    padding-left: 30px;
    border-radius: 35px;
} */
/* navbar */
</style>
</head>
<body>
  <nav class="navbar">
    <div class="left-nav">
      <P>Admin Panel</P>
    </div>
    <div class="right-nav mt-4">
      <ul>
        <!-- onclick="AdminBox()" -->
        <li class="item"><a href="admin/aroom.php">Room</a></li>
        <li class="item"><a href="admin/afood.php">Food</a></li>
        <li class="item"><a href="index.php">Contact</a></li>
        <li class="item"><a href="index.php">Feedback</a></li>
        <li class="item "><a href="index.php">User</a>
        <li class="item">
           <div id="user-icon">
            <i class="fa-solid fa-user" onclick="AdminBox()"></i>
          </div>
        
        </li>
        <div id="admin-box">
          <div id="profile-pic">
            <!-- <img src="img/about.avif" alt="#"> -->
          </div>
          <h1 id="admin-username">Lorem ipsum</h1>
          <button id="logout-button"><a href="admin/alogout.php">LogOut</a></button>
       
          <button id="naccount-button"><a href="alogout.php">Create New Account</a></button>
        </div>

      </ul>
    </div>
    <!-- <div id="userdetail"><span style="font-size:24px ;padding-right:20px;">Username</span><button class="user" data-open-modal ><i class="fa-solid fa-user fa-2xl" ></i></button></div>
  </nav>

  <dialog data-modal>
        <div id="dialogbox">
            <button data-close-modal id="icon"><i class="fa-solid fa-xmark"></i></button>
            <div id="userinfo">
                <div id="username" >Username here</div>
                <button id="logout-button"><a href="admin/alogout.php">Logout</a></button>
            </div>
        </div>
    </dialog>



    const openButton = document.querySelector("[data-open-modal]")
    const closeButton = document.querySelector("[data-close-modal]")
    const modal = document.querySelector("[data-modal]")

    openButton.addEventListener("click",() => {
        modal.showModal()
    })
    closeButton.addEventListener("click",() => {
        modal.close()
    }) -->

     <script>
    function AdminBox() {
      let x = document.getElementById('admin-box');
      if (x.style.display=="none") {
        x.style.display="flex";
      } else {
        x.style.display="none";
      }
    } 
  </script>
</body>
</html>