<body>
	<main role="main" class="container text-center">
		<div class="starter-template">
			
			<h1> Site du Faidherbard </h1>
			<h2> Tableau des camarades de la Khlasse :<?php echo $khlasse['nomkhlasse'];?> de l'année : <?php echo $khlasse['annee'];?>  </h2>
			<?php 
			$new=substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 20);
			$cookiegood = setcookie("cookiecamarades", $new, time()+(60*60*24*30), "/");
			var_dump($cookiegood);
			var_dump($_COOKIE["cookiecamarades"]); 
			?>
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
                        <?php foreach ($camarades as $value) {echo '<tr id="'.$value['id_user'].'">';echo '<td class="text-center">'.$value['nom'].'</td>';echo '<td class="text-center">'.$value['prenom'].'</td>';echo '<td class="text-center"> <a class="btn btn-outline-light " href ng-click="tab=11"></a>';echo '</tr>';}?></tr>
						</tbody>
					</table>
				</div>
			</div>
		</main>
</body>