<h3> Gestion des Familles  </h3>
<?php
	$laFamille =null; 
	$unControleur->setTable("famille");

	if(isset($_SESSION['email']))
	{
		if (isset($_GET['idfamille']) && isset($_GET['action']))
		{
			$action = $_GET['action']; 
			$idfamille = $_GET['idfamille'];
			$where = array("idfamille"=>$idfamille);
			switch ($action) 
			{
				case 'sup':
				 	$unControleur->delete($where);
					break;
			
				case 'edit':
					 $laFamille = $unControleur->selectWhere("*", $where);

					break;
			}
		}
	}	

	require_once ("vue/vue_insert_famille.php");

	if(isset($_POST['Modifier']))
	{
		$where = array("idfamille"=>$_GET['idfamille']);
		$tab=array("nom"=>$_POST["nom"],"prenom"=>$_POST["prenom"], "adresse"=>$_POST["adresse"], 
			"ville"=>$_POST["ville"],  
			"email"=>$_POST["email"],
			"mdp"=>$_POST["mdp"],
			"telephone"=>$_POST["telephone"],
			"revenu_imposable"=>$_POST["revenu_imposable"],
			 "nombreenfants"=>$_POST["nombreenfants"],
			 "sexe"=>$_POST["sexe"],
			  "photo"=>""
			);
		$unControleur->update($tab, $where); 
		
	}
	if (isset($_POST['Valider']))
	{
		$today = date("Y-m-d"); 
		$tab=array("nom"=>$_POST["nom"], "prenom"=>$_POST["prenom"], "adresse"=>$_POST["adresse"], 
			"ville"=>$_POST["ville"],  
			"email"=>$_POST["email"],
			"mdp"=>$_POST["mdp"],
			"telephone"=>$_POST["telephone"],
			"revenu_imposable"=>$_POST["revenu_imposable"],
			 "nombreenfants"=>$_POST["nombreenfants"],
			 "dateinscription"=>$today,
			 "sexe"=>$_POST["sexe"],
			 "photo"=>""
			 );

		$unControleur->insert($tab); 
	}

	echo"<br/><h2> Liste des familles </h2><br/>"; 
	
	if(isset($_POST['Rechercher']))
	{
		$mot = $_POST['mot']; 
		$tab=array("nom", "prenom", "adresse", "ville","email","mdp","telephone","nombreenfants","dateinscription","sexe");
		$lesFamilles = $unControleur->selectSearch($tab, $mot);
	}else {
		 
		$lesFamilles = $unControleur->selectAll(); 
	}
	require_once ("vue/vue_select_all_familles.php"); 
?>

















