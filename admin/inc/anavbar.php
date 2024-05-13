<style>
  .right-nav ul .paste-button li {
    text-decoration: none;
    color: #222;
    font-family: 'Baloo 2', cursive;
    font-size: 26px;
    font-weight: 400;
    position: relative;

  }

  .right-nav ul .paste-button li:hover {
    color: black;
    background: white;
    border-radius: 30px;
  }

  .paste-button {
    position: relative;
    display: inline-block;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  }

  .button {
    background-color: #fa9579;
    color: black;
    font-size: 15px;
    border: 2px solid transparent;
    border-radius: 15px;
    cursor: pointer;
  }

  .dropdown-content {
    display: none;
    font-size: 13px;
    position: absolute;
    z-index: 1;
  }

  .dropdown-content a {
    color: #222;
    font-family: 'Baloo 2', cursive;
    font-size: 26px;
    font-weight: 400;
    text-decoration: none;
    display: block;
    width: 180px;
    height: 45px;
    border-radius: 5px;
    border: black solid 1px;
    text-align: center;
    background-color: white;

  }

  .dropdown-content a:hover {
    background-color: #fa9579;

  }

  .paste-button:hover button {
    background-color: white;
  }

  .paste-button:hover .dropdown-content {
    display: block;
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
       
        <li class="item"><a href="acontact.php">Contact</a></li>
        <li class="item"><a href="afeedback.php">Feedback</a></li>
        <div class="paste-button">
          <li class="item">Other </li>
          <div class="dropdown-content">
            <a id="first" href="messagepanel.php">Message</a>
            <a id="second" href="pagedata.php">Page Data</a>

          </div>
        </div>
        <li class="item "><a href="../index.php" onclick="confirmBox()">User</a>
          <?php
          if (isset($_SESSION['admin_panel']['logged_in']) && $_SESSION['admin_panel']['logged_in'] == true) {
            ?>
          <li class="item">
            <div id="user-icon">
              <a class='icons'> <i class="fa-solid fa-user" onclick="AdminBox()"></i></a>
            </div>
          </li>
          <div id="admin-box">
            <div id="profile-pic">
              <img src="<?php echo $_SESSION['admin_panel']['profile']; ?>" alt="" width="100%"
                height="100%">
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