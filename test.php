<?php

require('controller/khlasse_controller');
$new = new khlasseController();
$data = $new -> getAllKhlasse();
$annee = $data[0] -> getAnnee();

require('view/pageprincipale/accueil.php');

?>
