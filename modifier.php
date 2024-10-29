
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
	
  a{box-shadow: 10px 11px 9px ;color: skyblue;
  }
a:hover{  opacity:24;
    -webkit-transform: scale3d(1.2,1.2,1);
    transform: scale3d(1.2,1.2,1);
    
  -webkit-transition: opacity 0.8s, -webkit-transform 0.8s;
  transition: opacity 0.8s, transform 0.8s;


}
	header{
  background-color:#5DADEC;
}
p{font-size:35px;
	text-align: center;
}



  </style>
 

</head>
<body background='img src=10.jpg'>
	<header> <p>MODIFIER LES INFORMATIONS</p> <a href="acc.php"><button name="login" type="" class=" button button6  glyphicon glyphicon-home" size="100%"> <span class=""></span> ACCEUIL</button></a>
				</header>
 <!-- Admin dashBoard -->
 <?php
	$numero=$_GET['code'];
	$conn=mysqli_connect("localhost","root","","bao");
	$query="select * from employe where(numero='$numero')";
	$result=mysqli_query($conn, $query);
	$aff=mysqli_fetch_array($result);
 ?>
<div class="col-sm-12"  id="display">
		<!-- bordure -->
	<div class="col-sm-2 w3-white" id="display">
	</div>
		
		<!-- corps -->
		<div class="col-sm-8 row-sm-12 w3-white">
		
			<br>
			<br>
			<div class=' w3-center' id="body transparentblock">	
				<h3> contrat</h3>
			</div>	
	
			<div class='' id="body transparentblock"> 
			<div class='col-sm-12' id="body transparentblock">
				<div class='col-sm-6'>
				</div>
				<div class='col-sm-6'>
				</div>
			</div>
			<div class="from-group">
				<form method="POST" action="#">
					<label for="name"> nom</label><br>
					<input type="text" class="form-control" id="nom" name="nom" value="<?php echo $aff['nom'] ?>" >
					<br><label for="name">prenom </label><br> 
					<input type="text" class="form-control" id="prenom" name="prenom" value="<?php echo $aff['prenom'] ?>" >
					<br>sexe F<input type="radio" value="f" name="sexe" value="<?php echo $aff['sexe'] ?>"  checked>
							 M<input type="radio" value="m" name="sexe" value="<?php echo $aff['sexe'] ?>" checked></br>
					<br><label for="date_naiss"> date de naissance </label><br> 
					<input type="date" class="form-control" id="date_naiss" name="date_naiss" value="<?php echo $aff['date_naiss'] ?>" >
					<br><label for="num_cni"> num_cni </label><br> 
					<input type="text" class="form-control" id="num_cni" name="num_cni" value="<?php echo $aff['num_cni'] ?>" >
					<br><label for="type_contrat"> type de contrat </label><br> 
					<select name="type_contrat" value="<?php echo $aff['type_contrat'] ?>"> <option> </option> <option>duree determinee</option> <option>duree non determinee</option> </select>
					<br><label for="salaire"> salaire </label><br> 
					<input type="text" class="form-control" id="salaire" name="salaire" value="<?php echo $aff['salaire'] ?>"> 
					<br><label for="lieu_recrutement"> lieu de recrutement </label><br> 
					<input type="text" class="form-control" id="lieu_recrutement" name="lieu_recrutementt" value="<?php echo $aff['lieu_recrutement'] ?>">
					<br><label for="duree_contrat"> duree du contrat </label><br> 
					<input type="text" class="form-control" id="duree_contrat" name="duree_contrat" value="<?php echo $aff['duree_contrat'] ?>">			   
					<br><label for="categorie_emp"> categorie_emp </label><br> 
					<select name="categorie_emp" value="<?php echo $aff['type_contrat'] ?>"> <option> </option> <option>programmeur</option> <option>agent commercial</option> <option>agent administratif</option> </select> 
					<br><label for="name"> numero de telephone </label><br> 
					<input type="text" class="form-control" id="tel" name="tel" value="<?php echo $aff['tel'] ?>" >			       
					<br> <br>
					<button name="login" type="submit" class="btn btn-success btn-lg" align="left" >SAVE</button>
					<input type='reset' name="login" onclick="" class="btn btn-success btn-lg" value='DELETE' >		
				</form>
			</div>
	
<?php
 	$conn=mysqli_connect("localhost","root","","bao");
	 if(mysqli_query($conn, $query)){
 
 		if(isset($_POST['nom']) and($_POST['nom']!="")){
			
			if(!$conn){
				die("connection error");
			}
		$nom=$_POST['nom'];
		$prenom=$_POST['prenom'];
		$date_naiss=$_POST['date_naiss'];
		$num_cni=$_POST['num_cni'];
		$type_contrat=$_POST['type_contrat'];
		$salaire=$_POST['salaire'];
		$lieu_recrutement=$_POST['lieu_recrutement'];
		$duree_contrat=$_POST['duree_contrat'];
		$categorie_emp=$_POST['categorie_emp'];
		$tel=$_POST['tel'];

	$sql="update employe set  nom='$nom', prenom='$prenom', sexe='$sexe', date_naiss='$date_naiss', type_contrat='$type_contrat', salaire='$salaire', lieu_recrutement='$lieu_recrutement', duree_contrat='$duree_contrat', categorie_emp='$tcategorie_emp', tel='$tel' where(numero='$numero')";

	if(mysqli_query($conn,$sql)==true){
			 echo"<script> alert('modification top') </script>";
	}
	else{
		echo "<script> alert('echec de la modification ') </script>";
	}
	
		}
	 }
 ?>
</body>
</html>	