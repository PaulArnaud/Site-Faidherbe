<!doctype html>
<html lang="fr">
	<head>
		<title>Accueil FaidherbeEnPoche </title>
		<link rel="stylesheet" href="lib/bootstrap.min.css">
		<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	</head>
	<body>
		<nav class="navbar navbar-expand-md navbar-dark bg-dark sticky-top site-header">
			<div class="nav-wrapper greyperso">
				<ul id="nav-mobile" class="right hide-on-med-and-down">
					<li><a href="Accueil.php">Accueil</a></li>
					<li><a href="Deposit.php">Désposer une annonce</a></li>
					<li><a href="Consult.php">Consulter les annonces</a></li>
					<?php if(isLogged()){ ?>
					<li><a href="Personnal_orders.php">Mes commandes</a></li>
					<?php } ?>
					<?php if(isAdmin()){ ?>
					<li><a href="Administrateur.php">Administrateur</a></li>
					<?php } ?>
					<?php if(!isLogged()){ ?>
					<li><a href="Connexion.php">Connexion</a></li>
					<?php } ?>
					<?php if(isLogged()){ ?>
					<li>
						<a title="Déconnexion" href="controller/Controller_Deconnexion.php"><i class="large material-icons">power_settings_new</i></a>
					</li>
					<?php } ?>
				</ul>
				<ul class="side-nav left-aligned" id="mobile-demo">
					<li>
						<a class="waves-effect waves-light btn" href="Accueil.php"><i class="large material-icons">store</i>Accueil</a>
					</li>
					<li>
						<a class="waves-effect waves-light btn" href="Deposit.php"><i class="large material-icons">play_circle_outline</i>Désposer une annonce</a>
					</li>
					<li>
						<a class="waves-effect waves-light btn" href="Consult.php"><i class="large material-icons">replay</i>Voir les annonces</a>
					</li>
					<?php if(isLogged()){ ?>
					<li>
						<a class="waves-effect waves-light btn" href="Personnal_orders.php"><i class="large material-icons">class</i>Mes commandes</a>
					</li>
					<?php } ?>
					<?php if(isAdmin()){ ?>
					<li>
						<a class="waves-effect waves-light btn" href="Administrateur.php"><i class="large material-icons">supervisor_account</i>Administrateur</a>
					</li>
					<?php } ?>
					<?php if(!isLogged()){ ?>
					<li>
						<a class="waves-effect waves-light btn" href="Connexion.php"><i class="large material-icons">input</i>Connexion</a>
					</li>
					<?php } ?>
					<?php if(isLogged()){ ?>
					<li>
						<a class="waves-effect waves-light btn" href="controller/Controller_Deconnexion.php"><i class="large material-icons">power_settings_new</i>Déconnexion</a>
					</li>
					<?php } ?>
				</ul>
			</div>
		</nav>
		<br>
	</body>
</html>
