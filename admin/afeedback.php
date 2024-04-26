<?php  
include('../connection.php');
require('inc/aheader.php'); 
?>
<style>
#feedback-data
{
    width: 100%;
  
}
#feedback-head{
    text-align: center;
    font-size: 29px;
    margin: 35px;
}
#feedback-table{
  width: 100%;

}
#feedback-table table{
width: 80%;
margin: auto;
}
#feedback-table table th{
font-size: 25px;
}
#feedback-table table tr{
  height: 150px;

}
#feedback-table table tr td{
text-align: center;
font-size: 19px;

}

#delete-btn
{
  width: 80px;
  height: 35px;
  border: black solid 1px;
   background-color: red; 
  color: Black;
}
table,
        th,
        td {
            border: 3px solid black;
            border-collapse: collapse;
            padding: 5px;
        }
</style>
<?php require('inc/anavbar.php'); ?>

<section id="feedback-data">
<h1 id="feedback-head"></h1>
<div id="feedback-table">
<table>
    <thead>
<tr>
    <th scope="col">S.N</th>
    <th scope="col">Name</th>
    <th scope="col">Email</th>
    <th scope="col">Feedback</th>
    <th scope="col">Delete</th>
</tr>
    </thead>
    <tbody>
        <tr>
    <?php
            $query="SELECT * FROM feedbacks";
            $result=mysqli_query($con,$query);
           $i=1;
            while($data=mysqli_fetch_assoc($result))
            {
                ?>
                <td><?php echo $i++; ?></td>
                <td><?php echo $data['name']; ?></td>
                <td><?php echo $data['email']; ?></td>
                <td><?php echo $data['feedback']; ?></td>
                <td>
                  <a href="afeeddel.php?id=<?php echo $data['f_id'];?>"><button id="delete-btn">Delete</button></a>
                </td>

          
             
        </tr>
         <?php
     }
     ?>
    </tbody>
</table>
</div>
</section>

<?php require('inc/ascript.php'); ?>
<script>
     function confirmBox()
    {
      if(confirm("Are you sure to leave this page? If you leave once, You have to login again")) {
    window.location.href='../../adminlogin.php';
  } else{
    window.location.href="afeedback.php";
  }
    }
</script>
<?php require('inc/afootertag.php'); ?>