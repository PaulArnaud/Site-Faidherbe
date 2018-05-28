<body>
    <h1> <?php var_dump($types); ?> </h1>
	<main>
		<form action="controller_newkhlasse.php" method="post" >
			<div class="row">
				<div class="form-group col-md-4">
                    <div>
                    <label for="inputState">State</label>
                    <select id="inputState" class="form-control" name="type">
                        <option selected>Choose...</option>
                        <?php var_dump($types);/*foreach ($types as $value){echo '<option>'.$value['nomkhlasse]'.'</option>';} */?></select>
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