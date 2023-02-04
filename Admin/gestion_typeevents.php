<h3> Gestion des Types Evenements 
 </h3>
<?php
	$leTypeEvent =null; 
	$unControleur->setTable ("typeevent");

	if(isset($_SESSION['email'])) //boucle qui permet que seulement les admins puissent
	//modifier et supprimer les types d'event
	{
		if (isset($_GET['codetypeevent']) && isset($_GET['action']))
		{
			$action = $_GET['action']; 
			$codetypeevent = $_GET['codetypeevent'];
			$where = array("codetypeevent"=>$codetypeevent);
			switch ($action) 
			{
				case 'sup':
				 	$unControleur->delete($where);
					break;
				
				case 'edit':
					 $leTypeEvent = $unControleur->selectWhere("*", $where);

					break;
			}
		}
	}


		require_once ("vue/vue_insert_typeevent.php");

		if(isset($_POST['Modifier']))
		{
			$where = array("codetypeevent"=>$_GET['codetypeevent']);
			$tab=array("nomtypeevent"=>$_POST["nomtypeevent"]);
			$unControleur->update ($tab, $where); 
			header("Location: index.php?page=1"); 
		}
		if (isset($_POST['Valider']))
		{
			$tab=array("nomtypeevent"=>$_POST["nomtypeevent"]);
			$unControleur->insert ($tab); 
		}

	

	echo"<br/><h2> Liste des types d'evenement </h2><br/>"; 
	if(isset($_POST['Rechercher']))
	{
		$mot = $_POST['mot']; 
		$tab=array("nomtypeevent");
		$lesTypesEvents = $unControleur->selectSearch($tab, $mot);
	}else {
		$chaine = "codetypeevent, nomtypeevent" ; 
		$lesTypesEvents = $unControleur->selectAll($chaine); 
	}
	
	require_once ("vue/vue_select_all_typeevents.php"); 
?>
