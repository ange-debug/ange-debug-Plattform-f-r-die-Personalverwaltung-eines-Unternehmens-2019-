
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
  </style>
 

</head>
<body background='img src=10.jpeg'>
 <!-- Admin dashBoard -->
 <?php
	$num_conge=$_GET['code'];
	$conn=mysqli_connect("localhost","root","","bao");
	$query="select * from conge where(num_conge='$num_conge')";
	$result=mysqli_query($conn, $query);
	$aff=mysqli_fetch_array($result);

 ?>

		<!-- -->

		<div class=' row-sm-12 ' id="body transparentblock">

		<div class="col-md-3 "></div>
  
    <div class="col-md-6
    " id="transparentblock">
        
        <h3 style="text-align:center; color: green; opacity: 1"> MODIER LE CONGE </h3>
        <br>
              
           <div class="from-group" >  <a href="liste_conge.php"><button name="login" type="" class=" button button6  glyphicon glyphicon-home" size="100%"> <span class=""></span>RETOUR</button></a>

                 <form method="POST" action="#">
				 <label for="date"> date de debut </label> <br>
                 <input type="date" class="form-control" id="date_debut" name="date_debut" value="<?php echo $aff['date_debut'] ?>">  
                 <br>
                  <label for="duree"> duree </label> <br>
                 <input type="text" class="form-control" id="duree" name="duree" value="<?php echo $aff['duree'] ?>" >
                 <br>
                 <label for="type_conge"> type_conge </label> <br>
                 <input type="text" class="form-control" id="type_conge" name="type_conge" value="<?php echo $aff['type_conge'] ?>"  >
                 <br>
                 <label for="date_fin"> date de fin </label> <br>
                 <input type="date" class="form-control" id="date_fin" name="date_fin"  value="<?php echo $aff['date_fin'] ?>">
                 <br>
                  <label for="demandeur"> demandeur </label> <br>
                 <input type="text" class="form-control" id="demandeur" name="demandeur" value="<?php echo $aff['demandeur'] ?>" >
                 <br>
                 <br><br>
                 <button name="login" type="submit" class="btn btn-success btn-lg" >modifier</button>
                 <button name="login" type="reset" class="btn btn-success btn-lg" >annuler</button>
				        </form>
           </div>

      </div>
	
	<!-- bordure -->
  	<div class="col-sm-3 w3-white" id="display">
	</div>
	
</div>
 

	
 <?php
  $conn=mysqli_connect("localhost","root","","bao");
   if(mysqli_query($conn, $query)){
 
    if(isset($_POST['date_debut'])and($_POST['date_debut']!="")){
		$date_debut=$_POST['date_debut'];
		$duree=$_POST['duree'];
		$type_conge=$_POST['type_conge'];
		$date_fin=$_POST['date_fin'];
		$demandeur=$_POST['demandeur'];

  $sql="update conge set date_debut='$date_debut', duree='$duree', type_conge='$type_conge', date_fin='$date_fin', demandeur='$demandeur' where(num_conge='$num_conge')";

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