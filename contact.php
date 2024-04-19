<?php 
    include('connection.php');
 ?>
<?php require('inc/header.php');?>
<link rel="stylesheet" href="css/contact.css">
<?php require('inc/navbar.php');?>

<div class="contact-container">
   
    <div class="contact1">
        <div class="contact-symbol">
           <i class="fas fa-hamburger">SwiftStay</i>
        </div>
        <div class="book-h1">
            <h1>BOOK YOUR <br> HOTEL TODAY</h1>
        </div>
        <div class="website">
            <p>www.swiftstay.com</p>
        </div>
    </div>
    <div class="contact2">
        <div class="contact2-h1">
        <h1>Don't Hesitate <br> To Contact Us</h1>
        </div>
       
       <div class="contact-box">
       <form action="contact.php" method="post">
                <div class="form-group-con">
                    <label for="name">Name:</label>
                    <input type="text" name="name" id="name" placeholder="Enter Your name">
                </div>
                <div class="form-group-con">
                    <label for="name">Email:</label>
                    <input type="email" name="email" id="email" placeholder="Enter Your Email">
                </div>
                <div class="form-group-con">
                    <label for="name">Mobile:</label>
                    <input type="phone" name="phone" id="phone" placeholder="Enter Your phone">
                </div>
                <div class="form-group-con">
                    <label for="name">Address:</label>
                    <input type="phone" name="address" id="address" placeholder="Enter Your Address">
                </div>
                <div class="form-group-con">
                    <label for="name">message:</label>
                  <textarea name="message" id="message" cols="20" rows="6"></textarea>
                </div>
                <div class="form-group-con">
                    <button class="con-btn" name="con-btn">Submit</button>
                </div>
            </form>
            <?php
               if(isset($_POST['con-btn']))
               {
                   $name=$_POST['name'];
                   $email=$_POST['email'];
                   $phone=$_POST['phone'];
                   $address=$_POST['address'];
                   $message=$_POST['message'];

                   $query="SELECT * FROM contacts WHERE email='$email'";
                   $result=mysqli_query($con,$query);
                   $data=mysqli_fetch_assoc($result);
                   if($result)
                   {
if($data['email']!=$email)
{      
            $qry="INSERT INTO contacts(name, email, phone, address, message) VALUES ('$name','$email','$mobile','$address','$message')";
                   $run=mysqli_query($con,$qry);
                   if($run)
                   {
                       ?>
                       
                       <script>
                           alert("Thanks For Contacting Us");
                       </script>
                       <?php
                   }
                  }
                  else{
                    echo "<script>
                    alert('You can contact only one time through website! please call');
                    window.location.href='contact.php';
                    </script>";
                  }
               }
               else{
                echo "<script>
                alert('cannot Run');
                window.location.href='contact.php';
                </script>";
              }
            }
            ?>
       </div>
    </div>
    
</div>
<?php require('inc/footer.php');?>
    <?php require('inc/script.php');?>
    <?php require('inc/footertag.php');?>
