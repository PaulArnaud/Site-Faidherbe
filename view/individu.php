<!doctype html>
<html lang="fr" ng-app="">
	<head>
		<title> Le camarade </title>
		<link rel="stylesheet" href="../lib/bootstrap.min.css">
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<script src="../lib/angular.min.js"></script>
	</head>

<body>
    <main role="main" class="container">
        <h1 id="hautdepage" class="text-center"><u> Son profil </u></h1>
        <div class="album py-5 bg-light container">
            <div class="card text-white bg-dark mb-3">
                <div class="card-header">
                    Ses informations générales                        
                </div>
                <div class="card-body">
                    <h5 class="card-title">
                        Prenom : <? echo $infouser['prenom'];?>    
                        <br>
                        Nom : <?php echo $infouser["nom"];?>                    
                    </h5>
                    <p class="card-text">
                        <br>
                        Khlâsse 1ère année :   <?php echo $khlasseuser[0]['nomkhlasse'] ?>                          
                        <br>
                        Khlâsse 2ème année :   <?php echo $khlasseuser[1]['nomkhlasse'] ?>                             
                    </p>
                </div>
            </div>
            <div class="card text-white bg-dark mb-3">
                <div class="card-header">
                    Ma carrière                        
                </div>
                <div class="card-body">
                    <p class="card-text">
                        Etude postFaidherbe : <?php echo $ecoleuser['nomecole'] ?>                          
                        <br>
                        Domaine d'activité :  <?php echo $ecoleuser['domaine'] ?>                        
                    </p>
                </div>
            </div>
            <div class="card text-white bg-dark mb-3">
                <div class="card-header">
                    Me contacter                        
                </div>
                <div class="card-body">
                    <p class="card-text">
                        Adresse Mail : <?php echo $infouser['email']; ?>                        
                        <br>
                        Numéro Portable :  <?php echo $infouser['num_portable']; ?>                           
                        <br>
                        <a href ="<?php echo $infouser['facebook']; ?> "> Facebook </a>                             
                        <br>
                        <a href=" <?php echo $infouser['linkedin']; ?> ">  Linkedin </a>                       
                    </p>
                </div>
            </div>
            <!--<div class="col-md-4">
                <div class="card mb-4 box-shadow">
                    <img class="card-img-top" src="../ressource/27140089_10211185943229175_211050063_o.jpg" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text">
                                                            Mon khâlot                             
                        </p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>-->
        </div>
    </main>
    <div class="container">
		<a href="../accueil.php" class="btn-danger btn-lg" role="button"> Retour à l'accueil </a>
	</div>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	</body>
</html>
