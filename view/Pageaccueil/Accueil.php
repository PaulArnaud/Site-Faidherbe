<!doctype html>
<html lang="en">
	<head>
		<?php require('../Communs/header.php') ?>
		<title>Page d'accueil </title>
	</head>
	<body>
		<?php require('../Communs/navbar.php') ?>

		<div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
			<div class="col-md-10 p-lg-1 mx-auto my-5">
				<h1 class="display-4 font-weight-normal">Bienvenue sur FaidherbeEnPoche</h1>
				<p class="lead font-weight-normal"> Sur ce site vous êtes libres de faire ce que vous voulez dans la limite du respect. Il est conçu dans un objectif de réseau. Vous pourriez donc retrouvez vos anciens compagnons. Alors c'est parti, découvrez la 8ème merveille du monde.</p>
			</div>
		</div>

		<div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3">
			<div class="bg-success mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden">
				<div class="my-3 py-3">
					<h2 class="display-5"> La Gallerie </h2>
					<p class="lead">Retrouvez ici toutes les photos les plus belles de ces années folles.</p>
					<a class="btn btn-outline-light" href="Gallerie.php">Gallerie</a>
				</div>
			</div>

			<div class="bg-primary mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden">
				<div class="my-3 p-3">
					<h2 class="display-5">Les Fonctions</h2>
					<p class="lead">Retrouvez ici les fonctions.</p>
					<a class="btn btn-outline-light" href="Fonctions.php">Fonctions</a>
				</div>
			</div>
		</div>

		<div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3">
			<div class="bg-danger mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden">
				<div class="my-3 p-3">
					<h2 class="display-5">Les Chants</h2>
					<p class="lead">Retrouvez tous les chants traditionnels de Faidherbe.</p>
					<a class="btn btn-outline-light" href="Chants.php">Chants</a>
				</div>
			</div>

			<div class="bg-warning mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden">
				<div class="my-3 p-3">
					<h2 class="display-5">Les Evénements</h2>
					<p class="lead">Retrouvez tous les différents événements incontournables de Faidherbe.</p>
					<a class="btn btn-outline-light" href="Evenements.php">Evénements</a>
				</div>
			</div>
		</div>

		<div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3">
			<div class="bg-info mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden">
				<div class="my-3 p-3">
					<h2 class="display-5">Les Khâlots</h2>
					<p class="lead">Retrouvez tous les insignes et leur signification.</p>
					<a class="btn btn-outline-light" href="Khalot.php">Khâlots</a>
				</div>
			</div>

			<div class="bg-dark mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden">
				<div class="my-3 p-3">
					<h2 class="display-5">La carte</h2>
					<p class="lead">Retrouvez ici une carte pour localiser les anciens.</p>
					<a class="btn btn-outline-light" href="https://drive.google.com/open?id=1ccwASpKw8JI7YLZ3VzykNfhJ9kawTSB-&usp=sharing">Carte</a>
				</div>
			</div>
		</div>
		
		<?php require('../Communs/scriptjava.php') ?>
	</body>
</html>

