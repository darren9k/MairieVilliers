<h3> Gestion des Evenements 
 </h3>
<?php
	$leEvenement =null; 
	$unControleur->setTable("evenement");

		if(isset($_SESSION['email']))
		{
			if (isset($_GET['codeevent']) && isset($_GET['action']))
			{
				$action = $_GET['action']; 
				$codeevent = $_GET['codeevent'];
				$where = array("codeevent"=>$codeevent);
				switch ($action) 
				{
					case 'sup':
				 		$unControleur->delete($where);
						break;
				
					case 'edit':
						 $leEvenement = $unControleur->selectWhere("*", $where);

						break;
			}
		}
	}

	

	if(isset($_POST['Modifier']))
	{
		$where = array("codeevent"=>$_GET['codeevent']);

		$tab=array("nomevent"=>$_POST["nomevent"], "tailleevent"=>$_POST["tailleevent"], 
			"lieuevent"=>$_POST["lieuevent"],  
			"dateevent"=>$_POST["dateevent"],"heureevent"=>$_POST["heureevent"],
			"codetypeevent"=>$_POST["codetypeevent"],
			"idfamille"=>$_POST["idfamille"] );
		$unControleur->update ($tab, $where); 
		header("Location: index.php?page=2"); 
	}

	if (isset($_POST['Valider']))
	{
		$tab=array("nomevent"=>$_POST["nomevent"], "tailleevent"=>$_POST["tailleevent"], 
			"lieuevent"=>$_POST["lieuevent"],  
			"dateevent"=>$_POST["dateevent"],"heureevent"=>$_POST["heureevent"],
			"codetypeevent"=>$_POST["codetypeevent"],
		"idfamille"=>$_POST["idfamille"] );
		$unControleur->insert ($tab); 
	}

	echo"<br/><h2> Liste des Evenements </h2><br/>"; 
	
	if(isset($_POST['Rechercher']))
	{
		$mot = $_POST['mot']; 
		$tab=array("nomevent", "tailleevent", "lieuevent", "dateevent","heureevent","codetypeevent","idfamille");
		$lesEvenements = $unControleur->selectSearch($tab, $mot);
	}else {
		 
		$lesEvenements = $unControleur->selectAll(); 
	}
	require_once ("vue/vue_select_all_evenements.php"); 
?>

















