<script>
  function AdminBox() {
    let x = document.getElementById('admin-box');
    if (x.style.display == "none") {
      x.style.display = "flex";
    } else {
      x.style.display = "none";
    }
  } 
  function confirmBox()
    {
      if(confirm("Are you sure to leave this page? If you leave once, You have to login again")) {
    window.location.href='../../adminlogin.php';
  } else{
    window.location.href="afeedback.php";
  }
    }
</script>