<!doctype html>
<html lang="fr" ng-app="">
	<head>
		<title> Page camarades </title>
		<link rel="stylesheet" href="../lib/bootstrap.min.css">
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<script src="../lib/angular.min.js"></script>
	</head>

<body>
	<main role="main" class="container text-center">
		<div class="starter-template">
			<h1> Site du Faidherbard </h1>
			<h2> Camarades de la Khlasse :<?php echo $var1['nomkhlasse'];?> de l'année : <?php echo $var1['annee'];?>  </h2>
			<div class="table-responsive">
				<table class="table table-striped table-sm table-bordered table-dark table-hover">
					<thead class="thead-dark">
						<tr>
							<th class="text-center">
								Nom
							</th>
							<th class="text-center">
								Prénom
							</th>
							<th class="text-center">
								Profil
							</th>
						</tr>
					</thead>
					<tbody>
						<tr>
						<?php foreach ($var2 as $value) {echo '<tr id="'.$value['id_user'].'">';echo '<td class="text-center">'.$value['nom'].'</td>';echo '<td class="text-center">'.$value['prenom'].'</td>';echo '<td class="text-center"> <a class="btn btn-outline-light" ng-click="tab=0" href="Controller/controller_page_individu.php?iduser='.$value['id_user'].'">Voir Profil</a>';echo '</tr>';}?></tr>						</tbody>
					</table>
				</div>
			</div>
		</main>
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	</body>
</html>