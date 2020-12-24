<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;

}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 4px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
.header{
	background-color:#7f00ff;
	padding:7px;
	width:100%;
}
</style>
</head>
<header class="header">
<center><h3 style="color:white"><b>Movies</b></h3></center>
</header><br>
<marquee style="background-color:lime">
<p style="color:red;font-weight:bold;font-size:15px">Kindly Search the Movie name Here, You can contact the owners after getting a result</p></marquee>

<?php
$link = mysqli_connect("localhost", "root", "4016801@Ten", "moviemng");
 
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
$search=$_POST['search'];

$sql = "SELECT * FROM cdregister WHERE movie='$search'";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table id='restable'>";
            echo "<tr>";
                echo "<th>Movie</th>";
                echo "<th>Actor</th>";
				echo "<th>Actress</th>";
				echo "<th>Director</th>";
				echo "<th>Year</th>";
				echo "<th>Description</th>";
				echo "<th>Seller E-Mail</th>";
				echo "<th>Seller contact</th>";
				echo "<th>Cost</th>";
	            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['movie'] . "</td>";
                echo "<td>" . $row['actor'] . "</td>";
				echo "<td>" . $row['actress'] . "</td>";
				echo "<td>" . $row['director'] . "</td>";
				echo "<td>" . $row['year'] . "</td>";
		        echo "<td>" . $row['description'] . "</td>";
				echo "<td>" . $row['mail'] . "</td>";
				echo "<td>" . $row['phone'] . "</td>";
				echo "<td>" . $row['cost'] . "</td>";
                echo "</tr>";
        }
        echo "</table>";
        mysqli_free_result($result);
    } else{
        echo "No records matching your search were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

mysqli_close($link);
?>
<br><br>
<a href="https://localhost/oms/cdbuy.html"><button class="btn btn-primary">Go Back</button></a>
&nbsp &nbsp &nbsp &nbsp &nbsp
<a href="https://localhost/oms/index.html"><button class="btn btn-danger">Go Home</button></a>

</html>