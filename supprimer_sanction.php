<?php
$num_sanction=$_GET['code'];

$conn=mysqli_connect("localhost","root","","bao");
	if(!$conn){
		die('connection error');
	}

$sql="delete from sanction where num_sanction='$num_sanction'";

if(mysqli_query($conn,$sql)==true){
	
	header("location:liste_sanction.php");
	
}
?>