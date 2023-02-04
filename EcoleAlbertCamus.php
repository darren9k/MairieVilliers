<?php  

require_once("structure/header.php"); 
require_once("Controller/dbsettings.php"); 
require_once("Controller/Controller.php"); 
require_once("structure/header.php"); 

//test commit

$controler = new Controller($server, $db, $user, $mdp); 
$dataUser = file_get_contents('stuff.txt');//On récupère dans le fichier l'email actuellement enregistrée 
$row = $controler->getUserData($dataUser);//On utilise l'email stockée dans le fichier pour localiser l'utilisateur dans la base de donnée. 
$idfamille = ""; //Variable qui va servir à stocker l'ID famille de la base grace à la récupération de l'email.

$prestation = "Ecole ecole elementaire Albert Camus"; 

foreach ($row as $rows) {
	$idfamille = $rows['idfamille'];//djbfqidbf
}

$inscrip_presta = $controler->is_registred($idfamille, $prestation); // 



?>
<!DOCTYPE html>
<html>
<head>
	<meta name ="viewport" content="width=device-with, initial-scale=1" charset="utf-8">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/feuille_style.css">
	<title>Ecole Albert Camus</title>
	<meta charset="utf-8">
</head>
<body>


<br><br>
<br>

<div class="container">
	<div class="col-md-7">
		<nav aria-label="breadcrumb">
  			<ol class="breadcrumb" style="background-color: white;">
    			<li class="breadcrumb-item"><a href="hompe.php" style="text-decoration: ">Accueil</a></li>
    			<li class="breadcrumb-item"><a href="index.php?page=3" style="text-decoration: none">Prestation</a></li>
    			<li class="breadcrumb-item active" aria-current="page">École élémentaire Albert Camus</li>
  				</ol>
		</nav>

		<h1>École élémentaire Albert Camus</h1>
		<img class="img-fluid" src="img/ecole-albert-camus.jpg">
		<div class="article-content"> <br>

		<p>Ecole primaire</p>
		<br>
		<div class="card card-body bg-light">
			2, Avenue Nelson Mandela, 94350 Villiers-sur-Marne.
			<br>
			Tél : 01 49 30 78 40.	
		</div>
		<br>
		<div>
			<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d656.673970003732!2d2.5406599!3d48.8258638!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e60dd923ea21e9%3A0xc083eaee84d3f86a!2sEcole%20Albert%20Camus!5e0!3m2!1sfr!2sfr!4v1643625641528!5m2!1sfr!2sfr" width="500" height="450"  frameBorder = "0" allowfullscreen=""></iframe> 
		</div>
		<br>
		<p>2, Avenue Nelson Mandela, 94350 Villiers-sur-Marne.</p>

		<br>



	<!-- si rowCount nombre de fois qu'on a la prestation ecole pour l'user == 0 afficher ça :  -->
		<div class="card card-body" style="background-color: #e1d2b8;">
			<h5>S'inscrire</h5>
			Cliquez sur ce bouton vous inscrire à la prestation.
			<?php if($inscrip_presta == 0):	?>		
				<form method="POST">
					<button type = "submit" name ="inscrire" class="btn" style="width:100%;">S'inscrire</button> 
				</form>
			<?php endif; ?>

			<?php if($inscrip_presta == 1):	?>		
				<button class="btn" disabled>Déjà inscrit</button> 
			<?php endif; ?>
			 
		</div>
		<!-- Afficher autre chose -->
		<?php
		if(isset($_POST['inscrire'])){
			$controler->insertPrestation02($idfamille); //On inscrit l'utilisateur à la prestation 
			echo "<meta http-equiv='refresh' content='0'>";//On rafraichi automatiquement la page 
		}
	?>

</div>
	</div>
	

</div>


</body>
</html>


<?php  require_once("structure/footer.php"); ?>