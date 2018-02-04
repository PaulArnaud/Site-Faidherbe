<!doctype html>
<html lang="en">
	<head>
		<?php require('../Communs/header.php') ?>
		<title>Page Khlâsse</title>
	</head>

	<body>
		<?php require('../Communs/navbar.php') ?>
		<main role="main" class="container">
			<div class="starter-template">
				<h1> Site du Faidherbard </h1>
				<h2> Tableau des Khlâsses </h2>
				<div class="table-responsive">
					<table class="table table-striped table-sm table-bordered table-dark table-hover">
						<thead class="thead-dark">
							<tr>
								<th>
									Année
								</th>
								<th>
									Khlâsse
								</th>
								<th>
									Nombre d'actifs
								</th>
							</tr>
						</thead>
						<tbody>
						<tr>
						<?php require("../../controller/SelectKlass.php") ?>
						</tr>
						</tbody>	
					</table>
				</div>
			</div>
		</main>
		<?php require('../Communs/scriptjava.php') ?>
	</body>
</html>