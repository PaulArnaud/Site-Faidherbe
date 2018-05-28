<body>
	<main role="main" class="container">
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
							<?php foreach ($listkhlasse as $value) {echo '<tr id="'.$value['id_khlasse'].'">';echo '<td class="text-center">'.$value['annee'].'</td>';echo '<td class="text-center">'.$value['nomkhlasse'].'</td>';echo '<td class="text-center"> <a class="btn btn-outline-light " href=#>'.$value[3].'</a>';echo '</tr>';}?></tr>
						</tbody>
					</table>
				</div>
			</div>
		</main>

		<footer class="footer">
			<div class="container">
				<a href ng-click="tab = " class="btn-dark btn-lg" role="button">Modifier mes infos</a>
			</div>
		</footer>
</body>

