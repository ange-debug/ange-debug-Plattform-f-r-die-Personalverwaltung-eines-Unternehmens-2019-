<?php
$num_conge=$_GET['code'];

$conn=mysqli_connect("localhost","root","","bao");
	if(!$conn){
		die('connection error');
	}

$sql="delete from conge where num_conge='$num_conge'";

if(mysqli_query($conn,$sql)==true){
	
	header("location:liste_conge.php");
	
}
?>