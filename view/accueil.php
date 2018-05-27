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
			<div class="collapse navbar-collapse" id="navbarsExampleDefault" >
				<ul class="navbar-nav mr-auto">
					<li class="nav-item"><a href="Accueil.php">Accueil</a></li>
					<li class="nav-item"><a href="Deposit.php">Désposer une annonce</a></li>
					<li class="nav-item"><a href="Consult.php">Consulter les annonces</a></li>
					<?php if(isLogged()){ ?>
					<li class="nav-item"><a href="Personnal_orders.php">Mes commandes</a></li>
					<?php } ?>
					<?php if(isAdmin()){ ?>
					<li class="nav-item"><a href="Administrateur.php">Administrateur</a></li>
					<?php } ?>
					<?php if(!isLogged()){ ?>
					<li class="nav-item"><a href="Connexion.php">Connexion</a></li>
					<?php } ?>
					<?php if(isLogged()){ ?>
					<li class="nav-item">
						<a title="Déconnexion" href="controller/Controller_Deconnexion.php"><i class="large material-icons">power_settings_new</i></a>
					</li>
					<?php } ?>
				</ul>
			</div>
		</nav>
		<br>
	</body>
</html>
