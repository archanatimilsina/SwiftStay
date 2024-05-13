<?php require ('../connection.php');
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Message</title>
    <style>
        .message-head {
            text-align: center;
            font-size: 25px;
            font-family: 'Baloo 2', cursive;
            font-weight: 500;
        }

        .message form {
            width: 100%;
            height: 100%;
            border: 1px soild black;
            display: flex;
            flex-direction: column;
        }

        .message form #textarea {
            width: 300px;
            height: 400px;
            font-size: 21px;
            font-family: 'Baloo 2', cursive;
            font-weight: 300;

        }

        #post-btn {
            width: 150px;
            height: 50px;
            background-color: blue;
            color: white;
            font-size: 21px;
            font-family: 'Baloo 2', cursive;
            font-weight: 300;
            border: 1px solid black;
            margin: 10px 40px;
        }
    </style>
</head>

<body>
    <div class="message">
        <h1 class="message-head">Write Your Message Here</h1>
        <form action="#" method="POST">

            <input type="textarea" id="textarea" placeholder="Write Here" name="message">
            <input type="submit" value="Post" id="post-btn" name="submit">
        </form>
    </div>
    <?php
    if (isset($_POST['submit'])) {
        $profile = $_SESSION['admin_panel']['profile'];
        $name = $_SESSION['admin_panel']['name'];
        $email = $_SESSION['admin_panel']['email'];
        $message = $_POST['message'];

        $query = "INSERT INTO messages(profile,name,email,account_type,message) VALUES ('$profile','$name','$email','Admin','$message')";
        $result = mysqli_query($con, $query);

        if ($result) {
            echo " <script>
alert('Message Posted!!');
window.location.href='messagepanel.php';
</script>";
        } else {
            echo " <script>
alert('Cannot post!!');
window.location.href='messagepanel.php';
</script>";
        }
    }
    ?>
    
</body>

</html>