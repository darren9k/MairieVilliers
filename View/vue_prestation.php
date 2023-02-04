<?php

require_once("C:/xampp/htdocs/MairieVilliers/Controller/dbsettings.php"); 
require_once("C:/xampp/htdocs/MairieVilliers/Controller/Controller.php");

$controler = new Controller($server, $db, $user, $mdp); 

$rows = $controler->selectPrestation(); //retourne un fetch
$countPresta = $controler->countPrestation(); //Retourne le nombre de prestation de la table presta 
//echo $rows['libellepresta'];

//Lorsqu'on utilise un fetchAll il faut passer par une boucle 
//Foreach pour afficher toutes les données de la colonne. 

/*foreach($rows as $row){
    //echo "{$row['libellepresta']}"."<br/>"; 
    echo $row['libellepresta'];
}*/

?>

<?php //foreach($rows as $row): ?>
	<!--<div class="container-fluid" style = "background-color: white;">
	<h1><?php //echo $row['libellepresta'];?></h1>
	</div>-->
<?php //endforeach; ?> 