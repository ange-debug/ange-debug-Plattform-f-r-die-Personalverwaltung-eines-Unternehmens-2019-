 
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content=" NJENKAM NGAMI ANGE">

    <title> recrutement </title>

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
	
}
p{
	font-size:30px;
}

  </style>
 

</head>
<body >
		<div class="from-group col-sm-12 w3-Khaki">
			<div class="col-md-2 w3-white"><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
			</div>
			<div class="col-md-8 form">
				<header> <p>RECRUTEMENT</p> <br> <br><a href="acc.php"><button name="login" type="" class=" button button6  glyphicon glyphicon-home" size="100%"> <span class=""></span> ACCEUIL</button></a>
				</header>
				<?php 
include("php_recrutement.php");
				?>
				<form method="POST" action="recrutement.php" enctype="multipart/form-data">
					<label for="name"> nom</label><br>
					<input type="text" class="form-control" id="nom" name="nom" >
					<br><label for="name">prenom </label><br> 
					<input type="text" class="form-control" id="prenom" name="prenom" >
					<br>sexe F<input type="radio" value="f" name="sexe" checked>
							 M<input type="radio" value="m" name="sexe" ></br>
					<br><label for="date_naiss"> date de naissance </label><br> 
					<input type="date" class="form-control" id="date_naiss" name="date_naiss" >
					<br><label for="name"> num_cni </label><br> 
					<input type="text" class="form-control" id="num_cni" name="num_cni" >
					<br><label for="name"> type de contrat </label><br> 
					<select name="type_contrat"> <option> </option> <option>duree determinee</option> <option>duree non determinee</option> </select>
					<br><label for="name"> salaire </label><br> 
					<input type="text" class="form-control" id="salaire" name="salaire" >  
					<br><label for="name"> lieu de recrutement </label><br> 
					<input type="text" class="form-control" id="lieu_recrutement" name="lieu_recrutement" >
					<br><label for="name"> duree du contrat </label><br> 
					<input type="text" class="form-control" id="duree_contrat" name="duree_contrat" >
					<br><label for="photo"> photo </label><br> 
					<input type="file" value="parcourir" class="form-control" id="photo" name="photo" >
					<br><label for="categorie_emp"> categorie_emp </label><br> 
					<select name="categorie_emp"> <option> </option> <option>programmeur</option> <option>agent_commercial</option> <option>agent_administratif</option> </select>
					<br><label for="name"> numero de telephone </label><br> 
					<input type="text" class="form-control" id="tel" name="tel" >			      
					<br> <br>
					<button name="add" type="submit" class="btn btn-success btn-lg" align="left" >SAVE</button>
					<button type="reset" class="btn btn-success btn-lg" align="left"></span> annuler  </button>
					
				</form>
			</div>	
			<div class="col-md-2  w3-white"> <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
		</div>
</body>
</html>