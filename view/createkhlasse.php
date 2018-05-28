<body>
	<main class="card text-center">
		<form action="controller_newkhlasse.php" method="post" >
			<div class="row card-body text-center">
				<div class="form-group col-md-4 center-block">
                    <div class="col">
                    <label for="inputState">Créer une khlasse</label>
                    <select id="inputState" class="form-control" name="type">
                        <option selected>Choose...</option>
                        <?php foreach ($types as $value){echo '<option>'.$value['nomkhlasse'].'</option>';} ?></select>
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" name="annee" placeholder="Année : ex 2015">
                    </div>
                    <button class="btn btn-lg btn-dark" type="submit"> Enregistrer </button>
                </div>
			</div>
		</form>
	</main>
</body>