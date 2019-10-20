<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script type="text/javascript" src="js/first.js"></script>
	<script src="js/script.js"></script>
	<title>login</title>
</head>
<body style="background-image: url(images/bg2.jpg);background-repeat: no-repeat; background-size: cover;">
	<div class="container-fluid">
		<nav class="navbar navbar-inverse navbar-fixed-top couleur ">
		  <div class="container-fluid">
		    <div class="navbar-header">
		    	<button type="button" class="navbar-toggle " data-toggle="collapse" data-target="#myNavbar">
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span> 
		      	</button>
		      	<a class="navbar-brand" href="#">BatimCode</a>
		    </div>
		    <div class="collapse navbar-collapse" id="myNavbar">
		    	<ul class="nav navbar-nav">
			      	<li><a href="index.html">ACCUEIL</a></li>
			      	<li><a href="maison.html">MAISONS</a></li>
			      	<li ><a href="contact.php">PLUS</a></li>
			      	<li><a href="login.php">LOGIN</a></li>
			    </ul>
		    </div> 
		  </div>
		</nav>
	<div class="maman col-lg-offset-2 col-lg-8">
			<div class="first col-md-6 box">
				<div>
					<h3 class="consigne">Connecter vous par le biais de ce formulaire pour pouvoir avoir accès à votre page</h3>
				</div>
			</div>
			<div class="second col-md-6 box">
					<div class="ensemble">
						<marquee><h3 class="connect">Connexion</h3></marquee>
						<form action="verification/tconnexion.php" method="POST">
							<input type="email" name="email" placeholder="Your Email" required="">
							<input type="password" name="password" placeholder="Your Password" required=""><br>
							<input type="submit" name="reserve" value="Submit"  class="btn btn-primary bt1">
						</form>
						<a href="sign.php" class="lien">Créez un Compte</a>
					</div>
			</div>
		</div>
</body>
</html>