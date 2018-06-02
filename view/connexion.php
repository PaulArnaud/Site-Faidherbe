<body class="text-center">
	<!-- 
	<link href="css/signin.css" rel="stylesheet">
	-->
	<form class="form-signin container" action="Controller/controller_connexion.php" method="post">
		<img class="mb-4" src="/img/logo faidherbe.jpg" alt="" width="150" height="150">
		<h1 class="h3 mb-3 font-weight-normal"> Bienvenue </h1>
		<label for="inputEmail" class="sr-only"> Mail </label>
		<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
		<input type="email" id="inputEmail" name="Email" class="form-control" placeholder=" Mail" required autofocus>
		<label for="inputPassword" class="sr-only"> Mot de Passe </label>
		<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
		<input type="password" id="inputPassword" name ="password" class="form-control" placeholder="Mot de Passe" required>
		<button class="btn btn-lg btn-primary btn-block" type="submit"> Se connecter </button>
		<div class="container">
			<button type="button" class="btn btn-lg btn-block" data-toggle="modal" data-target="#myModal">Open Modal</button>
			<!-- Modal -->
			<div class="modal fade" id="myModal" role="dialog">
				<div class="modal-dialog">
					<!-- Modal content-->
					<div class="modal-content">
						<div class="modal-header">
							<h4 class="modal-title">Inscription</h4>
							<button type="button" class="close" data-dismiss="modal">&times;</button>
						</div>
						<div class="modal-body">
							<p>
								Pour vous inscrire, rien de plus simple, envoyez un mail à 
								<strong>
									<u>
										<a href="mailto:paularnaud59390@gmail.com"> faidherbeenpoche@gmail.com  </a>
									</u>
								</strong>
								.Ecrivez un petit message sympathique, en expliquant les raisons qui vous poussent à venir dans ce petit coin de nostalgie.Soyez gentils et prouvez nous que vous avez bien été à Faidherbe !
							</p>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
						</div>
					</div>
				</div>
			</div>
		</div>
		<p class="mt-5 mb-3 text-muted">
			            &copy; Faidherbard        
		</p>
	</form>
</body>