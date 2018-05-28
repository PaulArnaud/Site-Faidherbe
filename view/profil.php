
<body>
    <main role="main" class="container">
        <h1 id="hautdepage" class="text-center"><u> Mon profil </u></h1>
        <div class="album py-5 bg-light">
            <div class="card text-white bg-dark mb-3">
                <div class="card-header">
                    Mes informations générales                        
                </div>
                <div class="card-body">
                    <h5 class="card-title">
                        Prenom : <? echo $profil['prenom'];?>    
                        <br>
                        Nom : <?php echo $profil["nom"];?>                    
                    </h5>
                    <p class="card-text">
                        <br>
                        Khlâsse 1ère année :   <?php echo $khlasse[0]['nomkhlasse'] ?>                          
                        <br>
                        Khlâsse 2ème année :   <?php echo $khlasse[1]['nomkhlasse'] ?>                             
                    </p>
                </div>
            </div>
            <div class="card text-white bg-dark mb-3">
                <div class="card-header">
                    Ma carrière                        
                </div>
                <div class="card-body">
                    <p class="card-text">
                        Etude postFaidherbe : <?php echo $ecole['nomecole'] ?>                          
                        <br>
                        Domaine d'activité :  <?php echo $ecole['domaine'] ?>                        
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
    <footer class="footer">
      <div class="container">
        <a href ng-click="tab = 9" class="btn-dark btn-lg" role="button">Modifier mes infos</a>
      </div>
    </footer>
</body>

