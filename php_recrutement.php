<html>
<head>
  <title>recru</title>
</head>
<body>
       
<?php

$servername = "localhost";
$database = "bao";
$username = "root";
$password = "";


  if(isset($_POST['nom'])and($_POST['nom']!="")){
		$nom=$_POST['nom'];
		$prenom=$_POST['prenom'];
		$sexe=$_POST['sexe'];
		$date_naiss=$_POST['date_naiss'];
		$num_cni=$_POST['num_cni'];
		$type_contrat=$_POST['type_contrat'];
		$salaire=$_POST['salaire'];
		$lieu_recrutement=$_POST['lieu_recrutement'];
		$duree_contrat=$_POST['duree_contrat'];
		$categorie_emp=$_POST['categorie_emp'];
    $photo=$_FILES['photo']['name'];
    $fichier_tempo=$_FILES['photo']['tmp_name'];
    move_uploaded_file($fichier_tempo, "./imgs/$photo");
    $tel=$_POST['tel'];


 
		// Create connection
		$conn = mysqli_connect($servername, $username, $password, $database);
		// Check connection
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}
		//insertion dans la base de donnée
		$sql = "INSERT INTO employe(nom,prenom,sexe,date_naiss,num_cni,type_contrat,salaire,lieu_recrutement,duree_contrat,categorie_emp, photo, tel) VALUES ('$nom','$prenom','$sexe','$date_naiss','$num_cni','$type_contrat','$salaire','$lieu_recrutement','$duree_contrat','$categorie_emp', '$photo', '$tel')";
	if (mysqli_query($conn, $sql)) {
		echo "<script> alert('New record created successfully'); </script>";
	} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
   }
 ?> 
</body>
</html>