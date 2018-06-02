<body class="text-center">
	<!-- <link href="css/signin.css" rel="stylesheet">-->
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

<script type="text/javascript"> 
$(document).ready(function()
{ 

    $("#id-popup").modal("show");// affiche la popup au chargement de la page


}); 
</script>

	<div class="container"> 
    
    <!-- exemple de popup -->
    <p><button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#id-popup">Afficher la PopUp</button></p>
    

    <!-- construction de la popup 
          data-backdrop="false" pour supprimer le voile au-dessus de la popup
          data-keyboard="false" pour supprimer la touche Echap --> 
    <div class="modal fade" id="id-popup" tabindex="-1" role="dialog" aria-labelledby="titrePopUp" aria-hidden="true"> 
    
      <div class="modal-dialog"> 

        <div class="modal-content"> 
            
          <!-- le titre de la popup --> 
          <div class="modal-header"> 
          <h4 class="modal-title" id="titrePopUp">Bienvenue sur Développement Facile 
          <!-- lla croix de fermeture de la popup --> 
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button> </h4>
          </div> 
          
          <!-- le contenu HTML de la popup --> 
          <div class="modal-body"> 
          <p class="lead"><img src="19-logo.png" class="pull-right"/> Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. </p> 
          <p>Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500, quand un peintre anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte. Il n'a pas fait que survivre cinq siècles, mais s'est aussi adapté à la bureautique informatique, sans que son contenu n'en soit modifié. Il a été popularisé dans les années 1960 grâce à la vente de feuilles Letraset contenant des passages du Lorem Ipsum, et, plus récemment, par son inclusion dans des applications de mise en page de texte, comme Aldus PageMaker</p> 
          </div>
          
          <!-- le pied de page de la popup --> 
          <div class="modal-footer"> 
          <a href="http://www.developpement-facile.com" class="btn btn-primary pull-left">Developpement Facile</a> 
          </div> 

        </div> 

      </div> 

    </div>

</div> 

</body>