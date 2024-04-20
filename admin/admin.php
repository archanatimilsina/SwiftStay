<?php require('inc/aheader.php'); ?>
<style>

</style>
<?php require('inc/anavbar.php'); ?>












<?php require('inc/ascript.php'); ?>
<script>
     function confirmBox()
    {
      if (confirm("Are you sure to leave this page? If you leave once, You have to login again")) {
    window.location.href='../../adminlogin.php';
  } else{
    window.location.href="admin.php";
  }
    }
</script>
<?php require('inc/afootertag.php'); ?>