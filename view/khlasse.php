<!doctype html>
<html lang="en" ng-app="">
	<body>
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
								<?php var_dump($listkhlasse);/*foreach ($listkhlasse as $value) {echo '<tr id="'.$value['annee'].'">';echo '<td>'.$value['id_khlasse'].'</td>';echo '<td>'.$value['id_type'].'</td>';echo '<td> <a class="btn btn-outline-light" href=#>Chiffre</a>';echo '</tr>';}*/?></tr>
							</tbody>
						</table>
					</div>
				</div>
			</main>
		</body>
	</html>
