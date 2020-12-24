<?php
$servername="localhost";
$username="root";
$password="4016801@Ten";
$dbname="moviemng";

$connection=new mysqli($servername, $username, $password, $dbname);
if($connection->connect_error){
	die("connection failed:".connect_error);
}

$movie=$_POST["mvname"];
$actor=$_POST["arname"];
$actress=$_POST["asname"];
$director=$_POST["drname"];
$year=$_POST["year"];
$description=$_POST["descr"];
$mail=$_POST["mail"];
$contact=$_POST["con"];
$cost=$_POST["cost"];

$quer="INSERT INTO cdregister(movie,actor,actress,director,year,description,mail,phone,cost)
VALUES('$movie','$actor','$actress','$director','$year','$description','$mail','$contact',$cost)";

if($connection->query($quer)==TRUE){
 echo "<center>
	<div class='container' style='background-color:black'>
	<p style='color:cyan;font-size:20px;font-weight:bold'>Cheers! You Are Successfully register! Kindly wait for the awesome replies!</p>
	<marquee style='background-color:white;'><p style='color:green;font-size:20px;font-weight:bold'>Dear User! Kindly Select Where Do You Want To Go!!</p></marquee>
	<br><br><br>
	<a href='https://localhost/oms/cdbuy.html'><button class='btn btn-success'>Buy CD</button></a> <br><br>
	<a href='https://localhost/oms/cdreg.html'><button class='btn btn-primary'>Sale CD</button></a> 
	<br><br><br>
	<a href='https://localhost/oms/index.html'><button class='btn btn-danger'>Go Home</button></a>
	</div>
	</center>
	";
}else{
	echo"error".$connection->error;
}
?>



