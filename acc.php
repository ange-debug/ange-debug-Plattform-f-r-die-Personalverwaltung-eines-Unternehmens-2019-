
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content=" groupe 2 de cpmptabilite">

    <title> Acc  </title>

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
.w3-hover-yellow{color: ;


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
    a{box-shadow: 10px 11px 9px ;color:#1c1d22;
  }
	
  
butt:hover{  opacity:24;
    -webkit-transform: scale3d(1.2,1.2,1);
    transform: scale3d(1.2,1.2,1);
    
  -webkit-transition: opacity 0.8s, -webkit-transform 0.8s;
  transition: opacity 0.8s, transform 0.8s;

}

#transparentblock{
    
   
    }
#display{
	background-image: src='../img/10.jpg' Style="height:150px; width:250px"  class='ente' ;
}	
  
	div.nom:hover{
		opacity:24;
		-webkit-transform: scale3d(1.3,1.3,1);
		transform: scale3d(1.3,1.3,1);
		
	-webkit-transition: opacity 0.3s, -webkit-transform 0.3s;
  transition: opacity 0.3s, transform 0.3s;

  }
  header{
    background: red;
    -webkit-animation: mymove 5s infinite; /* Chrome, Safari, Opera */
    animation: mymove 5s infinite;
  }

/* Chrome, Safari, Opera */
@-webkit-keyframes mymove {
    from {background-color:   #787878;}
    to {background-color:     #787878;}
}

/* Standard syntax */
@keyframes mymove {
    from {background-color:   #787878;}
    to {background-color:     #787878;}
  }
  p{
    font-size:35px
  }
  
  .button {
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}
.button1 {background-color: #e06000;} /* #e06000 */
.button2 {background-color: #008CBA;} /* Blue */
.button3 {background-color: #f44336;} /* Red */ 
.button4 {background-color: #a6001a; color: black;} /* #a6001a */ 
.button5 {background-color: #555555;} /*  */
.button6 {background-color: #1c1d22;} /* Black */

.button {
    background-color: ; /* Green */
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}

.button11 {
    background-color: #4CAF50; 
    color: black; 
    border: 2px solid #4CAF50;
} 

.button22 {
    background-color: #FF9966; 
    color: black; 
   
}

.button33 {
    background-color: #fb9c06; 
    color: black; 
}

.button44 {
    background-color: white;
    color: black;
    border: 2px solid #e7e7e7;
}

.button55 {
    background-color: white;
    color: black;
    border: 2px solid #555555;
}
.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}


.button span:after {
  content: '»';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}
footer{
      background:   #787878;
}
</style>
  <body>
    <div class="col-sm-12" id="body transparentblock">
     <div class=" col-md-1" id="body transparentblock">
    </div>
    
    <div class="col-md-10" id="body transparentblock">
        <header> <br> 
              <p> <img src="logo.png">  MANAGER SYSTEM </p> 
              <br> 
        </header>
        <br> <br> <br>

        <a href="menbre.php"><button class="button button1"><h3 class=''><span class="glyphicon glyphicon-user"></span> Membres du personnel</h3> </button> </a> &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;
        <a href="contrat.php"><button class="button button2"><h3><span class="glyphicon glyphicon-edit"></span>Modifier les informations</h3> </button></a> &nbsp; &nbsp; &nbsp; &nbsp;  
        <a href="sanction.php"><button class="button button3"><h3><span class="glyphicon glyphicon-question-sign"></span>Sanction &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;</h3> </button></a> &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;<br>
        <a href="conge.php"><button class="button button4"><h3>&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; <span class="glyphicon glyphicon-pause"></span>Conge&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;</h3> </button></a>&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
        <a href="recrutement.php"><button class="button button5"><H3> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span class=" glyphicon glyphicon-plus-sign"></span>Recrutement &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;</h3> </button></a>&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <a href="classement.php"><button class="button button11"><h3><span class="glyphicon glyphicon-bookmark"></span>Primes &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; </h3> </button></a> <br> <br> &nbsp; 
        <a href="liste_conge.php"><button class="button button22"><h4> &nbsp; &nbsp;&nbsp;<span class=" glyphicon glyphicon-list"></span>Historique des Conges</button> &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;</h4> </a>&nbsp; &nbsp; &nbsp; 
        <a href="liste_sanction.php"><button class="button button33"> <h4><span class=" glyphicon glyphicon-list"></span>Historique des sanctions &nbsp; &nbsp; &nbsp;</h4></button></a>&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;

          <br> <br> <br> <br>
        <footer> <br> 
             <a href="index.php"><button name="login" type="" class=" button button6  glyphicon glyphicon-remove-sign" size="100%"> <span class=""></span> deconnexion</button></a>
             <button name="login" type="" class=" button button6  glyphicon glyphicon-asterisk" size="100%"> parametre</button> 
             <br>  <br>
        </footer>
      </div>

      <div class="col-md-1" id="body transparentblock">
      </div>
  </div>


  </body>

  </html>