<?php
	$GLOBALS['var1'] = 1;
	try {
		require_once("controller_accueil.php");
	}
	catch (Exception $e){
		var_dump($e->getMessage());
	}
?>