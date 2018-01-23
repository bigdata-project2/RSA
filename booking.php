<?php 
     
	if(isset($_POST['username'])) {
		$name = $_POST['username'];
	}	
	  
	  if (isset($_POST['password'])) {
		$password = $_POST['password'];
		 $con = mysqli_connect('localhost','root','','hms');
	  if($con){
		$sql = " insert into `login`(`User_name`,`password`) values('".$name."','".$password."');";
	  
	  $run = mysqli_query($con,$sql);
	  }
	 }
	  
	 
	 
	  ?>
	  
	  
	  
	
<html>
<head>
<head>
<style>
<style>
table {
    font-family: arial, sans-serif;                   
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid red;
    text-align: left;
    padding: 8px;
}


</style>
</style>
</head>

<body background="2book.jpg">  


<center><form name="ROOM BOOKINGS" action="bookingstore.php" method="post">
<table border="7" color="red" align="center" cellpadding="5" cellspacing="5">
<tr>
<td><font size="7">Name </font</td>
<td><font size="7"><input type="text" name="name" required></font></td>
</tr>

<tr>
<td><font size="7">Phone Number </font></td>
<td><font size="7"><input type="text" name="phoneno" required></font></td>
</tr>

<tr>
<td><font size="7">Check-in-Date </font></td>
<td><font size="7"><input type="date" name="date1" required></font></td>
</tr>

<tr>
<td><font size="7">Check-out-Date </font</td>
<td><font size="7"><input type="date" name="date2" required></font></td>
</tr>

<tr>
<td><a href="javascript:void(0);" onclick="alert('Room Type      Cost\nAC Room          900\nNon-AC Room  700');"><font color="black" size="8">Room Type</font></center></a></td>
<td><input type="radio" name="type" value="AC_Room"><font color="black" size="8">AC Room</font><br></br>
    <input type="radio" name="type" value="Non-AC_Room"><font color="black" size="8">Non-AC Room</font><br></br></td>
	


</font></td>
</tr>


<tr>

<td><font color="black" size="8">Facilities Available</font></center></td>
<td><input type="checkbox" name="fid1" value="1"><font color="black" size="7">Wi-Fi</font><br></br>
    <input type="checkbox" name="fid2" value="1"><font color="black" size="7">Food</font><br></br>
	<input type="checkbox" name="fid3" value="1"><font color="black" size="7">Laundry</font><br></br>
	<input type="checkbox" name="fid4" value="1"><font color="black" size="7">Fitness Center</font></td></tr>
	




</table>
<br></br>
<tr>
<center><input type="submit" value="SUBMIT"></center></tr>
</form>
</center>
<td><a href="connect.php"><font color="black" size="8">Back</font></a></td>





</html>