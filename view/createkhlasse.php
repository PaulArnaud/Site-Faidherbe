<body>
	<main class="container">
		<form action="controller_newkhlasse.php" method="post" >
			<div class="row container">
				<div class="form-group col-md-4">
                    <div>
                    <label for="inputState">Type de Khlasse</label>
                    <select id="inputState" class="form-control" name="type">
                        <option selected>Choose...</option>
                        <?php foreach ($types as $value){echo '<option>'.$value['nomkhlasse'].'</option>';} ?></select>
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" name="annee">
                    </div>
                    <button class="btn btn-lg btn-dark" type="submit"> Enregistrer </button>
                </div>
			</div>
		</form>
	</main>
</body>