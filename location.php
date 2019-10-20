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
	<div class="maman col-lg-offset-2 col-lg-8">
			<div class="un col-md-6" style="background-image: url(images/bg4.jpg);">
				<div>
					<h3 class="consigne">Faites votre location maintenant et dans moins de deux jours jours vous serez contactez par un de nos agents pour une visite guidée de la maison ...</h3>
				</div>
			</div>
			<div class="deux col-md-6">
					<div class="ensemble">
						<h3 class="locat">Louez</h3>
						<form action="verification/tlocation.php" method="POST">
							<input type="text" name="nom" placeholder="Your Name" required="" class="form-control col-sm-6 formu">
							<input type="text" name="prenom" placeholder="Your Firstname" required="" class="form-control col-sm-6 formu">
							<input type="tel" name="phone" placeholder="Your phone" required="" class="form-control col-sm-6 formu">
							<input type="password" name="password" placeholder="Your Secret Code" required="" class="form-control col-sm-6 formu">
							<input type="email" name="email" placeholder="Your Email" required="" class="form-control col-sm-6 formu">
				            <select name="maison" id="" class="form-control col-sm-6 ">
				                <option value="">Desired House...</option>
				                <option value="maison1">maisons anciennes detentes</option>
				                <option value="maison2">maisons anciennes superbes</option>
				                <option value="maison3">la belle vue</option>
				                <option value="maison4">le fleuriste</option>
				                <option value="maison5">le château de fort</option>
				                <option value="maison6">le paradis de Nante</option>
				                <option value="maison7">la seconde plage</option>
				                <option value="maison8">la forteresse de Napoléon</option>
				                <option value="maison9">le paradis</option>
				                <option value="maison10">bien chez soi</option>
				                <option value="maison11">beautiful place</option>
				                <option value="maison12">la tune dans les mains</option>
				            </select>
							<select name="duree" id="" class="form-control col-sm-6 ">
				                <option value="">Location Duration...</option>
				                <option value="1">1 semaine</option>
				                <option value="2">2 semaines</option>
				                <option value="3">3 semaines</option>
				                <option value="4">4 semaines</option>
				                <option value="5">8 semaines</option>
				            </select>
							<input type="submit" name="reserve" value="Submit"  class="btn btn-danger
							 bt3">
						</form>
					</div>
			</div>
		</div>
</body>
</html>