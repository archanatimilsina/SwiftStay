<?php include('aheader.php'); 
include('../connection.php');
?>
<style>
#contact-data
{
    width: 100%;
 
}
#contact-head{
    text-align: center;
    font-size: 29px;
    margin: 35px;
}
#contact-table{
  width: 100%;

}
#contact-table table{
width: 80%;
margin: auto;
}
#contact-table table th{
font-size: 25px;
}
#contact-table table tr{
  height: 90px;

}
#contact-table table tr td{
text-align: center;
font-size: 19px;

}


table,
        th,
        td {
            border: 3px solid black;
            border-collapse: collapse;
            padding: 5px;
        }
</style>

<section id="contact-data">
<h1 id="contact-head"></h1>
<div id="contact-table">
<table>
    <thead>
<tr>
    <th scope="col">S.N</th>
    <th scope="col">Name</th>
    <th scope="col">Email</th>
    <th scope="col">Phone</th>
    <th scope="col">Address</th>
    <th scope="col">Message</th>
    <th scope="col">Contact DateTime</th>
</tr>
    </thead>
    <tbody>
       <tr>  
    <?php
            $query="SELECT * FROM contacts";
            $result=mysqli_query($con,$query);
           $i=1;
            while($data=mysqli_fetch_assoc($result))
            {
               ?> 
                <td><?php echo $i++; ?></td>
                <td><?php echo $data['name']; ?></td>
                <td><?php echo $data['email']; ?></td>
                <td><?php echo $data['phone']; ?></td>
                <td><?php echo $data['address']; ?></td>
                <td><?php echo $data['message']; ?></td>
                <td><?php echo $data['created_at']; ?></td>
           </tr>
      <?php
        }
        ?>
    </tbody>
</table>
</div>
</section>

<?php include('afooter.php');?>