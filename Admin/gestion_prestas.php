<h3> Gestion des Préstations </h3>
<br/>
<?php

	$laPrestation =null; 
	$unControleur->setTable ("prestation");
	if(isset($_SESSION['email']))
	{


	if (isset($_GET['codepresta']) && isset($_GET['action']))
	{
		$action = $_GET['action']; 
		$codepresta = $_GET['codepresta'];
		$where = array("codepresta"=>$codepresta);
		switch ($action) {
			case 'sup':
			 	$unControleur->delete($where);
				break;
			
			case 'edit':
				 $laPrestation = $unControleur->selectWhere("*", $where);

				break;
		}
	}
	}

	$unControleur->setTable ("typepresta");
	$lesTypesPrestas = $unControleur->selectAll(); 

	$unControleur->setTable ("prestation");


	
	if(isset($_POST['Modifier']))
	{
		require_once ("vue/vue_insert_presta.php");
		$where = array("codepresta"=>$_GET['codepresta']);
		$tab=array("libellepresta"=>$_POST["libellepresta"], 
			"nombreplaces"=>$_POST["nombreplaces"], 
			"codetypepresta"=>$_POST["codetypepresta"]);

		$unControleur->update ($tab, $where); 
		header("Location: index.php?page=4"); 
	}


	if (isset($_POST['Valider']))
	{
		$tab=array("libellepresta"=>$_POST["libellepresta"],
		 "nombreplaces"=>$_POST["nombreplaces"], 
			"codetypepresta"=>$_POST["codetypepresta"],
		"idfamille"=>$_POST["idfamille"]);
		$unControleur->insert ($tab); 
	}

	$unControleur->setTable ("prestation");
	if(isset($_POST['Rechercher']))
	{
		$mot = $_POST['mot']; 
		$tab=array("libellepresta", "nombreplaces", "codetypepresta","idfamille");
		$lesPrestations = $unControleur->selectSearch($tab, $mot);
	}else { 
		$lesPrestations = $unControleur->selectAll(); 
	}
	
	require_once ("vue/vue_select_all_prestas.php"); 
?>
