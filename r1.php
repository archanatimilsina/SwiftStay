<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AC delux room form</title>
    <style>
        .container
        {
            width: 60%;
            height: 1000px;
            background-color: red;
            color: white;
            margin: auto;
        }
    </style>
</head>
<body>
    <div class="container">
        <p>Please fill up the form</p>
      <form action="index.php" method="GET">
        <label for="">Status</label>
        <input type="text"><br>
        <label for="">Name</label>
        <input type="text">
        <label for="">Address</label>
        <input type="text">
        <label for="">District</label>
        <input type="text">
        <label for="">City</label>
        <input type="text">
        <label for="">Email</label>
        <input type="text">
        <label for="">Check in date</label>
        <input type="date">
        <label for="">Check out date</label>
        <input type="date">


      </form>
    </div>
</body>
</html>