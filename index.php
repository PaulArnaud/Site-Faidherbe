<!doctype html>
<html lang="en" ng-app="">
	<head>
		<?php require('header.php') ?>
		<title> Ceci est l'index </title>
	</head>
	<body ng-init="tab = 1" >
	
        <nav class="navbar navbar-expand-md navbar-dark bg-dark sticky-top site-header">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
			<div class="collapse navbar-collapse" id="navbarsExampleDefault" >
				<ul class="navbar-nav mr-auto">
					<li class="nav-item"><a class="nav-link" href ng-click = "tab =1"> Accueil </a></li>
					<li class="nav-item"><a class="nav-link" href ng-click ="tab = 2"> Khlâsse </a></li>
					<li class="nav-item"><a class="nav-link" href ng-click ="tab =3"> Mon profil </a></li>
					<li class="nav-item"><a class="nav-link" href ng-click ="tab = 4"> Forum </a></li>
				</ul>
				<ul class="navbar-nav px-3">
					<li class="nav-item text-nowrap"><a class="nav-link" href ng-click ="tab = 5"> Se déconnecter </a></li>
				</ul>
			</div>
		</nav>
        <section>
		<div ng-show="tab === 1">
			<?php require('accueil.php') ?>
		</div>
		<div ng-show="tab === 2">
			<?php require('khlasse.php') ?>
		</div>
		<div ng-show="tab === 3">
			<?php require('profil.php') ?>
		</div>
		<div ng-show="tab === 4">
			<?php require('forum.php') ?>
		</div>
        </section>
		<?php require('footer.php') ?>
	</body>
</html>