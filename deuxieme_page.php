
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content=" NJENKAM NGAMI ANGE">

    <title> deuxieme page </title>

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
    
    background-color:#000000;
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
  
  
  	div#choix:hover{
		opacity:24;
		-webkit-transform: scale3d(1.3,1.3,1);
		transform: scale3d(1.3,1.3,1);
		 background-color:#DC143C;
		
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
  </style>
 

</head>
<body>
<div class="col-sm-12"  id="display">
<div class="col-sm-2 w3-white" id="display">
</div>
<div class="col-sm-8 w3-white">
			<div class=" w3-white" id="header">
				<div class="col-sm-12 w3-black" id="display">
					<div class="col-sm-3 " id="display">
						<img src='../img/logo.png' Style="height:150px; width:250px"  class='ente' >
					</div>
					<div class="col-sm-9" id="display"><br><br>
						<h3 class="w3-text-white"> DRH: Mr HUBERT BERTRAND CHEHOK </h3>
						<div>
						<div class="col-sm-9" id="display">
							<div class="col-sm-2" id="display"></div>
						</div>
						</div>
					</div>
				</div>	
				<div class='w3-center  ' id="transparentblock">
				<h3> choisir une option</h3>
				</div>
			</div>
		<div class='col-sm-12  ' id="body transparentblock"> 
		   <div class="col-sm-2 " id="display"></div>
		     <div class="col-sm-8" id="transparentblock">
				<div class='w3-white' style='height:50px' id='choix'> 
					<a href="menbre.php"><h3 class=''><span class="glyphicon glyphicon-user"></span> Menbre du personnel</h3> </a>
				</div>
				<div class='w3-white' style='height:50px' id='choix'> 
					<a href="contrat.php"><h3><span class="glyphicon glyphicon-edit"></span>Update Iformation</h3> </a>
				</div>
				<div class='w3-white' style='height:50px' id='choix'>  
					<a href="sanction.php"><h3><span class="glyphicon glyphicon-question-sign"></span>Sanction</h3> </a>
				</div>
				<div class='w3-white' style='height:50px' id='choix'> 
					<a href="conge.php"><h3><span class="glyphicon glyphicon-pause"></span>Conge</h3> </a>		
				</div>
				<div class='w3-white' style='height:50px' id='choix'> 
					<a href="recrutement.php"><H3><span class=" glyphicon glyphicon-plus-sign"></span>Recrutement</h3> </a>
				</div>
				<div class='w3-white' style='height:50px' id='choix'> 
					<a href="classement.php"><h3><span class="glyphicon glyphicon-bookmark"></span>Classement</h3> </a>
				</div>		
			 </div>		
			 <div class="col-sm-2 w3-white" id="display"></div>
		</div>
</div>
<div class="col-sm-2 w3-white">
</div>
</div>
</body>
</html>