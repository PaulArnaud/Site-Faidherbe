<body class="text-center container">
	<main>
		<h3> Modification des informations personnelles </h3>
		<h5>
			 Général 
		</h5>
		<h6>
			<u>
				 Nom 
			</u>
		</h6>
		<form class="form-signin container" action="Controller/controller_modifinfo.php" method="post">
			<div class="input-group">
				<input required type="text" name="nom" class="form-control" placeholder="<? echo $profil['nom'];?> ">
			</div>
			<h6>
				<u>
					 Prénom 
				</u>
			</h6>
			<div class="input-group">
				<input required type="text"  name ="prenom" class="form-control" placeholder="<? echo $profil['prenom'];?> ">
			</div>
			<h6>
				<u>
					 Téléphone Portable 
				</u>
			</h6>
			<div class="input-group">
				<input type="text" name="portable" class="form-control" placeholder="<?php echo $profil['num_portable']; ?> ">
			</div>
			<h6>
				<u>
					 Facebook 
				</u>
			</h6>
			<div class="input-group">
				<input required type="text" name ="facebook" class="form-control" placeholder="<?php echo $profil['facebook']; ?> ">
			</div>
			<h6>
				<u>
					 Linkedin 
				</u>
			</h6>
			<div class="input-group">
				<input required type="text" name ="linkedin" class="form-control" placeholder="<?php echo $profil['linkedin']; ?>">
			</div>
			<h5>
				 Faidherbe 
			</h5>
			<h6>
				<u>
					 1ère Année 
				</u>
			</h6>
			<div class="input-group mb-3">
				<select required class="custom-select" id="inputGroupSelect01" name="khlasse1">
					<option selected>Séléctionner la khlâsse </option>
                    <?php foreach ($khlasses as $value){echo '<option>'.$value['id_khlasse'].'---'.$value['nomkhlasse'].'---'.$value['annee'].'</option>';} ?></select>
				</select>
			</div>
			<h6>
				<u>
					 2ème Année 
				</u>
			</h6>
			<div class="input-group mb-3">
				<select required class="custom-select" id="inputGroupSelect01" name="khlasse2" >
					<option selected>Séléctionner la khlâsse </option>
                    <?php foreach ($khlasses as $value){echo '<option>'.$value['id_khlasse'].'---'.$value['nomkhlasse'].'---'.$value['annee'].'</option>';} ?></select>
				</select>
			</div>
			<h5>
				 Post Faidherbe 
			</h5>
			<h6>
				<u>
					 Ecole/Etude 
				</u>
			</h6>
			<div class="input-group">
				<select required class="custom-select" id="inputGroupSelect01" name="ecole" >
					<option selected>Séléctionner l'école </option>
                    <?php foreach ($ecoles as $value){echo '<option>'.$value['id_ecole'].'---'.$value['nomecole'].'---'.$value['domaine'].'</option>';} ?></select>
				</select>
			</div>
			<div class="input-group-append">
				<button class="btn btn-outline-danger" type="submit">Enregistrer</button>
			</div>
		</form>

        <!--<div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Creer une école </h4>
                    </div>
                    <div class="modal-body">
                        <h6> Nom de l'école </h6>
                        <input type="text" class="form-control" placeholder=>
                    </div>
                    <div class="modal-body">
                        <h6> Domaine de l'école </h6>
                        <input type="text" class="form-control" placeholder=>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>

            </div>
        </div>
        -->
        <!--<h5> Fichiers </h5>
        <form>
            <div class="form-group">
                <label for="exampleFormControlFile1">Example</label>
                <input type="file" class="form-control-file" id="exampleFormControlFile1">
            </div>
            <div class="form-group">
                <label for="exampleFormControlFile1">Example</label>
                <input type="file" class="form-control-file" id="exampleFormControlFile1">
            </div>
            <div class="form-group">
                <label for="exampleFormControlFile1">Example</label>
                <input type="file" class="form-control-file" id="exampleFormControlFile1">
            </div>
            <div class="form-group">
                <label for="exampleFormControlFile1">Example</label>
                <input type="file" class="form-control-file" id="exampleFormControlFile1">
            </div>
            <div class="form-group">
                <label for="exampleFormControlFile1">Example</label>
                <input type="file" class="form-control-file" id="exampleFormControlFile1">
            </div>
        </form>
        -->
    </main>
</body>