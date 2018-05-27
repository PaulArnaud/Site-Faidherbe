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
                            <div>
		
		<?php 
		//print_r($_SERVER);
		require('../../config/connect.php');
		try
		{
		// On se connecte à MySQL
		$bdd = myPDO();
		}
		catch(Exception $e)
		{
		// En cas d'erreur, on affiche un message et on arrête tout
			die('Erreur : '.$e->getMessage());
		}

		// Si tout va bien, on peut continuer

		// On récupère tout le contenu de la table jeux_video
		$reponse = $bdd->query('SELECT nomkhlasse,annee from khlasse K,typekhlasse T where T.id_typekhlasse = K.id_type');

		// On affiche chaque entrée une à une
		while ($donnees = $reponse->fetch())
		{
		?>
			<p>
			<strong>Annee</strong> : <?php echo $donnees['annee']; ?><br />
			
			
			<?php echo $donnees['nomkhlasse']; ?> nom de la khalsse </p>
		<?php
		}

		$reponse->closeCursor(); 
		?>
		</div>-->
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </main>
    </body>
</html>