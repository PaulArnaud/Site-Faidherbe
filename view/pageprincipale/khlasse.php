<!doctype html>
<html lang="en">
	<body>
        <main role="main" class="container">
            <div class="starter-template">
                <h1> Site du Faidherbard </h1>
                <h2> Tableau des Khlâsses </h2>
                <div class="table-responsive">
                    <table class="table table-striped table-sm table-bordered table-dark table-hover">
                        <thead class="thead-dark">
                            <tr>
                                <th>
                                                                Année                        
                                </th>
                                <th>
                                                                Khlâsse                        
                                </th>
                                <th>
                                                                Nombre d'actifs                        
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            <?php
                            require('')
                            require('/controller/controller_khlasse.php');
                            $control = new khlasseController();/*
                            $data = $control -> getAllKhlasse();
                            for ($data : $value){
                                echo $value['annee'];
                                echo $value['id_khlasse'];
                            }*/
                            ?>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </main>
    </body>
</html>