<!doctype html>
<html lang="en" ng-app="">
	<head>
		<?php require('../communs/header.php') ?>
		<title> Page Chants </title>
	</head>
	<body ng-init="ch = 1" class="container">
			
			<nav class="navbar navbar-expand-md navbar-dark bg-dark sticky-top site-header">
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
				<div class="collapse navbar-collapse" id="navbarsExampleDefault" >
					<form class="form-inline">
						<ul class="navbar-nav">
							<li class="nav-item"><a class="nav-link" href ng-click ="ch = 1"> Faidherbe </a></li>
							<li class="nav-item"><a class="nav-link" href  ng-click ="ch = 2"> Taupin </a></li>
							<li class="nav-item"><a class="nav-link" href  ng-click ="ch = 3"> Khagneux </a></li>
							<li class="nav-item"><a class="nav-link" href  ng-click ="ch = 4"> Agro </a></li>
							<li class="nav-item"><a class="nav-link" href  ng-click ="ch = 5"> HEC </a></li>
							<li class="nav-item"><a class="nav-link" href="main.php"  > Retour à l'accueil </a></li>
						</ul>
					</form>
				</div>
			</nav>
			<div ng-show="ch === 1">
				<?php require('faidherbe.php') ?>
			</div>
			<div ng-show="ch === 2">
				<?php require('taupin.php') ?>
			</div>
			<div ng-show="ch === 3">
				<?php require('khagneux.php') ?>
			</div>
			<div ng-show="ch === 4">
				<?php require('agro.php') ?>
			</div>
			<div ng-show="ch === 5">
				<?php require('hec.php') ?>
			</div>

		<?php require('../communs/footer.php') ?>
	</body>
</html>