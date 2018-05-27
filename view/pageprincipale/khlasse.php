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
                            require('../../controller/controller_khlasse.php');

                            $controller = new khlasseController();
                            print_r($controller);

                            $data = $controller->getAllKhlasse();
                            
                            foreach ($data as $value) {
                                echo '<td>'.$value['annee'].'</td>';
                                echo '<td>'.$value['id_khlasse'].'</td>';
                                echo '<td> <a class="btn btn-outline-light" href=#>Chiffre</a>';
                                echo '</tr>';
                            }
                            ?>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </main>
    </body>
</html>