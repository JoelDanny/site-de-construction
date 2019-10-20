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
	<title>sign</title>
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
		<h1 class="cont">Avec BatimCode vous avez aussi la possibilité de nous contacter pour la construction de votre maison vous n'avez qu'à remplir ce formulaire</h1>
		<div class="row">
			<div class="col-md-4 col-sm-6 col-xs-6 actu test" style="background-image: url(images/bg5.jpg);background-repeat: no-repeat; background-size: cover; width: 25%; height: 35vh;">
				<h3 class="confi">avec nous plus de craintes vous verrez votre maison naître et grandir devant vous</h3>
			</div>
			<div class="col-md-4 col-sm-6 col-xs-6 actu" style="background-image: url(images/bg6.jpg);background-repeat: no-repeat; background-size: cover; width: 25%; height: 35vh;">
				<h3 class="confi">maison bâti en bois, nous avons des spécialistes qui vous construirons des maisons en bois dont vous ne pourrez imaginer la beauté</h3>
			</div>
			<div class="col-md-4 col-sm-6 col-xs-6 actu" style="background-image: url(images/bg7.jpg);background-repeat: no-repeat; background-size: cover; width: 25%; height: 35vh;">
				<h3 class="confi">possibilité de faire de grands châteaux, belles villas, beaux étages, ..., contactez nous</h3>
			</div>
		</div>
		<div class="form">
			<form action="verification/tcontact.php" method="POST" >
				<input type="text" name="name" placeholder="Your Name" required="" class="col-md-4">
				<input type="text" name="firstname" placeholder="Your Firstname" required="" class="col-md-4">
				<input type="text" name="ville" placeholder="Your Country" required="" class="col-md-4">
				<input type="text" name="maisonVoulue" placeholder="Your Desired House" required="" class="col-md-4">
				<input type="text" name="delai" placeholder="Time Limit" required="" class="col-md-4">
				<input type="email" name="email" placeholder="Your Email" required="" class="col-md-4">
				<input type="text" name="budget" placeholder="Your Budget" required="" class="col-md-4"><br>
				<input type="submit" name="reserve" value="Submit"  class="btn btn-warning
				 bt4 col-md-2">
			</form>
		</div>
	</div>
</body>
</html>