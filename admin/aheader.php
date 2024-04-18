<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FEEDBACK</title>
    <script src="https://kit.fontawesome.com/c5a4938a4c.js" crossorigin="anonymous"></script>
</head>
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

/* navbar */
</style>
<body>
<nav class="navbar">
    <div class="left-nav">
      <P>Admin Panel</P>
    </div>
    <div class="right-nav mt-4">
      <ul>
        
        <li class="item"><a href="aroom.php">Room</a></li>
        <li class="item"><a href="afood.php">Food</a></li>
        <li class="item"><a href="acontact.php">Contact</a></li>
        <li class="item"><a href="afeedback.php">Feedback</a></li>
        <li class="item "><a href="../index.php">User</a>
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
    </div></nav>