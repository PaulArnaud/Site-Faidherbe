<?php
require('controller/khlasse_controller');
$new = new khlasseController();
$data = $new -> getAllKhlasse();
$annee = $data -> getAnnee();

require('view/pageprincipale/accueil.php');

?>
