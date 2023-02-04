
<!-- LE fichier compte représente en qlq sorte une vue -->
<?php
require_once("Controller/dbsettings.php");
require_once("Controller/auth.php");
require_once("Controller/controller.php");

get_user_connected(); //Empeche un utilisateur non connecte de pouvoir acceder à cette page 
//Les données de cette page se chargent en fonction de l'utilisateur connecte
//Donc a chaque fois on va récupérer les données concordantes avec l'user pour les réafficher ici 

$controler = new Controller($server, $db, $user, $mdp); 

?>
<!DOCTYPE html>
<html>
<head>
	<meta name ="viewport" content="width=device-with, initial-scale=1" charset="utf-8">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/feuille_style.css">
	<title>Page de connexion</title>
	<meta charset="utf-8">
</head>
<body>
<br><br><br>
<div class="container-fluid">
<div class="row">
	<div class="container col-md-3">
	
	<div class="container" style="background-color: #e1d2b8;"><h1>Profil</h1></div>
	<div>
		<img class="img-fluid" src="img/profil_male.jpg" height="460px" width="445px">
	</div>

		<div>
			
		</div>

	</div> 
	
	<div class="container col-md-8">	
		<div class="container" style=" background-color: #e1d2b8;">
			<h1>Informations personnelles</h1>
			<?php 
				/////////////////// IMPORTANT (système de connexion bancale mais efficace mdr) /////////////////////
				/*
				- Lors de la connexion, le programme récupère l'adresse email saisie par l'utilisateur,
				ensuite l'écrit dans un fichier nommé "stuff.txt".
				- Lorsque qu'une session est démarrée et que l'utilisateur est connecté, le programme va à chaque fois récupérer l'adresse email écrite dans le fichier pour pouvoir faire les requetes.
				*/


				$dataUser = file_get_contents('stuff.txt');//On récupère dans le fichier l'email actuellement enregistrée 
				$row = $controler->getUserData($dataUser);//On utilise l'email stockée dans le fichier pour localiser l'utilisateur dans la base de donnée. 
				$idfamille = ""; //Variable qui va servir à stocker l'ID famille de la base.
			?>
				
		</div>

		<div class="container" style="background-color: white">
			<?php foreach ($row as $rows): ?>
				<form>
					<?php $idfamille = $rows['idfamille']; //On stock l'id?>

					<!-- Vue -->

					<div class="form-group row">
						<label for="staticEmail" class="col-sm-2 col-form-label">Nom : </label>
						 <div class="col-sm-5">
						 	<!-- On écrit le nom dans l'input -->
      						<input type="text" readonly class="form-control-plaintext" id="staticEmail" value="<?php echo $rows['nom'] ?>">
    						</div>
					</div>

					<div class="form-group row">
						<label for="staticEmail" class="col-sm-2 col-form-label">Prénom : </label>
						 <div class="col-sm-5">
						 		<!-- On écrit le prenom dans l'input -->
      						<input type="text" readonly class="form-control-plaintext" id="staticEmail" value="<?php echo $rows['prenom'] ?>">
    						</div>
					</div>

					<div class="form-group row">
						<label for="staticEmail" class="col-sm-2 col-form-label">Adresse email : </label>
						 <div class="col-sm-5">
						 		<!-- On écrit l'email dans l'input -->
      						<input type="text" readonly class="form-control-plaintext" id="staticEmail" value="<?php echo $rows['email'] ?>">
    						</div>
					</div>

					<div class="form-group row">
						<label for="staticEmail" class="col-sm-2 col-form-label">Adresse : </label>
						 <div class="col-sm-5">
						 		<!-- On écrit l'adresse dans l'input -->
      						<input type="text" readonly class="form-control-plaintext" id="staticEmail" value="<?php echo $rows['adresse'] ?>">
    						</div>
					</div>

					<div class="form-group row">
						<label for="staticEmail" class="col-sm-2 col-form-label">Ville : </label>
						 <div class="col-sm-5">
						 		<!-- On écrit la ville dans l'input -->
      						<input type="text" readonly class="form-control-plaintext" id="staticEmail" value="<?php echo $rows['ville'] ?>">
    						</div>
					</div>

					<div class="form-group row">
						<label for="staticEmail" class="col-sm-2 col-form-label">Téléphone : </label>
						 <div class="col-sm-5">
						 		<!-- On écrit le telephone -->
      						<input type="text" readonly class="form-control-plaintext" id="staticEmail" value="<?php echo $rows['telephone'] ?>">
    						</div>
					</div>

					<div class="form-group row">
						<label for="staticEmail" class="col-sm-2 col-form-label">Revenu imposable : </label>
						 <div class="col-sm-5">
						 		<!-- On écrit le revenu dans l'input -->
      						<input type="text" readonly class="form-control-plaintext" id="staticEmail" value="<?php echo $rows['revenu_imposable'] ?>">
    						</div>
					</div>

					<div class="form-group row">
						<label for="staticEmail" class="col-sm-2 col-form-label">Nombre d'enfants : </label>
						 <div class="col-sm-5">
						 		<!-- On écrit le nombre d'enfant dans l'input -->
      						<input type="text" readonly class="form-control-plaintext" id="staticEmail" value="<?php echo $rows['nombreenfants'] ?>">
    						</div>
					</div>

					<div class="form-group row">
						<label for="staticEmail" class="col-sm-2 col-form-label">Date d'inscription : </label>
						 <div class="col-sm-5">
						 		<!-- On écrit la date d'inscription dans l'input -->
      						<input type="text" readonly class="form-control-plaintext" id="staticEmail" value="<?php echo $rows['dateinscription'] ?>">
    					</div>

					</div>

				</form>
			<?php endforeach ?>
		</div>
	</div>
</div>
</div>

<div class="container-fluid" style="background-color: #e1d2b8;">
	<h1>Vos préstations</h1>
	<?php 
	//On se place sur la table prestation et on utilise l'ID famille qui est une FK 
	$line = $controler->getUserPrestation($idfamille); ?>
</div>


<div class="container-fluid" style="background-color: white">
	<!-- Si on ne trouve aucune prestation dans la table de l'utilsateur dans la bdd -->
	<!-- On affiche un message  -->
<?php if($line == "Aucune prestation."): ?>
			<div class="alert alert-primary" role="alert" style="width: 250px">
  					Aucune prestation trouvée. 
					</div>
					<?php endif ?>
<?php if($line != "Aucune prestation."): ?>
<!--  Si on trouve des prestations dans la base alors on les affiche dans un tableau -->
<table class="table table-striped">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nom préstation</th>
      <th scope="col">Nombre de places</th>
    </tr>
  </thead>
  <tbody>
  	<?php foreach ($line as $lines => $value): ?>
    <tr>

      <th scope="row"><?php echo ($lines+1) ?></th>
      <td><?php echo $value['libellepresta']; ?></td>
      <td><?php echo $value['nombreplaces']; ?></td>
    </tr>
    <?php endforeach; ?>
    
</tbody>
</table>
<?php endif; ?>


</div>


</body>
	
</html>