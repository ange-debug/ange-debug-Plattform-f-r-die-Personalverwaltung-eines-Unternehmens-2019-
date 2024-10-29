
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content=" tchassem guemte borel">

    <title> Home </title>

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
  .imageOver{box-shadow: 19px 9px 8px; color:black;}
  a{text-shadow:10px 6px 9px}
	
	body {
		padding-top: 80px;
		padding-bottom: 110px;
	}
	
	@media screen and (max-width: 680px) {
		body {
			padding-top:0px;
			padding-bottom:0px;
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

  <!-- navigation bar -->
 <?php include("navigationBar.php");  ?>
 <!--end of navigation bar -->

 <!-- navigation bar -->
 <?php include("footer.php");  ?>
 <!--end of navigation bar -->
 
 <!-- Admin dashBoard -->
<div class="row w3-white" id="display">
  
  <div class="container-fluid">
		
		<br>
    <div class="col-sm-12">
		<div class="col-sm-6">
			<p class="btn btn-lg">Fruido<img src="../img/fruido1.jpg" class="img-responsive" Style="height:250px; width:500px" alt="Image zenù"></p>
		</div>
		
		<div class="col-sm-6">
		<br>
			<h2> Mélange concentré  de fruit en carton.</h2>
			<h3> Les produits Fruido existent en plusiers game de differants goût: Pome, Mangue, Orange, Goyave.</h3>
		</div>

	</div>
	
			<br>
    <div class="col-sm-12">
		<div class="col-sm-6">
			<p class="btn btn-lg">Jovino<img src="../img/jovino.jpg" class="img-responsive" Style="height:250px; width:500px" alt="Image zenù"></p>
		</div>
		
		<div class="col-sm-6">
		<br>
			<h2> Mélange concentré  de fruit en sachet.</h2>
			<h3> Les produits Fruido existent en plusiers game de differants goût: Pome, Mangue, Orange, Goyave.</h3>
		</div>
	</div>
	
				<br>
    <div class="col-sm-12">
		<div class="col-sm-6">
			<p class="btn btn-lg">Gusta<img src="../img/guista.jpg" class="img-responsive" Style="height:250px; width:500px" alt="Image zenù"></p>
		</div>
		
		<div class="col-sm-6">
		<br>
			<h2> Beure de table.</h2>
			<h3> Les produits Fruido existent en plusiers game de differants goût: Pome, Mangue, Orange, Goyave.</h3>
		</div>
	</div>
	
				<br>
    <div class="col-sm-12">
		<div class="col-sm-6">
			<p class="btn btn-lg">Bergère Instant<img src="../img/bergere.jpg" class="img-responsive" Style="height:250px; width:500px" alt="Image zenù"></p>
		</div>
		
		<div class="col-sm-6">
		<br>
			<h2> lait en poudre.</h2>
			<h3> Les produits Fruido existent en plusiers game de differants goût: Pome, Mangue, Orange, Goyave.</h3>
		</div>
	</div>
		
	</div>
  	
  </div>
</div>

	<br>

</body>
</html>