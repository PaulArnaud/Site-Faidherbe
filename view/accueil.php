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
					<li class="nav-item"><a class="nav-link"  href="Accueil.php">Accueil</a></li>
					<li class="nav-item"><a class="nav-link"  href="Deposit.php">Désposer une annonce</a></li>
					<li class="nav-item"><a  class="nav-link" href="Consult.php">Consulter les annonces</a></li>
					<?php if(isLogged()){ ?>
					<li class="nav-item"><a class="nav-link"  href="Personnal_orders.php">Mes commandes</a></li>
					<?php } ?>
					<?php if(isAdmin()){ ?>
					<li class="nav-item"><a class="nav-link"  href="Administrateur.php">Administrateur</a></li>
					<?php } ?>
					<?php if(!isLogged()){ ?>
					<li class="nav-item"><a class="nav-link" href="Connexion.php">Connexion</a></li>
					<?php } ?>
					<?php if(isLogged()){ ?>
					<li class="nav-item">
						<a class="nav-link"  title="Déconnexion" href="controller/Controller_Deconnexion.php"><i class="large material-icons">Deconnexion</i></a>
					</li>
					<?php } ?>
				</ul>
			</div>
		</nav>
		<br>
	</body>
</html>
