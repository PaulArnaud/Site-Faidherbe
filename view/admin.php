
<section>

<form class="form-signin container card" action="Controller/controller_admin.php" method="post">
	<div class="container">
		<div class="input-group mb-3">
			<select class="custom-select"  name="user" >
				<option selected>Séléctionner l'utilisateur </option>
				<?php foreach ($users as $value){echo '<option>'.$value['id_user'].'---'.$value['nom'].'---'.$value['prenom'].'</option>';} ?></select>
			</select>
		</div>
	</div>
	<div class="container">
		<div class="input-group mb-3">
			<select class="custom-select" name="ecole" >
				<option selected>Séléctionner une école </option>
				<?php foreach ($ecoles as $value){echo '<option>'.$value['id_ecole'].'---'.$value['nomecole'].'---'.$value['domaine'].'</option>';} ?></select>
			</select>
		</div>
	</div>
	<div class="container">
		<div class="input-group mb-3">
			<select class="custom-select" name="khlasse" >
				<option selected>Séléctionner la khlâsse </option>
				<?php foreach ($khlasses as $value){echo '<option>'.$value['id_khlasse'].'---'.$value['nomkhlasse'].'---'.$value['annee'].'</option>';} ?></select>
			</select>
		</div>
	</div>
	<div class="input-group-append">
		<button class="btn btn-outline-secondary" type="submit">Supprimer</button>
	</div>
</form>

</section>