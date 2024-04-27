<?php require('inc/aheader.php'); ?>
<style>

        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
.head{
  width: 100%;
  height: 70px;
  position: relative;
}
.message{
position: absolute;
right: 10px;
}
.menu-icon
{
  position: absolute;
  left: 15px;
  top: 10px;
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
<div class="message">
  <a href="message.php"><button>Leave Messages</button></a>
</div>

  <div class="menu-icon">
  <a><i class="fa-solid fa-bars" onclick="hello()"></i></a>
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
        <div class="menu-first div1" onclick="menuFirst()"></div>
        <div class="menu-first div2"><a></a></div>
        <div class="menu-first div3"><a></a></div>
        <div class="menu-first div4"><a></a></div>
    </div>
    <!-- main menu -->



<?php require('inc/ascript.php'); ?>

<script>
   function hello() {
      let z= document.getElementById('menu');
      if (z.style.display=="none") {
        z.style.display="flex";
      } else {
        z.style.display="none";
      }
    } 
    
  function AdminBox() {
      let x = document.getElementById('admin-box');
      if (x.style.display=="none") {
        x.style.display="flex";
      } else {
        x.style.display="none";
      }
    } 
    
    function confirmDelete()
    {
      if (confirm("Are you sure to delete this message")) {
    window.location.href='message-delete.php?id=<?php echo $data['m_id'];?>';
  } else{
    window.location.href="admin.php";
  }
    }
</script>

<?php require('inc/afootertag.php'); ?>