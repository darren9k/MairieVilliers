<?php
require_once("Controller/dbsettings.php");
require_once("Controller/Controller.php");

$controler = new Controller($server, $db, $user, $mdp); 
$test_co = 0; 
 
if(isset($_POST['connexion'])){
	$email = $_POST['email']; 
	$mdp = $_POST['mdp']; 


	if($controler->connection2($email,$mdp)){
		$test_co = 1; 
	}
	else {
		$test_co = 2; 
	}
		 
}

?>


