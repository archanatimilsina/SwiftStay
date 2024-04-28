<?php include('../connection.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Message</title>
    <style>
        *{
          margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

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
  border: solid black 1px;
  border-radius: 10px;
  border-collapse: collapse;
  
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
</head>
<body>

<div class="message">
  <a href="message.php"><button>Leave Messages</button></a>
</div>

<section>
<?php 
$query="SELECT * FROM messages";
$result=mysqli_query($con,$query);
  $n=1;
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

?> 
</section>
</body>
</html>