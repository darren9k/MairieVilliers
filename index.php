<?php

//$_SESSION['connecte'] = 1; 
//require_once("Controller/auth.php");
//echo "<--- etat connexion ".var_dump(is_connected());
//exit();

?>

<!-- BOOTSTRAP 4.0 -->

<!DOCTYPE html>
<html>
<head>
	<title>Mairie de viller</title>
	<meta charset="utf-8">
	<meta name ="viewport" content="width=device-with, initial-scale=1" charset="utf-8">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/feuille_style.css">
</head>
<body style="background-color: #F5F5DC;">
	

<?php
		if (isset($_GET['page'])) 
			$page = $_GET['page']; 
		else $page = 0; 
		
		switch($page){

			case 0 : 
			include("structure/header.php"); 
			require_once("home.php"); 	
					 break;
			case 1 : 
			include("structure/header.php"); 
			require_once("information.php"); 	
			break;
			case 3 : 
			include("structure/header.php"); 
			require_once("prestation.php"); 	
					 break;
			case 2 : 
			include("structure/header.php"); 
			require_once("evenement.php"); 	
					 break;
			case 4 : 
			include("structure/headerco.php"); 
			require_once("connexion.php"); 	
					 break;

			case 5 : 
			include("structure/header.php"); 
			require_once("View/vue_compte.php"); 	
					 break;
			
		}
	
?>

<?php
include("structure/footer.php");
?>

</body>
</html>