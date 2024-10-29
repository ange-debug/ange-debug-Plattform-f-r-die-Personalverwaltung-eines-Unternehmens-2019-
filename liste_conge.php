<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content=" NJENKAM NGAMI ANGE">

    <title> liste des conges </title>

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
}

	.imageOver:hover{
		opacity:24;
		-webkit-transform: scale3d(1.3,1.3,1);
		transform: scale3d(1.3,1.3,1);
		
	-webkit-transition: opacity 0.9s, -webkit-transform 0.9s;
  transition: opacity 0.9s, transform 0.9s;

  }
  tr:hover {
    background-color: #555;
	    color: #a6001a;
	}
		th{
		font-size:18px;
		font-family: ;
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
<body>
	<div class="col-sm-12">
	<div class="col-md-2"></div>

	<div class="col-md-8">
		<header><p>  liste des conge </p> <a href="acc.php"><button name="login" type="" class=" button button6  glyphicon glyphicon-home" size="100%"> <span class=""></span> ACCEUIL</button></a></header>
<table class="w3-table w3-bordered w3-striped w3-small">
<thead>
<tr class="w3-blue">
<th>numero</th>
<th>date debut</th>
<th>duree</th>
<th>type de conge</th>
<th>date de fin de conge</th>
<th>beneficiaire</th>
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
	$sql="select* from conge";
	
	$result = mysqli_query($conn, $sql);
	$i=1;
		
		while($row = mysqli_fetch_array($result)){
			?>
			<tr>
			<td><?php echo $i++ ?></td>
			<td><?php echo $row['date_debut'] ?></td>
			<td><?php echo $row['duree'] ?></td>
			<td><?php echo $row['type_conge'] ?></td>
			<td><?php echo $row['date_fin'] ?></td>
			<td><?php echo $row['demandeur'] ?></td>
			<td><a href="supprimer_conge.php?code=<?php echo $row['num_conge']?>">supp</a>
				<a href="modifier_conge.php?code=<?php echo $row['num_conge']?>">modifier</a></td>
			</tr>
			<?php
		}
		
	mysqli_close($conn);
?>
</div>
<div class="col-md-2"></div>
</div>
</body>
</html>