<?php include('../../connection.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index Page</title>
    <style>
*
        {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
#tp-btn
        {
            background-color: blue;
            color: white;
            font-size: 16px; 
        font-family: 'Baloo 2', cursive;
        width: 150px;
        height: 40px;
   margin: 50px 50px;
   border-radius: 10px;
        }

table{
    width: 100%;
}
table th{
font-size: 25px;
background-color: lavender;
}
table tr{
  height: 150px;
padding: 10px;

}
table tr td{
text-align: center;
font-size: 19px;
}
        
table,
        th,
        td {
            border: 3px solid black;
            border-collapse: collapse;
          
        }
        .actn-btn
        {
            color: black;
            font-size: 18px; 
        font-family: 'Baloo 2', cursive;
        width: 70px;
        height: 40px;
        border-radius: 10px;   
        }
        .edit-btn{
            background-color: green;
        }
        .del-btn{
            background-color: red; 
        }
        #tp-btn1
        {
            background-color:white;
            color: black;
            font-size: 16px; 
        font-family: 'Baloo 2', cursive;
        width: 150px;
        height: 40px;
  margin-top: 50px;
  margin-left:20%;
   border-radius: 10px;
        }
     
    </style>
</head>
<body>
    <section class="main">
<div class="container">
    <a href="create.php"><button id="tp-btn">Add Data</button></a>
    <a href="show.php"><button id="tp-btn1">Show data</button></a>
    <table>
        <thead>
        <tr>
                <th scope="col" width="10%">S.N</th>
                <th scope="col" width="15%">Name</th>
                <th scope="col" width="15%">Address</th>
                <th scope="col" width="15%">Phone Number</th>
                <th scope="col" width="20%">Email</th>
                <th scope="col" width="25%">Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
<?php 
$query="SELECT * FROM kitchen";
$result=mysqli_query($con,$query);
$i=1;
while($data=mysqli_fetch_array($result))
{
    ?>
<td scope="row"><?php echo $i++; ?></td>
<td scope="row"><?php echo $data['name']; ?></td>
<td scope="row"><?php echo $data['address']; ?></td>
<td scope="row"><?php echo $data['phone']; ?></td>
<td scope="row"><?php echo $data['email']; ?></td>
<td scope="row">
<a href="edit.php?id=<?php echo $data['kid'];?>"><button class="actn-btn edit-btn">Edit</button></a> 
<a href="delete.php?id=<?php echo $data['kid'];?>"><button class="actn-btn del-btn">Delete</button></a>


</td>
</tr>
    <?php
}

?>

        </tbody>
    </table>
</div>
    </section>
</body>
</html>