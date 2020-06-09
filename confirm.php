<html>
<head>
<style>
* {
	font-family: 'Roboto', sans-serif;
}
html, body {
	font-size: 20px;
	background-color:lightblue;
}

.vertical-align {
	position: absolute;
	top: 55%;
	transform: translateY(-50%);
	left: 400;
	width: 50%;
	box-shadow:0px 0px 5px 0px #888;
	background-color:white;
}
table{
	box-shadow:0px 0px 5px 0px #888;
}
</style>
<body>
<header><center><h1>APPOINTMENT STATUS</h2></header><br><br><br><br>	
<div class="vertical-align">  
<img src="CHAT3.jpg" height="200" width="250" alt="CHATBOT">
<?php 
$a=$_POST['yesno'];
$name=$_POST['name'];
$mail=$_POST['mail'];
$phone=$_POST['phone'];
$date=$_POST['date'];
$slot=$_POST['slot'];
$hospital=$_POST['hospital'];
if($a=="yes")
{
	echo "<center><h2>Your Appointment is Booked</h2></center>";
	echo "<center><table><tr><td><h3>Name </h3></td><td><h3>: ".$name."</h3></td></tr>";
	echo "<tr><td><h3>Hospital </h3></td><td><h3>: ".$hospital."</h3></td></tr><tr><td><h3>Date </h3></td><td><h3>: ".$date."</h1></td></tr><tr><td><h3>Slot </h3></td><td><h3>: ".$slot."</h3></td></tr>";
	echo "<tr><td><h3>Phone number </h3></td><td><h3>: ".$phone."</h3></td></tr>";
	echo "</table></center>";
}
else if($a=="no")
	echo "<center><table><tr><td><h1>Your appointment cancelled</h1></td></tr></table></center>";
?>
<br><br><br><br>
<div>
</body>
</html>