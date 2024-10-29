
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
	$num_sanction=$_GET['code'];
	$conn=mysqli_connect("localhost","root","","bao");
	$query="select * from sanction where(num_sanction='$num_sanction')";
	$result=mysqli_query($conn, $query);
	$aff=mysqli_fetch_array($result);

 ?>

		<!-- -->

		<div class=' row-sm-12 ' id="body transparentblock">

		<div class="col-md-3 "></div>
  
    <div class="col-md-6
    " id="transparentblock">
        
        <h3 style="text-align:center; color: green; opacity: 1"> MODIER SANCTION </h3>
        <br>
              
           <div class="from-group" >
             <a href="liste_sanction.php"><button name="login" type="" class=" button button6  glyphicon glyphicon-home" size="100%"> <span class=""></span> RETOUR</button></a>

                 <form method="POST" action="#">
				         <label for="nom_employe"> nom de l'employe </label> <br>
                 <input type="text" class="form-control" id="employe_sanc" name="employe_sanc" placeholder='nom ' value="<?php echo $aff['employe_sanc'] ?>" >
                 <br>
                 <label for="motif"> MOTIF DE LA SANCTION </label> <br>
                 <textarea rows="5" cols="50" id="motif" name="motif" placeholder='motif' value="" > <?php echo $aff['motif'] ?> </textarea><br>
                 <label for="sanction"> SANCTION APPLIQUE  </label><br>
                 <textarea  rows="5" cols="50" id="sanction_retenue" name="sanction_retenue" placeholder='sanction_retenue' value=" "> <?php echo $aff['sanction_retenue'] ?> </textarea> <br>  
                 <br><br><label for="SANCTION APPLIQUE"> date </label> <br>
                 <input type="date" name="date" value="<?php echo $aff['date'] ?>" >
                 <br>
                 <button name="login" type="submit" class="btn btn-success btn-lg" >attribuer la sanction</button>
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
 
    if(isset($_POST['employe_sanc']) and($_POST['employe_sanc']!="")){
      
      if(!$conn){
        die("connection error");
      }
    $employe_sanc=$_POST['employe_sanc'];
    $motif=$_POST['motif'];
    $sanction_retenue=$_POST['sanction_retenue'];
    $date=$_POST['date'];

  $sql="update sanction set employe_sanc='$employe_sanc', motif='$motif', sanction_retenue='$sanction_retenue', date='$date' where(num_sanction='$num_sanction')";

  if(mysqli_query($conn,$sql)==true){
       echo"<script> alert('modification top') </script>";
  }
  else{
    echo "<script> alert('echec de la modification ') </script>";
  }
  
    }
   }
 ?>
	
<?php
 	$conn=mysqli_connect("localhost","root","","bao");
	 if(mysqli_query($conn, $query)){
 
 if(isset($_POST['employe_sanc'])and($_POST['employe_sanc']!="")){
 	if(!$conn){
				die("connection error");
			}
		$employe_sanc=$_POST['employe_sanc'];
    $motif=$_POST['motif'];
    $sanction_retenue=$_POST['sanction_retenue'];
    $date=$_POST['date'];

	$sql="update sanction set  employe_sanc='$employe_sanc', motif='$motif', sanction_retenue='$sanction_retenue, date='$date')";

	if(mysqli_query($conn,$sql)==true){
			 echo"<script> alert('modification top') </script>";
	}
	else{
		echo "<script> alert('modification echouer') </script>";
	}
	
		}
	 }
 ?>
</body>
</html>	