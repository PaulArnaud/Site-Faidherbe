<body>
	<main role="main" class="container text-center">
		<div class="starter-template">
			<h1> Site du Faidherbard </h1>
			<h2> Tableau des Khlâsses </h2>
			<div class="table-responsive">
				<table class="table table-striped table-sm table-bordered table-dark table-hover">
					<thead class="thead-dark">
						<tr>
							<th class="text-center">
								Année
							</th>
							<th class="text-center">
								Khlâsse
							</th>
							<th class="text-center">
								Nombre d'actifs
							</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<?php foreach ($listkhlasse as $value) {echo '<tr id="'.$value['id_khlasse'].'">';echo '<td class="text-center">'.$value['annee'].'</td>';echo '<td class="text-center">'.$value['nomkhlasse'].'</td>';echo '<td class="text-center"> <a class="btn btn-outline-light" ng-click="tab=0" href="controller_page_camarades.php?idkhlasse='.$value['id_khlasse'].'">'.$value[3].'</a>';echo '</tr>';}?></tr>
						</tbody>
					</table>
				</div>
			</div>
		</main>

		<div class="btn-group btn-group-toggle" data-toggle="buttons">
			<div class="container">
				<a href ng-click="tab = 10 " class="btn-dark btn-lg" role="button"> Ajouter une khlasse </a>
			</div>
			<div class="container">
				<a href ng-click="tab = 13 " class="btn-dark btn-lg" role="button"> Ajouter une école </a>
			</div>
		</div>
</body>



