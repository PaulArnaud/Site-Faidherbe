<?php
	try {
		require_once("controller_accueil.php");
	}
	catch (Exception $e){
		var_dump($e->getMessage());
	}
?>