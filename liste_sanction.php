<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content=" NJENKAM NGAMI ANGE">

    <title> liste des sannctions </title>

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
  tr:hover {
    background-color: #555;
	    color: #a6001a;
	}
	th{
		font-size:20px;
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
</head>
<body>
	<div class="col-sm-12">
		<div class="col-md-2"></div>

	<div class="col-md-8">
	<header><p>  liste des sanctions </p> <a href="acc.php"><button name="login" type="" class=" button button6  glyphicon glyphicon-home" size="100%"> <span class=""></span> ACCEUIL</button></a></header>
<table class="w3-table w3-bordered w3-striped w3-small">
<thead>
<tr class="w3-blue">
<th>numero</th>
<th>nom de l'employe</th>
<th>motif</th>
<th>sanction_retenue</th>
<th>date</th>
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
	$sql="select* from sanction";
	
	$result = mysqli_query($conn, $sql);
	$i=1;
		
		while($row = mysqli_fetch_array($result)){
			?>
			<tr>
			<td><?php echo $i++ ?></td>
			<td><?php echo $row['employe_sanc'] ?></td>
			<td><?php echo $row['motif'] ?></td>
			<td><?php echo $row['sanction_retenue'] ?></td>
			<td><?php echo $row['date'] ?></td>
			<td><a href="supprimer_sanction.php?code=<?php echo $row['num_sanction']?>">supp</a>
				<a href="modifier_sanction.php?code=<?php echo $row['num_sanction']?>">modifier</a></td>
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