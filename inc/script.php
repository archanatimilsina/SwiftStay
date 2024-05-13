
<script>
        function popup(popup_name)
        {
             get_popup=document.getElementById(popup_name);
             if(get_popup.style.display=="flex")
            {
                get_popup.style.display="none";
            }
            else{
                get_popup.style.display="flex";
            }
        }

        function forgotPopup()
        {
            document.getElementById('login-popup').style.display="none";
            document.getElementById('forgot-popup').style.display="flex";
        }
        function AdminBox() {
      let x = document.getElementById('admin-box');
      if (x.style.display=="none") {
        x.style.display="flex";
      } else {
        x.style.display="none";
      }
    } 
    </script>
    
    <script>

let fullname=document.getElementById("fullname");
let username=document.getElementById("username");
let email=document.getElementById("email");
let password=document.getElementById("password");
let flag=1;
function validateform()
{    


  if(fullname.value=="")
  {
      document.getElementById("fullnameerror").innerHTML="Please enter your name";
      document.getElementById("fullnameerror").style.color="red";
      flag=0;
      
  }
  else if(!fullname.value.match(/^[A-Za-z]*\s{1}[A-Za-z]*$/))
  {
      document.getElementById("fullnameerror").innerHTML="Write full name";
      document.getElementById("fullnameerror").style.color="red";
      flag=0;
     
  }
  else{
    document.getElementById("fullnameerror").innerHTML="";
    flag=1;

  }
  
  if(username.value=="")
  {
      document.getElementById("usernameerror").innerHTML="Please enter username";
      document.getElementById("usernameerror").style.color="red";
      flag=0;

  }
  else if(username.value.length>10){
    document.getElementById("usernameerror").innerHTML="atleast 10 letter";
    document.getElementById("usernameerror").style.color="red";
    flag=0;
  
  }
  else{
    document.getElementById("usernameerror").innerHTML="";
    flag=1;
    
  }
  if(email.value=="")
  {
      document.getElementById("emailerror").innerHTML="Please enter your email";
      document.getElementById("emailerror").style.color="red";
      flag=0;
      
  }
  else{
    document.getElementById("emailerror").innerHTML="";
    flag=1;
    
  }
  if(password.value=="")
  {
      document.getElementById("passworderror").innerHTML="Please enter password";
      document.getElementById("passworderror").style.color="red";
      flag=0;
  }
  else if(password.value.length>10)
  {
      document.getElementById("passworderror").innerHTML="atleast 10 letter";
      document.getElementById("passworderror").style.color="red";
      flag=0;
    
  }
  else{
    document.getElementById("passworderror").innerHTML="";
    flag=1;

  }
  if(flag){
    return true;
  }
else{
    return false;
}
}
</script>


