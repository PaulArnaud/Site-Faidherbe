<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
		<link rel="stylesheet" href="bootstrap.min.css">
        <script src="angular.min.js"></script>
        <link href="signin.css" rel="stylesheet">
        <title> Page Inscription </title>
    </head>

    <body class="text-center" > 
        <form "form-signin" >
            <img class="mb-4" src="logo faidherbe.jpg" alt="" width="150" height="150">
            
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
                <textarea class="form-control-lg" id="zonetexte"  placeholder ="Expliquez nous vos motivations en quelques mots" required ></textarea>
            </div>
            </div>
            <button type="submit" class="btn btn-primary">Envoyer</button>
        </form>

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>
