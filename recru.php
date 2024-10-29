<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style_loging.css">
</head>
<body>

<?php

$servername = "localhost";
$database = "bao";
$username = "root";
$password = "";

  if(isset($_POST['name'])and($_POST['name']!="")){
		$nom=$_POST['nom'];
		$prenom=$_POST['prenom'];
		$date_naiss=$_POST['date_naiss'];
		$num_cni=$_POST['num_cni'];
		$type_contrat=$_POST['type_contrat'];
		$salaire=$_POST['salaire'];
		$lieu_recrutement=$_POST['lieu_recrutement'];
		$duree_contrat=$_POST['duree_contrat'];
		$categorie_emp=$_POST['categorie_emp'];

			// Create connection
		$conn = mysqli_connect($servername, $username, $password, $database);
			// Check connection
		if (!$conn) {
			die("Connection failed: " . mysqli_connect_error());
		}
		
		
		//insertion dans la base de donnée
		$sql = "insert into employe (nom,prenom,date_naiss,num_cni,type_contrat,salaire,lieu_recrutement,duree_contrat,categorie_emp)
		values ('$nom','$prenom','$date_naiss','$num_cni','$type_contrat','$salaire','$lieu_recrutement','$duree_contrat','$categorie_emp')";
		mysqli_query($conn, $sql2);

	if (mysqli_query($conn, $sql)) {
		echo "<script>alert('New record succesfully!')</script>";
		} 
		else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
	}
?>

</body>
</html>