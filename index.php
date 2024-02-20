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
    <title>SWIFT STAY</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@500&display=swap" rel="stylesheet">
</head>
<body>
    <nav class="navbar">
        <div class="left-nav">
            <img src="img/logo1.png" alt="logo">
        </div>
        <div class="right-nav mt-4">
            <ul>
                <li class="item"><a href="index.php">Home</a></li>
                <li class="item"><a href="about.php">About</a></li>
                <li class="item"><a href="room.php">Rooms</a></li>
                <li class="item"><a href="contact.php">Contact</a></li>
                <li class="item"><a href="admin.php">Admin</a></li>
                <li class="item"><a href="feedback.php">Feedback</a></li>  
        <?php
            if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']==true)
            {
               ?>
              <div class="paste-button">
  <button class="button"><?php echo $_SESSION["username"]; ?>
    &nbsp; ▼</button>
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
                </div>
                ";
            }
        ?>
          </ul>
        </div>
    </nav>


    <!-- <script>
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
    </script> -->
    <!-- -------------- login ------------------------------- -->


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

    <!-- ----------  Home --------------------- -->
    <section id="home">
        <h1 class="h1">Welcome to SwiftStay</h1>
        <p class="p">Create the beautiful moments with the Swift Stay.</p>
    </section>

 
    <section  id="rooms-right">
        <div class="paras">
          <p class="sectionTag">A.C Delux Room</p>
          <p class="sectionsubTag font">We provide the best services in Room Management with 24 hours room services and 24 hours check-out. We provide world class services in very low cost. i.e. 1100rs.</p>
          <p class="price">Price per room : 1100Rs/-</p>
          <a href="room.php"><button class="price-btn" >Book Room</button></a>
          </div>
          <div class="thumbnail">
          <img src="img/acd.avif" alt="delux" class="imgFluid">
          </div>
    </section>

    <section id="rooms-left">
        <div class="paras">
          <p class="sectionTag">A.C. Room</p>
          <p class="sectionsubTag font">We have the best services provider in Room Management. with 24 hours room services and 24 hours check-out. We provide world class services in very low cost. i.e. 900rs.</p>
          <p class="price">Price per room : 900Rs/-</p>
          <a href="room.php"><button class="price-btn">Book Room</button></a>
          </div>
          <div class="thumbnail">
           <img src="img/acdeluxnew.avif" alt="delux">
          </div>
    </section>

    <section id="rooms-right">
        <div class="paras">
          <p class="sectionTag">Non A.C. Room</p>
          <p class="sectionsubTag font">We have the best services provider in Room Management. with 24 hours room services and 24 hours check-out. We provide world class services in very low cost. i.e. 700rs.</p>
          <p class="price">Price per room : 700Rs/-</p>
            <a href="room.php"><button class="price-btn">Book Room</button></a>
          </div>
          <div class="thumbnail">
          <img src="img/nonacnew.avif" alt="delux">
          </div>
    </section>

    <!-- -------------------------food ------------------------ -->
    <section id="services-container">
        <h1 class="food-header text-center">Our Speciality</h1>
        <div id="services">
            <div class="box">
                <a href="food.php"><img src="img/thali.avif" alt="manchurion"></a>
               <h2 class="h-secondary center">Typical Nepali</h2>
               <p class="center">
               The Nepali staples consist primarily of rice, wheat, corn and lentils, in addition to fresh vegetables and meats. A typical Nepali everyday meal can be characterized by Dal (lentil soups), Bhat (steamed rice), and Tarkari (vegetable preparations), also known as “The Trinity,” supplemented by some meat preparation.
               </p>
            </div>
            <div class="box">
                 <a href="food.php"><img src="img/momo.avif" alt="pasta"></a>
                <h2 class="h-secondary center">MOMOS</h2>
                <p class="center"> 
                Momos are a type of steamed filled dumpling in Tibetan and Nepali cuisine that is also popular in neighbouring Bhutan and India. Momos are usually served with a sauce known as achar influenced by the spices and herbs used within many South Asian cuisines.
                 </p>
             </div>
             <div class="box">
             <a href="food.php"><img src="img/burger.avif" alt="maharshtrian"></a>
                <h2 class="h-secondary center">Burger</h2>
                <p class="center">Some common types of burgers include beef burgers, chicken burgers, lamb burgers, fish burgers, veggie burgers, and black bean burgers. Within these categories, there are numerous variations that can be made by using different types of meats, vegetables, and seasonings</p>
             </div>
        </div>

        <div id="services">
            <div class="box">
            <a href="food.php"><img src="img/drink.avif" alt="panner"></a>
               <h2 class="h-secondary center">Drink</h2>
               <p class="center">A drink or beverage is a liquid intended for human consumption. In addition to their basic function of satisfying thirst, drinks play important roles in human culture. Common types of drinks include plain drinking water, milk, juice, smoothies and soft drinks. Traditionally warm beverages include coffee, tea, and hot chocolate. Caffeinated drinks that contain the stimulant caffeine have a long history
               </p>
            </div>
            <div class="box">
            <a href="food.php"><img src="img/desert.avif" alt="dosa"></a>
                <h2 class="h-secondary center">Desert</h2>
                <p class="center">The term dessert can apply to many sweets, such as biscuits, cakes, cookies, custards, gelatins, ice creams, pastries, pies, puddings, macaroons, sweet soups, tarts, and fruit salad (fruit is commonly found in dessert courses because of its naturally occurring sweetness)</p>
             </div>
             <div class="box">
             <a href="food.php"><img src="img/chatpat.jpeg" alt="faluda"></a>
                <h2 class="h-secondary center">Snack</h2>
                <p class="center">A small amount of food that is eaten between meals, or a very small meal: I had a huge lunch, so I'll only need a snack for dinner. Fresh or dried fruit makes an ideal snack. Many snack foods are high in salt, sugar, and fat.</p>
             </div>
        </div>
       
    </section>

    
    <section id="booking-hall">
        <h1 class="h1">Party And Marriage Halls</h1>

    </section>

    <!-- -------------------------Footer ---------------------------- -->

    <section id="footer" class="section footer">
        <div class="container">
            <div class="footer-container">
                <div class="footer-center">
                <h3>ABOUT US</h3>
                <p>The majority of independent <br> properties are losing out <br> on a lot of business for <br> one very simple reason: <br> their hotel websites are poorly <br> designed.</p>
                </div>
                <div class="footer-center">
                    <h3>USEFUL LINKS</h3>
                    <a href="room.php">Rooms</a>
                    <a href="contact.php">Contact Us</a>
                    <a href="food.php">Food</a>
                    <a href="booking.php">Booking</a>
                    <a href="index.php">Home</a>
                </div>
                <div class="footer-center">
                    <h3>CONTACT INFO</h3>
                    <p>Sudal-9,Bhaktapur <br>9806531378<br>www.swiftstay.com</p>
                </div>
                <div class="footer-center">
                    <h3>OPENING HOURS</h3>
                    <div>
                        
                        Sun: 6AM-10PM
                    </div>
                  
                    <div>
                       
                       Mon-wed: 8AM-9PM
                    </div>
                    <div>
                       Thu: 7AM-10PM
                    </div>
                    <div>
                   Fri & Sat: 5AM-11PM
                    </div>
                </div>
            </div>
        </div>
    </section>
    

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