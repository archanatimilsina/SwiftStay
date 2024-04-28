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
/* menu icon */
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
position: absolute;
right: 10px;
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

  </style>
<?php require('inc/anavbar.php'); ?>

<div class="head">
  <div class="menu-icon">
  <a><i class="fa-solid fa-bars fa-lg" onclick="menu()"></i></a>
</div>
<div class="message">
  <a href="message.php"><button>Leave Messages</button></a>
</div>
</div>


<?php 
$query="SELECT * FROM messages";
$result=mysqli_query($con,$query);

if($result)
{
  $n=0;
  while($data=mysqli_fetch_assoc($result))
  {
    ?>
<div id="post-message">
  <div id="message-header">
<div id="message-profile">
<div id="profilepic">
  <img src="<?php  echo $data['profile'];?>" alt="#" >
</div>
</div>
<div id="post-detail">
    <div id="post-username">
      <p>
<?php echo $data['name']; ?></p>
    </div>
    <div id="post-time">
      <p>
    <?php echo $data['created_at']; ?></p>
    </div>

  </div>
  <div id="account-type">
    <p>
  <?php echo $data['account_type']; ?></p>
  </div>
  </div>

  <div id="message-section">
<p>
<?php echo $data['message']; ?>
</p>
  </div>
  <div id="message-footer">
<a href="message-edit.php?id=<?php echo $data['m_id'];?>"><button value="Edit" id="edit-btn">Edit</button></a>
<a href="message-delete.php?id=<?php echo $data['m_id'];?>"><button value="Delete" id="delete-btn" onclick="confirmDelete()">Delete</button></a>
  </div>
</div>
<?php
$n++;
  }
}
else{
  echo" <script>
alert('cannot run');
window.location.href='../adminlogin.php';
</script>";
}
?>

 <!-- main menu -->
 <div id="menu">
        <div class="menu-first div1" onclick="menuFirst()">
        <a>Official Users</a>
        <i class="fa-solid fa-caret-right" style="color: #000000;"></i>
    </div>
        <div class="menu-first div2">
        <a href="">Notices</a>
        </div>
        <div class="menu-first div3">
        <a href="">Holidays</a>
        </div>
       
        <div class="menu-first div4">
        <a href="index">Index Page</a>
        </div>
        <div class="menu-first div5">
        <a href="about">About Page</a>
        </div>
        <div class="menu-first div6">
        <a href="food">Food Page</a>
        </div>
        <div class="menu-first div7">
        <a href="contact">Contact Page</a>
        </div>
        <div class="menu-first div8">
        <a href="feedback">Feedback Page</a>
        </div>
    </div>
   
    <!-- main menu -->
    

<!-- Div 1 Ko Secondary menu -->
<div id="sec-menu">
<div class="menu-second div11">
<a href="">Room Services</a>
<i class="fa-solid fa-folder" style="color: #000000;"></i>
</div>
<div class="menu-second div12">
<a href="">Admin</a>
<i class="fa-solid fa-folder" style="color: #000000;"></i>
</div>
<div class="menu-second div13">
<a href="">Reception</a>
<i class="fa-solid fa-folder" style="color: #000000;"></i>
</div>
<div class="menu-second div14">
<a href="">Cleaning service</a>
<i class="fa-solid fa-folder" style="color: #000000;"></i>
</div>
<div class="menu-second div15">
<a href="">Cashier</a>
<i class="fa-solid fa-folder" style="color: #000000;"></i>
</div>
<div class="menu-second div16">
<a href="">Kitchen service</a>
<i class="fa-solid fa-folder" style="color: #000000;"></i>
</div>
</div> 
<!-- Div 1 Ko Secondary menu -->


    
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

</script>