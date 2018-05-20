<!doctype html>
<html lang="en" ng-app="">
	<head>
		<?php require('header.php') ?>
		<title> Page Chants </title>
	</head>
	<body ng-init="ch = 1">
		<a href="index.php" class="btn-dark btn-lg" role="button">Retour à l'accueil</a>
		<main role="main" class="container" >
			<nav class="navbar navbar-expand-lg navbar-toggleable-md navbar-dark bg-dark">
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
				<div class="container justify-content-md-center">
					<form class="form-inline">
						<ul class="navbar-nav">
							<li class="nav-item"><a class="nav-link" href ng-click ="ch = 1"> Faidherbe </a></li>
							<li class="nav-item"><a class="nav-link" href  ng-click ="ch = 2"> Taupin </a></li>
							<li class="nav-item"><a class="nav-link" href  ng-click ="ch = 3"> Khagneux </a></li>
							<li class="nav-item"><a class="nav-link" href  ng-click ="ch = 4"> Agro </a></li>
							<li class="nav-item"><a class="nav-link" href  ng-click ="ch = 5"> HEC </a></li>
						</ul>
						<ul class="navbar-nav px-3">
							<li class="nav-item text-nowrap"><a class="nav-link" href="index.php"> Retour à l'accueil </a></li>
						</ul>
					</form>
				</div>
			</nav>
			</main>
			<div ng-show="ch === 1">
				<?php require('Faidherbe.php') ?>
			</div>
			<div ng-show="ch === 2">
				<?php require('Taupin.php') ?>
			</div>
			<div ng-show="ch === 3">
				<?php require('Khagneux.php') ?>
			</div>
			<div ng-show="ch === 4">
				<?php require('Agro.php') ?>
			</div>
			<div ng-show="ch === 5">
				<?php require('Hec.php') ?>
			</div>

		<?php require('footer.php') ?>
	</body>
</html>