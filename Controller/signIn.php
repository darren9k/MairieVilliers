<?php
require_once("Controller/dbsettings.php"); 
require_once("Controller/Controller.php");

$controler = new Controller($server, $db, $user, $mdp); 


if(isset($_POST['inscription'])){
    $nom = $_POST['nom']; 
    $prenom = $_POST['prenom']; 
    $adresse = $_POST['adresse']; 
    $tel = $_POST['tel']; 
    $ville = $_POST['ville']; 
    $email = $_POST['email']; 
    $mdp = $_POST['mdp']; 
    $revenuImposable = $_POST['revenu']; 
    $nombreEnfant = $_POST['enfant'];  
    $sexe = $_POST['sexe'];
    $dateInscription = date('Y-m-d');
     
    $controler->signIn($nom, $prenom, $adresse, $tel, $ville, $email, $mdp, $nombreEnfant, $revenuImposable,  $dateInscription, $sexe); 

  

}


?>