<!doctype html>
<html lang="en" ng-app="FaidherbeEnPoche">
	<head>
    <meta charset="utf-8">
		<link rel="stylesheet" href="../lib/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<script src="../lib/angular.min.js"></script>
		<link href="../css/signin.css" rel="stylesheet">
		<title> Ceci est la page de connexion </title>
	</head>
	<body class="text-center">

		<form class="form-signin container" action="controller_connexion.php" method="post">
			<img class="mb-4" src="/img/logo faidherbe.jpg" alt="" width="150" height="150">
			<h1 class="h3 mb-3 font-weight-normal"> Bienvenue </h1>

			<label for="inputEmail" class="sr-only"> Mail </label>
			<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
			<input type="email" id="inputEmail" name="Email" class="form-control" placeholder=" Mail" required autofocus>
	
			<label for="inputPassword" class="sr-only"> Mot de Passe </label>
			<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
			<input type="password" id="inputPassword" name ="password" class="form-control" placeholder="Mot de Passe" required>
			
			<button class="btn btn-lg btn-primary btn-block" type="submit"> Se connecter </button>
			<a class="btn btn-lg btn-block" type="submit" href="inscription.php"> S'inscrire </a>
			<p class="mt-5 mb-3 text-muted">
				&copy; Faidherbard
			</p>
		</form>

		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	</body>
</html>