<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>

<?php
$servername="localhost";
$username="root";
$password="4016801@Ten";
$dbname="moviemng";

$connection=new mysqli($servername, $username, $password, $dbname);
if($connection->connect_error){
	die("connection failed:".connect_error);
}

  $mail=$_POST['mail'];
  $pass=$_POST['pass'];
  
$result = mysqli_query($connection,"SELECT name,email,pass FROM register WHERE email = '$mail' ");
$row = mysqli_fetch_array($result);

if($row["email"]==$mail && $row["pass"]==$pass){
    echo "<center>
	<div class='container' style='background-color:black'>
	<p style='color:cyan;font-size:20px;font-weight:bold'>Cheers! You Are Successfully Signed in!</p>
	<marquee style='background-color:white;'><p style='color:green;font-size:20px;font-weight:bold'>Dear User! Kindly Select Where Do You Want To Go!!</p></marquee>
	<br><br><br>
	<a href='https://localhost/oms/cdbuy.html'><button class='btn btn-success'>Buy CD</button></a> <br><br>
	<a href='https://localhost/oms/cdreg.html'><button class='btn btn-primary'>Sale CD</button></a> 
	<br><br><br>
	<a href='https://localhost/oms/index.html'><button class='btn btn-danger'>Go Home</button></a>
	</div>
	</center>
	";
}
else{
    echo"Sorry, your credentials are not valid, Please<a href='https://localhost/oms/signin.html' style='font-size:20px'>Try Again</a>";
}
?>
</html>