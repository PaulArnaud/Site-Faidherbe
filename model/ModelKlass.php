<?php
require_once('../Configuration/Connexion.php');
class Klass {
   
    private $ID_Klass;
    private $NomKlass;
    private $AnneeKlass;

        
    // un getter      
    public function getID() {
        return $this->ID_Klass;  
    }
        
    // un setter 
    public function setID($ID) {
        $this->ID_Klass = $ID;
    }
        
    public function __construct($m = NULL, $c = NULL, $i = NULL) {
        if (!is_null($m) && !is_null($c) && !is_null($i)) {
          // Si aucun de $m, $c et $i sont nuls,
          // c'est forcement qu'on les a fournis
          // donc on retombe sur le constructeur à 3 arguments
          $this->ID_Klass = $m;
          $this->NomKlass = $c;
          $this->AnneeKlass = $i;
        }
      }

    // un getter      
    public function getNomKlass() {
        return $this->NomKlass;  
    }
    // un setter 
    public function setNomKlass($Nom) {
        $this->NomKlass = $Nom;
    }
       // un getter      
    public function getAnneeKlass() {
        return $this->AnneeKlass;  
    }
        
    // un setter 
    public function setAnneeKlass($Annee) {
        $this->AnneeKlass = $Annee;
        
    }
}
?>