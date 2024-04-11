<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
             
.paste-button {
    position: relative;
    display: inline-block;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  }
  
  .button {
    background-color: #fa9579;
    color: black;
    font-size: 15px;
    border: 2px solid transparent;
    border-radius: 15px;
    cursor: pointer;
  }
  
  .dropdown-content {
    display: none;
    font-size: 13px;
    position: absolute;
    z-index: 1;
    background-color: white;
  }
  
  .dropdown-content a {
 color: black;
    text-decoration: none;
    display: block;
width: 150px;
height: 30px;
border-radius: 5px;
border: black solid 1px;
  text-align: center;
  background-color:#fa9579 ;
  font-weight: 300;
  font-size: 17px;
  }
  
  .dropdown-content a:hover {
   background-color:white;
 
  }
  
  /* .dropdown-content a:focus {
    background-color: #212121;
    color: #4CAF50;
  }
   */
 
  .paste-button:hover button {
    background-color:white ;
  }
  
  .paste-button:hover .dropdown-content {
    display: block;
  }
    </style>
</head>
<body>
   <li class="item">
<div class="paste-button">
<a href="aroomupdate.php" class="button">Update</a>
  
          <div class="dropdown-content">
        <a id="first" href="adelux.php">Delux AC</a>
        <a id="second" href="aac.php">AC</a>
        <a id="third" href="anonac.php">Non AC</a>
        
      </div>
   </div>
  </li>
</body>
</html>