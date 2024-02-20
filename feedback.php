
<?php
include('inc/header.php');
include('connection.php');
?>

<section id="feedback">
</section>
<section id="feedback-form">
    <p class="feedback_head">Write Your Feedback</p>
    <form action="feedback.php" method="post">
       <input type="text" name="name" placeholder="Enter Name">
       <input type="text" name="feedback" placeholder="Enter Feedback">
       <input type="submit" name="submit">
    </form>
    <?php
       if(isset($_POST['submit']))
       {
           $name = $_POST['name'];
           $feedback=$_POST['feedback'];

           $qry="INSERT INTO `feedbacks`(`name`, `feedback`) VALUES ('$name','$feedback')";
           $run=mysqli_query($con,$qry);
           if($run==true)
           {
               ?>
               <script>
                   alert("Feedback Save Perfectly");
               </script>
               <?php
           }
       }
    ?>
</section>


<?php 
include("inc/script.php");
include("inc/footertag.php");
?>