<?php
	try {
		require_once('/controller/controller_accueil.php');
	}
	catch (Exception $e){
		var_dump($e->getMessage());
	}
?>