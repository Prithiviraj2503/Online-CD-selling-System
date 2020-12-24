<?php
$servername="localhost";
$username="root";
$password="4016801@Ten";
$dbname="moviemng";

$connection=new mysqli($servername, $username, $password, $dbname);
if($connection->connect_error){
	die("connection failed:".connect_error);
}

$name=$_POST["name"];
$mail=$_POST["mail"];
$cont=$_POST["cont"];
$sex=$_POST["gender"];
$lang=$_POST["language"];
$time=$_POST["time"];
$age=$_POST["age"];
$pass=$_POST["pass"];

$quer="INSERT INTO register(name,email,phone,gender,lang,timepref,age,pass)
VALUES('$name','$mail',$cont,'$sex','$lang','$time','$age','$pass')";

if($connection->query($quer)==TRUE){
	  echo "<center><p style='color:red;font-size:20px;font-weight:bold'>Cheers! Successfully registered!</p></center>";
	  echo "<center><p style='color:red;font-size:20px;font-weight:bold'>Signin to continue!</p></center>";
	  echo"<br><br><a href=https://localhost/oms/signin.html><button type='submit'>LOGIN</button></a>";
}else{
	echo"error".$connection->error;
}
?>
