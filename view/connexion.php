<body class="text-center">
	<link href="css/signin.css" rel="stylesheet">
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
		<a class="btn btn-lg btn-block" type="submit" href="inscription.php"> S'inscrire </a>
		<p class="mt-5 mb-3 text-muted">
			&copy; Faidherbard
		</p>
	</form>
</body>