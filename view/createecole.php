<body>
	<main class="card text-center">
		<form action="controller_newecole.php" method="post" >
				<div class="form-group col-md-4">
                    <div class="col">
                    <label for="inputState">Créer une école </label>
                        <div class="input-group">
                            <input required type="text" name="nomecole" class="form-control" placeholder="Nom de l'école">
                        </div>
                    </div>
                    <div class="col">
                        <div class="input-group">
                            <input required type="text" name="domaine" class="form-control" placeholder="Domaine d'études ">
                        </div>
                    </div>
                    <button class="btn btn-lg btn-dark" type="submit"> Enregistrer </button>
                </div>
		</form>
	</main>
</body>