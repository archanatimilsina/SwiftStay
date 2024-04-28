<?php include('../connection.php');
require('inc/aheader.php'); 
?>
  <style>
    *
    {
margin: 0;
padding: 0;
box-sizing: border-box;
    }
     .thumbnail{
    width: 600px;
    height: 600px;
    position: relative;
    margin: auto;
    margin-top: 20px;
    border: 1px solid black;
    z-index: -1;
}
.thumbnail img{
    position: absolute;
    width: 600px;
    height: 600px;
    z-index: -2;
}
.thumbnail h1{
text-align: center;
margin-top: 15%;
z-index: -1;

}
  </style>
  <?php require('inc/anavbar.php'); ?>

<div class="thumbnail">
          <img src="uploads/1.jpg" alt="admin" class="imgFluid">
          <h1>Welcome To Admin page</h1>
          </div>

<script>
          function AdminBox() {
      let x = document.getElementById('admin-box');
      if (x.style.display=="none") {
        x.style.display="flex";
      } else {
        x.style.display="none";
      }
    } 
    </script>
    <?php require('inc/ascript.php');?>
    <?php require('inc/afootertag.php');?>