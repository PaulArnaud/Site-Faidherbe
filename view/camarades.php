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
						<?php foreach ($var2 as $value) {echo '<tr id="'.$value['id_user'].'">';echo '<td class="text-center">'.$value['nom'].'</td>';echo '<td class="text-center">'.$value['prenom'].'</td>';echo '<td class="text-center"> <a class="btn btn-outline-light" ng-click="tab=0" href="controller_page_individu.php?iduser='.$value['id_user'].'">Voir Profil</a>';echo '</tr>';}?></tr>						</tbody>
					</table>
				</div>
			</div>
		</main>
</body>
<?php $GLOBALS['camarades'] = false; ?>