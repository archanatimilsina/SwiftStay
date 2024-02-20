<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Room Booking</title>
    <style>
        *
        {
            margin: 0;
            padding: 0;
        }
        .room1
        {
width: 500%;
height: 1000px;
border: solid red 1px;
 
        }
        .room2
        {
           
            margin: 20px auto ;
            width:50%;
height: 200px;
border: solid black 1px;
background-color:pink;
        }
       .check-results
       {
        text-align: center;
        font-size: 40px;
        color: black;
        font-family: Verdana, Geneva, Tahoma, sans-serif;
       }
   

        .room3
        {
            margin:20px auto;
            width: 70%;
            height: 800px;
            border: solid green 1px;
            background-color: yellow;
        }
        .room4
        {
            margin:20px auto;
            width: 70%;
            height: 800px;
            border: solid purple 1px;
            background-color: aqua
        }
        .room5
        {
            margin:20px auto;
            width: 70%;
            height: 800px;
            border: solid red 1px;
           background-color: aqua
        }
        #room-result
        {
display: none;
        }
        .room-h2{
    margin-top: 24px;
    text-align: center;
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
}
#room-result form table{
    margin-left: 50px;
    border: 1px solid red;
   display: flex;
   justify-content: center;
   width: 38%;
  border-radius: 10px;
  padding: 10px;
}
#room-result form{
    /* margin-left: 50px; */
    margin-top: 20px;
    
}
#room-result form table tr th{
    font-size: 20px;
    font-weight: 700;
    border: 1px solid red;
}
.room2 form table tr td select{
width: 50%;
margin: auto;
}
.room2 form table tr td select option{
text-align: center;
}
#check-btn{
    padding: 4px;
    background-color: crimson;
    color: white;
    margin-left: 20px;
    border-radius: 2px;
}
    </style>
</head>
<body>
    <section id="room-booking">
<div class="room1">
slider
</div>

<div class="room2">
<h2 class="room-h2">SEARCH YOUR ROOMS HERE</h2>
         <form action="room.php " method="GET"> 
         <table >
             <tr>
                 
                <th width="20%" height="50px" required>Check In Date</th>
                 <th width="20%" height="50px" required>Check Out Date</th>
                 <th width="20%" height="50px">Room</th>
                 <td rowspan="2"><input type="submit" name="submit" onclick="" id="check-btn" onclick="popup1('room-result')" value="Check"></td>
             </tr>
             <tr>
                
                <td width="20%" height="50px"><input type="date" name="ci" required></td>
                 <td width="20%" height="50px"><input type="date" name="co" required></td>
                 <td width="20%" height="50px">
                    <select name="room" >
                         <option >1</option>
                         <option >2</option>
                         <option >3</option>
                         <option >4</option>
                         <option >5</option>
                     </select>
            </form>
                 </td>
             </tr>
         </table>

</div>




<div id="room-result">
<p class="check-results">Results</p>

<div class="room3">

</div>
<div class="room4">

</div>
<div class="room5">

</div>
</div>
    </section>
</body>

</html>