<?php
include('../connection.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>RoomData</title>
    <style>
        
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
    width: 700px;
    margin: auto;
    
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

        .book-table table
        {
            width: 100%;
        }
.book-table table tr{
  height: 90px;

}
.book-table table tr td{
text-align: center;
font-size: 17px;

}
    </style>
</head>
<body>
    <?php
    if(isset($_GET))
    {
        $email=$_GET['email'];
?>
<section id="book-section">
<h1 id="book-head">ROOM DETAILS</h1>
<div class="book-table">
<table>
<thead>
<tr>
<th scope="col" width="20%">S.N</th>
<th scope="col" width="80%">Rooms</th>
</tr>
</thead>
<tbody>
<?php $query="SELECT * FROM room_booking where email='$email'";
$result=mysqli_query($con,$query);
$i=1;
while($data=mysqli_fetch_array($result))
{
?>
<tr>
<td scope="row"><?php echo $i++; ?></td>
<td scope="row"><?php echo $data['room_no']; ?></td>
</tr>
<?php
}
?>
</tbody>
</table>
</div>
</section>
<?php
    }
    ?>
</body>
</html>