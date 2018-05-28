<body>
<main>
<form action="controller_newkhlasse.php" method="post" >
    <div class="row">
        <div class="form-group col-md-4">
        <label for="inputState">State</label>
        <select id="inputState" class="form-control" name="type">
        <option selected>Choose...</option>
        <?php foreach ($types as $value){echo '<option>'.$value['nomkhlasse]'.'</option>';} ?>
        </select>
        </div>
        <div class="col">
        <input type="text" class="form-control" name="annee">
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit"> Enregistrer </button>
    </div>
</form>
</main>
</body>