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
   