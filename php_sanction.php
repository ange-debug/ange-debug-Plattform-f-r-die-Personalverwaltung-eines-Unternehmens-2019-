


<html>
<head>
  <title>sanction/title>
</head>
<body>
       
<?php

$servername = "localhost";
$database = "bao";
$username = "root";
$password = "";

  if(isset($_POST['employe_sanc'])and($_POST['employe_sanc']!="")){
		$employe_sanc=$_POST['employe_sanc'];
		$motif=$_POST['motif'];
		$sanction_retenue=$_POST['sanction_retenue'];
		$date=$_POST['date'];
  

		// Create connection
		$conn = mysqli_connect($servername, $username, $password, $database);
		// Check connection
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}
		//insertion dans la base de donnée
		$sql = "insert into sanction (employe_sanc,motif,sanction_retenue,date) values ('$employe_sanc','$motif','$sanction_retenue','$date')";
	if (mysqli_query($conn, $sql)) {
		echo "<script> alert('New record created successfully') </script>";
		header("location:sanction.php");
	} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
  }
  
 ?> 
</body>
</html>
