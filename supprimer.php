<?php
$numero=$_GET['code'];

$conn=mysqli_connect("localhost","root","","bao");
	if(!$conn){
		die('connection error');
	}

$sql="delete from employe where numero='$numero'";

if(mysqli_query($conn,$sql)==true){
	
	header("location:contrat.php");
	
}
?>