
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content=" NJENKAM NGAMI ANGE">

    <title> Sanction	</title>

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
	
  a{box-shadow: 10px 11px 9px ;color: skyblue;
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
header{
  background-color:#a6001a;
}
p{font-size:30px;
  text-align: center;
}
  </style>
 

</head>

	<div class=' row-sm-12 ' id="body transparentblock">

		<div class="col-md-3 "></div>
  
    <div class="col-md-6
    " id="transparentblock">
        
        <h3 style="text-align:center; color: green; opacity: 1"> ATTRIBUTION DES SANCTIONS </h3> <a href="acc.php"><button name="login" type="" class=" button button6  glyphicon glyphicon-home" size="100%"> <span class=""></span> ACCEUIL</button></a> <br>
        <br>
              
           <div class="from-group" >

                 <form method="POST" action="php_sanction.php">
				         <label for="motif"> nom de l'employe </label> <br>
                 <input type="text" class="form-control" id="employe_sanc" name="employe_sanc" placeholder='nom ' >
                 <br>
                 <label for="motif"> MOTIF DE LA SANCTION </label> <br>
                 <textarea rows="5" cols="50" id="motif" name="motif" placeholder='motif'>  motif de la sanction </textarea><br>
				         <label for="sanction"> SANCTION APPLIQUE  </label><br>
                 <textarea  rows="5" cols="50" id="sanction_retenue" name="sanction_retenue" placeholder='sanction_retenue'>  sanction applique </textarea> <br>  
                 <label for="motif"> date </label> <br>
                 <input type="date" name="date"  >
                 <br><br>
                 <button name="login" type="submit" class="btn btn-success btn-lg" >attribuer la sanction</button>
                 <button name="login" type="reset" class="btn btn-success btn-lg" >annuler</button>
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