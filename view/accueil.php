<!doctype html>
<html lang="fr">
	<head>
		<title>Accueil LCDE</title>
		<meta name="Content-Type" content="UTF-8">
		<meta name="Content-Language" content="fr">
		<meta name="Description" content="Lieu d\'échange entre étudiants">
		<meta name="Keywords" content="échange offre offer event événement ville étudiant student">
		<meta name="Subject" content="Le Coin des étudiants">
		<meta name="Copyright" content="CyprienLegrand">
		<meta name="Author" content="CyprienLegrand">
	  <meta http-equiv="X-UA-Compatible" content="IE=edge">
	  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
		

<html>
	<link rel="stylesheet" href="css/materialize/css/materialize.min.css">
	<link rel="stylesheet" href="css/style.css">
	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script src="../css/materialize/js/materialize.min.js"></script>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="icon" type="image/png" href="medias/favicon.ico" />
	<script src="../css/hider.js"></script>

</html>
	  <link rel="icon" href="medias/favicon.ico" />
	</head>
	<body>
    <nav>
	<div class="nav-wrapper greyperso">
		<a href="" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
		<a href="/Accueil.php" class="logosite"> LCDE</a>
		<ul id="nav-mobile" class="right hide-on-med-and-down">
			<li><a href="Accueil.php">Accueil</a></li>
			<li><a href="Deposit.php">Désposer une annonce</a></li>
			<li><a href="Consult.php">Consulter les annonces</a></li>
			<?php if(isLogged()){ ?><li><a href="Personnal_orders.php">Mes commandes</a></li><?php } ?>
			<?php if(isAdmin()){ ?><li><a href="Administrateur.php">Administrateur</a></li><?php } ?>
		  <?php if(!isLogged()){ ?><li><a href="Connexion.php">Connexion</a></li><?php } ?>
			<?php if(isLogged()){ ?><li><a title="Déconnexion" href="controller/Controller_Deconnexion.php"><i class="large material-icons">power_settings_new</i></a></li><?php } ?>
		</ul>
		<ul class="side-nav left-aligned" id="mobile-demo">
			<li><a class="waves-effect waves-light btn" href="Accueil.php"><i class="large material-icons">store</i>Accueil</a></li>
			<li><a class="waves-effect waves-light btn" href="Deposit.php"><i class="large material-icons">play_circle_outline</i>Désposer une annonce</a></li>
			<li><a class="waves-effect waves-light btn" href="Consult.php"><i class="large material-icons">replay</i>Voir les annonces</a></li>
			<?php if(isLogged()){ ?><li><a class="waves-effect waves-light btn" href="Personnal_orders.php"><i class="large material-icons">class</i>Mes commandes</a></li><?php } ?>
			<?php if(isAdmin()){ ?><li><a class="waves-effect waves-light btn" href="Administrateur.php"><i class="large material-icons">supervisor_account</i>Administrateur</a></li><?php } ?>
			<?php if(!isLogged()){ ?><li><a class="waves-effect waves-light btn" href="Connexion.php"><i class="large material-icons">input</i>Connexion</a></li><?php } ?>
			<?php if(isLogged()){ ?><li><a class="waves-effect waves-light btn" href="controller/Controller_Deconnexion.php"><i class="large material-icons">power_settings_new</i>Déconnexion</a></li><?php } ?>
		</ul>
	</div>
</nav>
<br>
<script>
$( document ).ready(function(){
	$(".button-collapse").sideNav();
})
</script>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-90376618-1', 'auto');
  ga('send', 'pageview');
</script>
		<div>
			<h4 class="center-align">Le Coin des étudiants</h4>
		</div>
		<br>
		<div class="container">
			<br>
			<div class="row z-depth-4 blue-grey lighten-5 general-container">
				<div class="input-field col s12">
					<h4>Qu'est-ce que le coin des étudiants?</h4>
					<p>A l'instar du célèbre site Leboncoin, Le Coin des étudiants est un site créé dans le but de faciliter les échanges entre étudiants. Ici les étudiants peuvent s'échanger ou vendre des objets utiles à leur vie de tous les jours, mais également rechercher et créer des événements dans leur ville, ce qui leur permet d'apprendre à connaître leur ville et ses étudiants.</p>
				</div>
			</div>
			<a href="Rapport_Web_LEGRAND_Cyprien.pdf" target="blank">Vous pouvez consulter mon rapport ici (dans un nouvel onglet)</a>
		</div>


		<?php require ("view/footer.php");?>
	</body>
</html>