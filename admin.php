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
.paste-button {
    position: relative;
    display: inline-block;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  }
  
  .button {
    background-color:  #fa9579;
    color: #212121;
    padding: 10px 15px;
    font-size: 15px;
    font-weight: bold;
    border: 2px solid transparent;
    border-radius: 15px;
    cursor: pointer;
  }
  
  .dropdown-content {
    display: none;
    font-size: 13px;
    position: absolute;
    z-index: 1;
    min-width: 200px;
    background-color: #212121;
    border: 2px solid #fa9579;
    border-radius: 0px 15px 15px 15px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  }
  
  .dropdown-content a {
    color: #fa9579;
    padding: 8px 10px;
    text-decoration: none;
    display: block;
    transition: 0.1s;
  }
  
  .dropdown-content a:hover {
    background-color:#fa9579;
    color: #212121;
  }
  
  .dropdown-content a:focus {
    background-color: #212121;
    color:#fa9579;
  }
  
  .dropdown-content #top:hover {
    border-radius: 0px 13px 0px 0px;
  }
  
  .dropdown-content #bottom:hover {
    border-radius: 0px 0px 13px 13px;
  }
  
  .paste-button:hover button {
    border-radius: 15px 15px 0px 0px;
  }
  
  .paste-button:hover .dropdown-content {
    display: block;
  }
  
.sign-in-up
{
    display: flex;
    /* margin-top: px; */
    margin-top: 10px;
    padding: 5px;
    
}
.sign-in-up button{
  margin: 0px 40px;
    height: 40px;
    width: 90px;
    font-size: 1.3rem;
}

/* navbar */

/* login */
.popup-container{
    width: 100%;
    height: 100%;
    position: fixed;
    top: 0;
    left: 0;
    background-color: rgba(0,0,0,0.2);
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: center;
    display: none;
}
.popup-container .popup{
    background-color: #f0f0f0;
    width: 350px;
    border-radius: 5px;
    padding: 20px 25px 30px 25px;
}
.popup-container .popup h2{
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: space-between;
    margin-bottom: 30px;
    color: #fa9579;
}
.popup-container .popup h2{
    border: none;
    background-color: transparent;
    outline: none;
    font-size: 18px;
    font-weight: 550;
    color: #797775;
}

.popup-container .popup input{
    width: 100%;
    margin-bottom: 20px;
    background-color: transparent;
    border: none;
    border-bottom: 2px solid #fa9579;
    border-radius: 0px;
    padding: 5px 0;
    font-weight: 550;
    font-size: 14px;
    outline: none;
}
.popup-container .popup .login-btn,.popup-container .register .register-btn , .popup-container .forgot button.reset-btn{
    font-weight: 550;
    font-size: 15px;
    color: white;
    background-color:#fa9579;
    
    padding: 4px 10px;
    border: none;
    outline: none;
    margin-top: 5px;
}
.popup-container .popup .forgot-btn{
    text-align: right;
}
.popup-container .popup .forgot-btn button{
    outline: none;
    background-color: transparent;
    border: none;
    font-weight: 450;
    cursor: pointer;
}
.popup-container .register{
    background-color: #edeef7;
}
.popup-container .register h2 , .popup-container .forgot h2{
    color: #fa9579;
}
.popup-container .register input , .popup-container .forgot input{
    border-bottom-color: #fa9579;
}
.popup-container .register .register-btn , .popup-container .forgot button.reset-btn{
    background-color: #fa9579;
}
/* login */



</style>
</head>
<body>
    <nav class="navbar">
        <div class="left-nav">
            <P>Admin Panel</P>
        </div>
        <div class="right-nav mt-4">
            <ul>
                
                <li class="item"><a href="admin/aroom.php">Rooms</a></li>
                <li class="item"><a href="admin/afood.php">Food</a></li>
                <li class="item"><a href="index.php">User</a></li>
              
        <?php
            if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']==true)
            {
               ?>
              <div class="paste-button">
      <button class="button"> <?php echo $_SESSION["username"]; ?>&nbsp; ▼</button>
          <div class="dropdown-content">
        <a id="middle" href="logout.php">Logout</a>
      </div>
   </div>
               <?php 
            }
            else{
                echo "
                <div class='sign-in-up'>
                <button type='button' onclick=\"popup('login-popup')\">Login</button>
                <button type='button' onclick=\"popup('register-popup')\">Register</button>
                </div>";
            }
        ?>
          </ul>
        </div>
    </nav>



    <div class="popup-container" id="login-popup">
        <div class=" popup">
            <form action="login_register.php" method="POST">
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
            <form action="login_register.php" method="POST">
                <h2>
                    <span>User REGISTER</span>
                    <button type="reset" onclick="popup('register-popup')">X</button>
                </h2>
                <input type="text" placeholder="FULL NAME"  name="fullname" required>
                <input type="text" placeholder="User Name" name="username" required>
                <input type="email" placeholder="E-Mail"  name="email" required>
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
<script>
       
        function popup(popup_name)
        {
             get_popup=document.getElementById(popup_name);
             if(get_popup.style.display=="flex")
            {
                get_popup.style.display="none";
            }
            else{
                get_popup.style.display="flex";
            }
        }

        function forgotPopup()
        {
            document.getElementById('login-popup').style.display="none";
            document.getElementById('forgot-popup').style.display="flex";
        }
   
</script>
</html>