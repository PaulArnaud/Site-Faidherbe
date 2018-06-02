<!doctype html>
<html lang="fr" ng-app="">
	<head>
		<title>Accueil FaidherbeEnPoche </title>
		<link rel="stylesheet" href="lib/bootstrap.min.css">
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<script src="lib/angular.min.js"></script>
	</head>
	<body ng-init="tab = 1">

		<?php 
			require_once("Models/Annee.php");
			require_once("Models/TypeKhlasse.php");
			require_once("Models/Users.php");
			require_once("Models/Khlasse.php");
			require_once("Models/Ecole.php");
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
					<?php } ?>
					<?php if(isAdmin()){ ?>
					<li class="nav-item">
						<a class="nav-link"  href ng-click ="tab = 20"><i class="material-icons">security</i></a>
					</li>
					<?php } ?>
					<?php if(!isLogged()){ ?>
					<li class="nav-item ">
						<a class="nav-link"  href ng-click="tab=21" ><i class="material-icons">power_settings_new</i></a>
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

		<div ng-show="tab=== 21" class="align-items-center">
			<?php
				require_once("view/connexion.php"); 
			?>
		</div>
		
		<div ng-show="tab === 1" class="align-items-center">
			<?php require('view/presentation.php') ?>
		</div>


		<div ng-show="tab === 2" class="align-items-center">
			<?php
				$listkhlasse = Khlasse::Get_All_Khlasse();
				require_once("view/khlasse.php");
			?>
		</div>
		<div ng-show="tab === 3" class="align-items-center">
			<?php 
				$profil = Users::Get_Info();
				$khlasse = Users::Get_Mykhlasse();
				$ecole = Users::Get_MySchool();
				require_once("view/profil.php");
			?>
		</div>


		<div ng-show="tab === 4" class="align-items-center">
			<?php require('view/forum.php') ?>
		</div>
		<div ng-show="tab === 6" class="align-items-center">
			<?php require('view/fonction.php') ?>
		</div>
		<div ng-show="tab === 7" class="align-items-center">
			<?php require('view/chants.php') ?>
		</div>
		<div ng-show="tab === 8" class="align-items-center">
			<?php require('view/chapeau.php') ?>
		</div>

		<div ng-show="tab === 9" class="align-items-center">
			<?php 
				$profil = Users::Get_Info();
				$khlasses = Khlasse::Get_All_Khlasse();
				$ecoles = Ecole::Get_All_Ecole();
				require_once("view/Infoperso.php"); 
			?>
		</div>
		<div ng-show="tab === 10" class="align-items-center">
			<?php 
				$types = TypeKhlasse::Get_Types();
				$years = Annee::Get_Years();
				require_once("view/createkhlasse.php");
			?>
		</div>
		<div ng-show="tab === 13" class="align-items-center">
			<?php
				require_once("view/createecole.php");
			?>
		</div>
		
		<div ng-show="tab === 20" class="align-items-center">
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