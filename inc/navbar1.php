<!-- purano wala -->
</head>
<body>
    <nav class="navbar">
        <div class="left-nav">
            <img src="img/logo1.png" alt="logo">
        </div>
        <div class="right-nav mt-4">
            <ul>
                <li class="item"><a href="index.php">Home</a></li>
                <li class="item"><a href="about.php">About Us</a></li>
                <li class="item"><a href="room.php">Rooms</a></li>
                <li class="item"><a href="food.php">Food</a></li>
                <li class="item"><a href="contact.php">Contact Us</a></li>
                <li class="item"><a href="adminlogin.php">Admin</a></li>
                <li class="item"><a href="feedback.php">Feedback</a></li> 
                <li class="item">
        <?php
            if(isset($_SESSION['user_panel']['logged_in']) && $_SESSION['user_panel']['logged_in']==true)
            {
               ?> <div id="user-icon">
               <i class="fa-solid fa-user" onclick="AdminBox()"></i>
             </div>
           
              <!-- <div class="paste-button">
      <button class="button"> <?php echo $_SESSION['username']; ?>&nbsp; ▼</button>
          <div class="dropdown-content">
        <a id="middle" href="logout.php">Logout</a>
      </div>
   </div> -->

               <?php 
            }
            else{
                echo "
                <div class='sign-in-up'>
                <button type='button' onclick=\"popup('login-popup')\">Login</button>
                <button type='button' onclick=\"popup('register-popup')\">Register</button>
                </div>";
            }
        ?></li> 
          <div id="admin-box">
          <div id="profile-pic">
          <img src="<?php echo $_SESSION['user_panel']['profile']; ?>" alt="profile load error"  width="100%" height="100%">
          </div>
          <h1 id="admin-username"><?php  echo $_SESSION['username']; ?></h1>
          <button id="logout-button"><a href="logout.php">LogOut</a></button>
       
          <button id="naccount-button"><a href="../register.php">Create New Account</a></button>
        </div>
          </ul>
        </div>
    </nav>
    

    <div class="popup-container" id="login-popup">
        <div class=" popup">
            <form action="login.php" method="POST">
                <h2>
                    <span>User Login</span>
                    <button type="reset" onclick="popup('login-popup')">X</button>
                </h2>
                <input type="text" placeholder="E-mail or Username" name="email_username" required>
                <input type="password" placeholder="Password" name="password" required>
                <button type="submit" class="login-btn" name="login">Login</button>
            </form>
            <div class="forgot-btn">
                <button type="button" onclick="forgotPopup()">Forgot Password</button>
            </div>
        </div>
    </div>

    <div class="popup-container" id="register-popup">
        <div class="register popup">
            <form action="register.php" method="POST" enctype="multipart/form-data">
                <h2>
                    <span>User REGISTER</span>
                    <button type="reset" onclick="popup('register-popup')">X</button>
                </h2>
                 <label for="image">Upload profile:</label> 
                <input type="file" name="profile" >
                <input type="text" placeholder="FULL NAME"  name="fullname" required>
                <input type="text" placeholder="User Name" name="username" required>
                <input type="email" placeholder="E-mail"  name="email" required>
                <input type="password" placeholder="Password"  name="password" required>
                <button type="submit" class="register-btn" name="register">Register</button>
            </form>
        </div>
    </div>

    <div class="popup-container" id="forgot-popup">
        <div class="forgot popup">
            <form action="forgotpassword.php" method="POST">
                <h2>
                    <span>Reset Password</span>
                    <button type="reset" onclick="popup('forgot-popup')">X</button>
                </h2>
                <input type="email" placeholder="E-mail" name="email">
                
                <button type="submit" class="reset-btn" name="send-reset-link">Send Link</button>
            </form>
            
        </div>
    </div>