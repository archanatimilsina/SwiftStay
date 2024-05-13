
<?php include('../../connection.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cashier data</title>
    <style>
        *
        {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
     
#book-section
  {
    width: 100%;
  }
#book-head
{
  text-align: center;
  margin: 30px;
  font-size: 30px;
}
  .book-table
  {
    width: 100%;
    
  }
  .book-table table
  {
    width: 100%;
  }
  .book-table table th{
    font-size:19px;
    background-color: lavender;
  }
  table,
        th,
        td {
            border: 3px solid black;
            border-collapse: collapse;
            padding: 5px;
        }
.book-table table tr{
  height: 90px;

}
.book-table table tr td{
text-align: center;
font-size: 17px;

}
#room
{
  width: 50px;
  height: 35px;
  border: black solid 1px;
   background-color: red; 
  color: Black;
}
    </style>
</head>
<body>
    
   <section id="book-section">
    <h1 id="book-head">Room services Details</h1>
    <div class="book-table">
<table>
  <thead>
<tr>
  <th scope="col">S.N</th>
  <th scope="col">Name</th>
  <th scope="col">Address</th>
  <th scope="col">Phone</th>
  <th scope="col">Email</th>
  <th scope="col">Address</th>
</tr>
  </thead>
  <tbody>
<?php 
$query="SELECT * FROM roomservices";
$result=mysqli_query($con,$query);
$i=1;
while($data=mysqli_fetch_array($result))
{
?>
<tr>
  <td scope="row"><?php echo $i++; ?></td>
  <td scope="row"><?php echo $data['name']; ?></td>
  <td scope="row"><?php echo $data['address']; ?></td>
  <td scope="row"><?php echo $data['phone']; ?></td>
  <td scope="row"><?php echo $data['email']; ?></td>
  <td scope="row"><?php echo $data['address']; ?></td>
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