</head>
<body>
  <nav class="navbar">
    <div class="left-nav">
      <P>Admin Panel</P>
    </div>
    <div class="right-nav mt-4">
      <ul>
        <!-- onclick="AdminBox()" -->
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
            <i class="fa-solid fa-user" onclick="AdminBox()"></i>
          </div>
        
        </li>
        <div id="admin-box">
          <div id="profile-pic">
            <!-- <img src="img/about.avif" alt="#"> -->
          </div>
          <h1 id="admin-username"><?php echo $_SESSION['name']; ?></h1>
          <button id="logout-button"><a href="alogout.php">LogOut</a></button>
       
          <button id="naccount-button"><a href="alogout.php">Create New Account</a></button>
        </div>
        <?php
 }
 ?>


      </ul>
    </div>
  </nav>
   