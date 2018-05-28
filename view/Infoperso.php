<body class="text-center container">
    <main>
        <h3> Modification des informations personnelles </h3>
        <h5> Général </h5>
        <h6> <u> Nom </u></h6>
        <div class="input-group">
            <input type="text" class="form-control" placeholder="<? echo $profil['nom'];?> ">
            <div class="input-group-append">
                <button class="btn btn-outline-secondary" type="button">Enregistrer</button>
            </div>
        </div>
        <h6> <u> Prénom </u></h6>
        <div class="input-group">
            <input type="text" class="form-control" placeholder="<? echo $profil['prenom'];?> ">
            <div class="input-group-append">
                <button class="btn btn-outline-secondary" type="button">Enregistrer</button>
            </div>
        </div>
        <h6> <u> Adresse Mail </u></h6>
        <div class="input-group">
            <input type="text" class="form-control" placeholder="<?php echo $profil['email']; ?> ">
            <div class="input-group-append">
                <button class="btn btn-outline-secondary" type="button">Enregistrer</button>
            </div>
        </div>
        <h6> <u> Téléphone Portable </u></h6>
        <div class="input-group">
            <input type="text" class="form-control" placeholder="<?php echo $profil['num_portable']; ?> ">
            <div class="input-group-append">
                <button class="btn btn-outline-secondary" type="button">Enregistrer</button>
            </div>
        </div>
        <h6> <u> Facebook </u></h6>
        <div class="input-group">
            <input type="text" class="form-control" placeholder="<?php echo $profil['facebook']; ?> ">
            <div class="input-group-append">
                <button class="btn btn-outline-secondary" type="button">Enregistrer</button>
            </div>
        </div>
        <h6> <u> Linkedin </u></h6>
        <div class="input-group">
            <input type="text" class="form-control" placeholder="<?php echo $profil['linkedin']; ?>">
            <div class="input-group-append">
                <button class="btn btn-outline-secondary" type="button">Enregistrer</button>
            </div>
        </div>
        <h5> Faidherbe </h5>
            <h6> <u> 1ère Année </u></h6>
            <div class="input-group mb-3"> 
                <select class="custom-select" id="inputGroupSelect01">
                    <option selected>Séléctionner la khlâsse </option>

                </select>
                <div class="input-group-append">
                    <button class="btn btn-outline-secondary" type="button">Enregistrer</button>
                </div>
            </div>
            <h6> <u> 2ème Année </u></h6>
            <div class="input-group mb-3"> 
                <select class="custom-select" id="inputGroupSelect01">
                    <option selected>Séléctionner la khlâsse </option>
                </select>
                <div class="input-group-append">
                    <button class="btn btn-outline-secondary" type="button">Enregistrer</button>
                </div>
            </div>
        <h5> Post Faidherbe </h5>
            <h6> <u> Ecole/Etude </u></h6>
            <div class="input-group">
                <input type="text" class="form-control" placeholder="<?php echo 'polytechnique' ?>">
                <div class="input-group-append">
                    <button class="btn btn-outline-secondary" type="button">Enregistrer</button>
                    <button class="btn btn-outline-secondary" type="button" data-toggle="modal" data-target="#myModal" ><span class="glyphicon glyphicon-plus"></button>
                </div>
            </div>

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