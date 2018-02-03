<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="">
		<meta name="author" content="">
		<title>Page de connexion</title>
		<!-- Bootstrap core CSS -->
		<link href="Communs/css/bootstrap.min.css" rel="stylesheet">
		<!-- Custom styles for this template -->
		<link href="Communs/css/Connection.css" rel="stylesheet">
        <link rel="icon" href="ressource/logo faidherbe.jpg">
        <link href="Communs/css/formulaire.css" rel="stylesheet">
        <title> Page Inscription </title>
    </head>

    <body class="text-center" > 
        <form "form-signin" >
            <img class="mb-4" src="ressource/logo faidherbe.jpg" alt="" width="150" height="150"> 
            <div class="form-group">
                <label for="Nom"></label>
                <input type="nom" class="form-control-lg" id="inputnom" placeholder="Votre nom" required >
            </div>
            <div class="form-group">
                <label for="Prenom"></label>
                <input type="prenom" class="form-control-lg" id="inputprenom" placeholder="Votre prénom" required >
            </div>
            <div class="form-group">
                <label for="Email1"></label>
                <input type="email" class="form-control-lg" id="inputemail" placeholder="Votre mail" required>
            </div>
            <div class="form-group">
                <label for="Motivation"></label>
                <textarea class="form-control-lg" id="zonetexte" rows="5" placeholder ="Expliquez nous vos motivations en quelques mots" required ></textarea>
            </div>
            </div>
            <button type="submit" class="btn btn-primary">Envoyer</button>
        </form>
        <?php require('Communs/scriptjava.php') ?>
    </body>
</html>
