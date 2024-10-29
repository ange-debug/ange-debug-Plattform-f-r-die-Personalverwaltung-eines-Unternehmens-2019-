


<html>
<head>
  <title>conge</title>
</head>
<body>
       
<?php

$servername = "localhost";
$database = "bao";
$username = "root";
$password = "";

  if(isset($_POST['date_debut'])and($_POST['date_debut']!="")){
		$date_debut=$_POST['date_debut'];
		$duree=$_POST['duree'];
		$type_conge=$_POST['type_conge'];
		$date_fin=$_POST['date_fin'];
		$demandeur=$_POST['demandeur'];
  

		// Create connection
		$conn = mysqli_connect($servername, $username, $password, $database);
		// Check connection
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}
		//insertion dans la base de donnée
		$sql = "insert into conge (date_debut,duree,type_conge,date_fin,demandeur) values ('$date_debut','$duree','$type_conge','date_fin','$demandeur')";
	if (mysqli_query($conn, $sql)) {
		echo "<script> alert('New record created successfully') </script>";
	} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
  }
 ?> 
</body>
</html>