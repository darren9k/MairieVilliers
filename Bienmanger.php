<?php  

require_once("Controller/dbsettings.php"); 
require_once("Controller/Controller.php"); 
require_once("structure/header.php"); 


$controler = new Controller($server, $db, $user, $mdp); 
$dataUser = file_get_contents('stuff.txt');//On récupère dans le fichier l'email actuellement enregistrée 
$row = $controler->getUserData($dataUser);//On utilise l'email stockée dans le fichier pour localiser l'utilisateur dans la base de donnée. 
$idfamille = ""; //Variable qui va servir à stocker l'ID famille de la base grace à la récupération de l'email.

$prestation = "Bien manger c est le debut du bonheur"; 

foreach ($row as $rows)
	$idfamille = $rows['idfamille'];


$inscrip_presta = $controler->is_registred($idfamille, $prestation); 

?>

<!DOCTYPE html>
<html>
<head>
	<meta name ="viewport" content="width=device-with, initial-scale=1" charset="utf-8">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/feuille_style.css">
	<title>Bien manger c'est le début du bonheur</title>
	<meta charset="utf-8">
</head>
<body>

<br>
<br>
<br>

	<div class="container">
		<div class="col-md-8">
			<nav aria-label ="breadcrumb">
				<ol class="breadcrumb" style="background-color: white;">
    				<li class="breadcrumb-item"><a href="hompe.php" style="text-decoration: ">Accueil</a></li>
    				<li class="breadcrumb-item"><a href="index.php?page=3" style="text-decoration: none">Préstation</a></li>
    				<li class="breadcrumb-item active" aria-current="page">Bien manger</li>
  				</ol>
			</nav>
			<h1>Bien manger c'est le début du bonheur</h1>
			<img class="img-fluid" src="img/bien.jpg"> <br><br><br><br>
</div>

<div class="row">
			<div class="col-md-9">
			<h5>S'inscrire à la prestation</h5>
			<p>Détails des pièces et conditions d'inscription</p><br><br><br><br><br><br><br>
			<h5>Les autres modes d’accueil</h5>
			<p>Les autres structures d'accueil.</p> <br><br><br><br>
			<h5>Tarifs des prestations & aides financières</h5>
			<p>Barème des tarifs des prestations et aides financières possibles.</p><br><br><br>
		
		</div>
		<div class="col-md-3">
				<img class = "img-fluid" src="img/food.png" style="height: 200px">
		</div>

</div>

<div class="card card-body" style="background-color: #e1d2b8;">

		<h5>S'inscrire</h5>
			Cliquez sur ce bouton pour vous inscrire à la prestation.	
			<?php if($inscrip_presta == 0):	?>		
				<form method="POST">
					<button type = "submit" name ="inscrire" class="btn" style="width:100%;">S'inscrire</button> 
				</form>
			<?php endif; ?>

			<?php if($inscrip_presta == 1):	?>		
				<button class="btn" disabled>Déjà inscrit</button> 
			<?php endif; ?>

</div>

<?php

		if(isset($_POST['inscrire'])){
			$controler->insertPrestation03($idfamille); //On inscrit l'utilisateur à la prestation 
			echo "<meta http-equiv='refresh' content='0'>";//On rafraichi automatiquement la page 
		}

	?>




		</div>
	</div>
</body>
</html>

<?php require_once("structure/footer.php"); ?>