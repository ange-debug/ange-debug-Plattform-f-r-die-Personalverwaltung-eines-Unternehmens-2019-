<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content=" NJENKAM NGAMI ANGE">

    <title> contrat </title>

  <link rel="stylesheet" type="text/css" href="../testbootStyle.css">
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/bootstrap-theme.min.css">

  <link rel="stylesheet" href="../css/userProfile.css" >
  <link rel="stylesheet" href="../css/w3.css">
  <link rel="stylesheet" href="../css/MySchool.css">
  
  
  <script src="../js/jquery-3.2.1.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script src="../js/AdminProfileScript.js"></script>
  
  <style>

#transparentblock{
    
    background-color: rgba(00, 155, 00,0.2);
    }

h2{text-decoration: arial}
.w3-hover-yellow{color: green;


}

	.imageOver:hover{
		opacity:24;
		-webkit-transform: scale3d(1.3,1.3,1);
		transform: scale3d(1.3,1.3,1);
		
	-webkit-transition: opacity 0.9s, -webkit-transform 0.9s;
  transition: opacity 0.9s, transform 0.9s;

  }
 table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    padding: 8px;
    text-align: left;
    border-bottom: 1px solid #ddd;
}

tr:hover{background-color:#f5f5f5}
  
  	div#vill:hover{
		opacity:24;
		-webkit-transform: scale3d(1.3,1.3,1);
		transform: scale3d(1.3,1.3,1);
		
	-webkit-transition: opacity 0.3s, -webkit-transform 0.3s;
  transition: opacity 0.3s, transform 0.3s;

  }
  
  
  .imageOver{box-shadow: 19px 9px 8px; color:black;}
  a{text-shadow:10px 6px 9px}
	
	body {
	
	}
	
	@media screen and (max-width: 680px) {
		body {
	
		}
	}
	
  a{box-shadow: 10px 11px 9px ;color: #007256;
  }
  header{
  background-color:#5DADEC;
}
p{font-size:30px;
	text-align: center;
}

  </style>
 

</head>
</head>
<body>
	<HEADER> <p>MODFIER LES INFORMATIONS </p> <a href="acc.php"><button name="login" type="" class=" button button6  glyphicon glyphicon-home" size="100%"> <span class=""></span> ACCEUIL</button></a></HEADER>
	<div>
		
	
<table >
<thead>
<tr class="w3-blue">
<th>numero</th>
<th>nom</th>
<th>prenom</th>
<th>sexe</th>
<th>date_naiss</th>
<th>CNI</th>
<th>type de contrat</th>
<th>salaire</th>
<th>lieu de recu</th>
<th>duree_contrat</th>
<th>categorie_emp</th>
<th>toff</th>
<th>contact</th>
<th>actions</th>
</tr>
</thead>
<?php
	$servername="localhost";
	$database="bao";
	$username="root";
	$password="";
	
	$conn=mysqli_connect($servername, $username, $password, $database);
	
	if(!$conn){
		die("connetion failed: " . mysqli_connect_error());
	}
	$sql="select* from employe";
	
	$result = mysqli_query($conn, $sql);
	$i=1;
		
		while($row = mysqli_fetch_array($result)){
			?>
			<tr>
			<td><?php echo $i++ ?></td>
			<td><?php echo $row['nom'] ?></td>
			<td><?php echo $row['prenom'] ?></td>
			<td><?php echo $row['sexe'] ?></td>
			<td><?php echo $row['date_naiss'] ?></td>
			<td><?php echo $row['num_cni'] ?></td>
			<td><?php echo $row['type_contrat'] ?></td>
			<td><?php echo $row['salaire'] ?></td>
			<td><?php echo $row['lieu_recrutement'] ?></td>
			<td><?php echo $row['duree_contrat'] ?></td>
			<td><?php echo $row['categorie_emp'] ?></td>
			<td><img src="imgs/<?php echo"" .($row['photo'])."" ?>" width="30" height="30"/></td>
			<td><?php echo $row['tel'] ?></td>
			<td><a href="supprimer.php?code=<?php echo $row['numero']?>">supprimer</a>
				<a href="modifier.php?code=<?php echo $row['numero']?>">modifier</a></td>
			</tr>
			<?php
		}
		
	mysqli_close($conn);
?>
</body>
</html>