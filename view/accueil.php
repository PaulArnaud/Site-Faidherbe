<!doctype html>
<html lang="fr" ng-app="">
	<head>
		<title>Accueil FaidherbeEnPoche </title>
		<link rel="stylesheet" href="lib/bootstrap.min.css">
		<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<script src="lib/angular.min.js"></script>
	</head>
	<body ng-init="tab = 1">

		<?php 
			require("Annee.php");
			require("TypeKhlasse.php");
			require_once("Users.php");
			require_once("Khlasse.php");
			require_once("Ecole.php");
			require_once("Controller/controller_etat_user.php");
		?>
		<nav class="navbar navbar-expand-md navbar-dark bg-dark sticky-top site-header" >
			<div class="collapse navbar-collapse" id="navbarsExampleDefault" >
				<ul class="navbar-nav mr-auto">
					<li class="nav-item">
						<a class="nav-link" href ng-click ="tab = 1"><i class="material-icons">home</i></a>
					</li>
					<?php if(isLogged()){ ?>
					<li class="nav-item">
						<a class="nav-link" href ng-click ="tab = 2"><i class="material-icons">format_list_bulleted</i></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href ng-click ="tab = 3"><i class="material-icons">person</i></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href ng-click ="tab = 4"><i class="material-icons">chat</i></a>
					</li>
					<?php } ?>
					<?php if(isAdmin()){ ?>
					<li class="nav-item">
						<a class="nav-link"  href ng-click ="tab = 20"><i class="material-icons">security</i></a>
					</li>
					<?php } ?>
					<?php if(!isLogged()){ ?>
					<li class="nav-item">
						<a class="nav-link"  href="Controller/controller_page_connexion.php"><i class="material-icons">power_settings_new</i></a>
					</li>
					<?php } ?>
					<?php if(isLogged()){ ?>
					<li class="nav-item ">
						<a class="nav-link"  title="Déconnexion" href="Controller/controller_deconnexion.php"><i class="material-icons">exit_to_app</i></a>
					</li>
					<?php } ?>
				</ul>
			</div>
		</nav>

		
		<div ng-show="tab === 1">
			<?php require('view/presentation.php') ?>
		</div>


		<div ng-show="tab === 2">
			<?php
				$listkhlasse = Khlasse::Get_All_Khlasse();
				require_once("view/khlasse.php");
			?>
		</div>
		<div ng-show="tab === 3">
			<?php 
				$profil = Users::Get_Info();
				$khlasse = Users::Get_Mykhlasse();
				$ecole = Users::Get_MySchool();
				require_once("view/profil.php");
			?>
		</div>


		<div ng-show="tab === 4">
			<?php require('view/forum.php') ?>
		</div>
		<div ng-show="tab === 5">
			<?php require('view/gallerie.php') ?>
		</div>
		<div ng-show="tab === 6">
			<?php require('view/fonction.php') ?>
		</div>
		<div ng-show="tab === 7">
			<?php require('view/chants.php') ?>
		</div>
		<div ng-show="tab === 8">
			<?php require('view/chapeau.php') ?>
		</div>

		<div ng-show="tab === 9">
			<?php 
				$profil = Users::Get_Info();
				$khlasses = Khlasse::Get_All_Khlasse();
				$ecoles = Ecole::Get_All_Ecole();
				require_once("view/Infoperso.php"); 
			?>
		</div>
		<div ng-show="tab === 10">
			<?php 
				$types = TypeKhlasse::Get_Types();
				$years = Annee::Get_Years();
				require_once("view/createkhlasse.php");
			?>
		</div>
		<div ng-show="tab === 13">
			<?php
				require_once("view/createecole.php");
			?>
		</div>
		
		<div ng-show="tab === 11">
			<?php 
				if ($GLOBALS['camarades']){
				require_once('view/camarades.php');
				} 
			?>
		</div>

		<div ng-show="tab === 12">
			<?php 
				if ($GLOBALS['individu']){
					require_once('view/individu.php');
				} 
			?>
		</div>

		<div ng-show="tab === 20">
			<?php
			$users = Users::Get_All_Users();
			$ecoles = Ecole::Get_All_Ecole();
			$khlasses = Khlasse::Get_All_Khlasse();
			require_once('view/admin.php');
			?>
		</div>
		



		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	</body>
</html>