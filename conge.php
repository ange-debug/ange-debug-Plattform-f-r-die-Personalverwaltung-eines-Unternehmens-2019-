
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content=" NJENKAM NGAMI ANGE">

    <title> conge	</title>

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
	
	}
	
	@media screen and (max-width: 680px) {
		body {
	
		}
	}
	
  a{box-shadow: 10px 11px 9px ;color: ;
  }
a:hover{  opacity:24;
    -webkit-transform: scale3d(1.2,1.2,1);
    transform: scale3d(1.2,1.2,1);
    
  -webkit-transition: opacity 0.8s, -webkit-transform 0.8s;
  transition: opacity 0.8s, transform 0.8s;

}

#transparentblock{
    
    background-color: rgba(150, 250, 150,0.6);
    }
  </style>
 

</head>

	<div class=' row-sm-12 ' id="body transparentblock">

		<div class="col-md-3 "></div>
  
    <div class="col-md-6
    " id="transparentblock">
        
        <h3 style="text-align:center; color: green; opacity: 1"> PRISE DE CONGE </h3> <a href="acc.php"><button name="login" type="" class=" button button6  glyphicon glyphicon-home" size="100%"> <span class=""></span> ACCEUIL</button></a>
        <br> 
        <br>
              
           <div class="from-group" >

                 <form method="POST" action="php_conge.php">
				         <label for="date"> date de debut </label> <br>
                 <input type="date" class="form-control" id="date_debut" name="date_debut"  >
                 <br>
                  <label for="duree"> duree </label> <br>
                 <input type="text" class="form-control" id="duree" name="duree"  >
                 <br>
                 <label for="type_conge"> type_conge </label> <br>
                 <input type="text" class="form-control" id="type_conge" name="type_conge"  >
                 <br>
                 <label for="date_fin"> date de fin </label> <br>
                 <input type="date" class="form-control" id="date_fin" name="date_fin"  >
                 <br>
                  <label for="demandeur"> demandeur </label> <br>
                 <input type="text" class="form-control" id="demandeur" name="demandeur"  >
                 <br>
                 <br><br>
                 <button name="login" type="submit" class="btn btn-success btn-lg" >attribuer le conge</button>
                 <button name="login" type="reset" class="btn btn-success btn-lg" >annuler</button> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				        </form>
  
           </div>

      </div>
	<!-- body -->
	
	<!-- bordure -->
  	<div class="col-sm-3 w3-white" id="display">
	</div>
	
</div>

</body>
</html>