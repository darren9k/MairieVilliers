<?php 
	require_once("controleur/controleur.class.php"); 
	require_once("controleur/config_db.php"); 

$bdd = new PDO('mysql:host=localhost;dbname=mairiev;charset=utf8;', 'root', '');
	if(isset($_POST['Valider']))
	{
		if(!empty($_POST['nom']) and !empty($_POST['prenom']) and !empty($_POST['email'])and 
			!empty($_POST['mdp']) and !empty($_POST['role']))
			{
				$nom = htmlspecialchars($_POST['nom']);
				$prenom = htmlspecialchars($_POST['prenom']);
				$email = htmlspecialchars($_POST['email']);
				$mdp = sha1($_POST['mdp']);
				$role = htmlspecialchars($_POST['role']);

				$insertUser = $bdd->prepare('INSERT INTO user(nom,prenom,email,mdp,role)values(?, ?, ?, ?,?)');

				$insertUser ->execute(array($nom,$prenom,$email,$mdp,$role));

			}else{
				echo "Veuillez completer tous les champs...";
			}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Inscription - Mairie</title>
</head>
<body>

	<form method="POST" action="" align="center">
		
		<input type="text" name="nom" autocomplete="off">
		<br/>
		<input type="text" name="prenom" autocomplete="off">
		<br/>
		<input type="text" name="email" autocomplete="off">
		<br/>
		<input type="password" name="mdp" autocomplete="off">
		<br/>
		<input type="text" name="role" autocomplete="off">
		<br/>

		<input type="submit" name="Valider">


	</form>


</body>
</html>