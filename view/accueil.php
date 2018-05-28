<!doctype html>
<html lang="fr" ng-app="">
	<head>
		<title>Accueil FaidherbeEnPoche </title>
		<link rel="stylesheet" href="lib/bootstrap.min.css">
		<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<script src="lib/angular.min.js"></script>
	</head>
	<body ng-init="tab = 1" >
		<nav class="navbar navbar-expand-md navbar-dark bg-dark sticky-top site-header" >
			<div class="collapse navbar-collapse" id="navbarsExampleDefault" >
				<ul class="navbar-nav mr-auto">
					<li class="nav-item"><a class="nav-link" href ng-click ="tab = 1">Accueil</a></li>
					<?php if(isLogged()){ ?>
					<li class="nav-item"><a class="nav-link" href ng-click ="tab = 2"> Khlâsse </a></li>
					<li class="nav-item"><a class="nav-link" href ng-click ="tab = 3"> Mon profil </a></li>
					<li class="nav-item"><a class="nav-link" href ng-click ="tab = 4"> Forum </a></li>
					<?php } ?>
					<?php if(isAdmin()){ ?>
					<li class="nav-item"><a class="nav-link"  href ng-click ="tab = 5">Administrateur</a></li>
					<?php } ?>
					<?php if(!isLogged()){ ?>
					<li class="nav-item"><a class="nav-link" href="Connexion.php"><i class="material-icons">power_setting</i></a></li>
					<?php } ?>
					<?php if(isLogged()){ ?>
					<li class="nav-item">
						<a class="nav-link"  title="Déconnexion" href="controller/Controller_Deconnexion.php"><i class="material-icons">exit_to_app</i></a>
					</li>
					<?php } ?>
				</ul>
			</div>
		</nav>

		<div ng-show="tab === 1">
			<?php require_once('view/presentation.php') ?>
		</div>
		<div ng-show="tab === 2">
			<?php require_once('view/khlasse.php') ?>
		</div>
		<div ng-show="tab === 3">
			<?php require_once('view/profil.php') ?>
		</div>
		<div ng-show="tab === 4">
			<?php require_once('view/forum.php') ?>
		</div>
	</body>
</html>

