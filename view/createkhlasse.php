
<form class = "container card vertical-align align-items-center" action="Controller/controller_newkhlasse.php" method="post" >
                <div class="form-group col-md-4">
        <div class="col">
        <label for="inputState">Créer une khlasse</label>
        <select id="inputState" class="form-control" name="type">
                <option selected>Choisis un type de khlasse </option>
                <?php foreach ($types as $value){echo '<option>'.$value['nomkhlasse'].'</option>';} ?></select>
        </div>
        <div class="col">
        <select id="inputState" class="form-control" name="annee">
                <option selected>Choisis une année </option>
                <?php foreach ($years as $value){echo '<option>'.$value['année'].'</option>';} ?></select>
        </div>
        <button class="btn btn-lg btn-danger" type="submit"> Enregistrer </button>
</div>
</form>
