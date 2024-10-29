
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content=" NJENKAM NGAMI ANGE">

    <title> LOGIN	</title>

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
	     background-image: url(pp.jpg);
	}
	
	@media screen and (max-width: 680px) {
		
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
    fieldset{
      width:40%;
      height:30%;
      background-color:#00477e;
      margin-right:40%;
      margin-left:30%; 
      opacity: 2;
      filter: alpha(opacity=40);
        border-style: dotted;
    border-width: 
    ick;
    }

     img {
    /* For IE8 and earlier */
} 
button{
     width:40%;
      height:55%;
}
legend{
  font-size:60px
}


 
</style>
</head>
<body>
    <div class="col-sm-12 " id="display">

      <div class="col-md-1 " id="display">
    </div>   
     <div class="col-md-10" id="display">
  
                <?php 

                  ini_set("display_errors", true);

                $con=mysqli_connect("localhost","root","","bao");

                if (isset($_POST['Pseudo']) && isset($_POST['password'])) {

                  $Pseudo=$_POST['Pseudo'];

                  $password=$_POST['password'];

                  $query="select* from connect where Pseudo='$Pseudo' AND password='$password'";

                  $result=mysqli_query($con,$query);

                  if (mysqli_num_rows($result)==1) {

                    header("location:acc.php");
                  }
                    }

              ?>
          
              <br> <br> <br> <br> <br>
              <fieldset><legend align="center"><img  src="logo.png"></legend>
                  <br>
                  <form method="POST" action="#">
                    <br> 
				         <label for="motif"> utilisateur </label> <br>
                 <input type="text" class="form-control " id="" name="Pseudo" placeholder='use name ' >
                 <br>
                  <label for="motif"> mot de passe </label> <br>
                 <input type="password" class="form-control" id="" name="password" placeholder='password ' >
                 <br><br>
                 <center><button name="login" type="submit" class="glyphicon glyphicon-send" size="7px" >login</button>
                 <button name="login" type="reset" class="  glyphicon glyphicon-remove-sign" size="7px"     >reset</button> </center>
				        </form>
                <br> 
                </fieldset>
           </div>
  	<div class="col-md-1" id="display">
  	</div>
	
</div>

</body>
</html>