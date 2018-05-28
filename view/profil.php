
	<body>
        <?php var_dump($profil); ?>
        <main role="main" class="container">
            <h1 id="hautdepage" class="text-center"><u> Mon profil </u></h1>
            <a href="/view/pageprincipale/Infoperso.php" class="btn-dark btn-lg" role="button">Modifier mes infos</a>
            <div class="album py-5 bg-light">
                <div class="card text-white bg-dark mb-3">
                    <div class="card-header">
                        Mes informations générales                        
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">
                             <?php echo $profil["nom"]; echo $profil['prenom'];?>                      
                        </h5>
                        <p class="card-text">
                            <br>
                            Promo :                                
                            <br>
                            Khlâsse 1ère année :                                
                            <br>
                            Khlâsse 2ème année :                            
                        </p>
                    </div>
                </div>
                <div class="card text-white bg-dark mb-3">
                    <div class="card-header">
                                                    Ma carrière                        
                    </div>
                    <div class="card-body">
                        <p class="card-text">
                            Etude postFaidherbe :                          
                            <br>
                            Domaine d'activité :                                
                            <br>
                            Zone d'activité :                            
                        </p>
                    </div>
                </div>
                <div class="card text-white bg-dark mb-3">
                    <div class="card-header">
                        Me contacter                        
                    </div>
                    <div class="card-body">
                        <p class="card-text">
                                Adresse Mail : <?php echo $profil['email']; ?>                        
                            <br>
                            Numéro Portable :  <?php echo $profil['num_portable']; ?>                           
                            <br>
                            Facebook : <?php echo $profil['facebook']; ?>                               
                            <br>
                            Linkedin : <?php echo $profil['linkedin']; ?>                        
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
    </body>

