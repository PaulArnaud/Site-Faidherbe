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
							<?php foreach ($listkhlasse as $value) {echo '<tr id="'.$value['id_khlasse'].'">';echo '<td class="text-center">'.$value['annee'].'</td>';echo '<td class="text-center">'.$value['nomkhlasse'].'</td>';echo '<td class="text-center"> <input type="hidden" name ="idkhlasse" value="'.$value['id_khlasse'].'"> <button action="controller_page_camarades.php" method="post" class="btn btn-outline-light " type="submit" href ng-click="tab=11">'.$value[3].'</button>';echo '</tr>';}?></tr>
						</tbody>
					</table>
				</div>
			</div>
		</main>

		<footer class="footer">
			<div class="container">
				<a href ng-click="tab = 10 " class="btn-dark btn-lg" role="button"> Ajouter une khlasse </a>
			</div>
		</footer>
</body>



