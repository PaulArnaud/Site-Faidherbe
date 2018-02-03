<!doctype html>
<html lang="en">
	<head>
		<?php require('../Communs/header.php') ?>
		<title>Page Mon Profil </title>
    </head>
    

    <body class="text-center">
        <?php require('../Communs/navbar.php') ?>
        <main>
            <h3> Modification des informations personnelles </h3>
            <h5> Général </h5>
            <h6> <u> Nom </u></h6>
            <div class="input-group">
                <input type="text" class="form-control" placeholder="<?php echo 'Paul' ?>">
                <div class="input-group-append">
                    <button class="btn btn-outline-secondary" type="button">Enregistrer</button>
                </div>
            </div>
            <h6> <u> Prénom </u></h6>
            <div class="input-group">
                <input type="text" class="form-control" placeholder="<?php echo 'Arnaud' ?>">
                <div class="input-group-append">
                    <button class="btn btn-outline-secondary" type="button">Enregistrer</button>
                </div>
            </div>
            <h6> <u> Adresse Mail </u></h6>
            <div class="input-group">
                <input type="text" class="form-control" placeholder="<?php echo 'paularnaud@mail.fr' ?>">
                <div class="input-group-append">
                    <button class="btn btn-outline-secondary" type="button">Enregistrer</button>
                </div>
            </div>
            <h6> <u> Téléphone Portable </u></h6>
            <div class="input-group">
                <input type="text" class="form-control" placeholder="<?php echo '01.02.03.04.05' ?>">
                <div class="input-group-append">
                    <button class="btn btn-outline-secondary" type="button">Enregistrer</button>
                </div>
            </div>
            <h6> <u> Téléphone Fixe </u></h6>
            <div class="input-group">
                <input type="text" class="form-control" placeholder="<?php echo '01.02.03.04.05' ?>">
                <div class="input-group-append">
                    <button class="btn btn-outline-secondary" type="button">Enregistrer</button>
                </div>
            </div>
            <h6> <u> Ville </u></h6>
            <div class="input-group">
                <input type="text" class="form-control" placeholder="<?php echo 'Lille' ?>">
                <div class="input-group-append">
                    <button class="btn btn-outline-secondary" type="button">Enregistrer</button>
                </div>
            </div>
            <h6> <u> Facebook </u></h6>
            <div class="input-group">
                <input type="text" class="form-control" placeholder="<?php echo 'https://www.facebook.com/paul.arnaud.71' ?>">
                <div class="input-group-append">
                    <button class="btn btn-outline-secondary" type="button">Enregistrer</button>
                </div>
            </div>
            <h6> <u> Linkedin </u></h6>
            <div class="input-group">
                <input type="text" class="form-control" placeholder="<?php echo 'https://fr.linkedin.com/' ?>">
                <div class="input-group-append">
                    <button class="btn btn-outline-secondary" type="button">Enregistrer</button>
                </div>
            </div>
            <h5> Faidherbe </h5>
                <h6> <u> 1ère Année </u></h6>
                <div class="input-group mb-3"> 
                    <select class="custom-select" id="inputGroupSelect01">
                        <option selected>Séléctionner la khlâsse </option>
                        <option value="1">HX1</option>
                        <option value="2">HX2</option>
                        <option value="3">HX3</option>
                        <option value="4">HX4</option>
                        <option value="5">HX5</option>
                        <option value="6">HK1</option>
                        <option value="7">HK2</option>
                        <option value="8">HK3</option>
                        <option value="9">HKBL</option>
                        <option value="10">HEC</option>
                        <option value="11">BCPST</option>

                    </select>
                    <div class="input-group-append">
                        <button class="btn btn-outline-secondary" type="button">Enregistrer</button>
                    </div>
                </div>
                <h6> <u> 2ème Année </u></h6>
                <div class="input-group mb-3"> 
                    <select class="custom-select" id="inputGroupSelect01">
                        <option selected>Séléctionner la khlâsse </option>
                        <option value="1">MP1</option>
                        <option value="2">MP2</option>
                        <option value="3">MP3</option>
                        <option value="4">PC1</option>
                        <option value="5">PC2</option>
                        <option value="6">KHLyonA</option>
                        <option value="7">KHLyonB</option>
                        <option value="8">KH-ChUlm</option>
                        <option value="9">KH-BL</option>
                        <option value="10">HEC</option>
                        <option value="11">BCPSTA</option>
                        <option value="12">BCPSTB</option>
                        <option value="13">AL</option>
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
                    </div>
                </div>
            <h5> Fichiers </h5>
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
        </main>
		<?php require('../Communs/scriptjava.php') ?>
	</body>
</html>