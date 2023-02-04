<h2> Gestion des types de prestation  </h2>
<br/><br/><br/>


<?php
	$leTypePresta =null; 
	$unControleur->setTable ("typepresta");

	if(isset($_SESSION['email']))
	{
		if (isset($_GET['codetypepresta']) && isset($_GET['action']))
		{
			$action = $_GET['action']; 
			$codetypepresta = $_GET['codetypepresta'];
			$where = array("codetypepresta"=>$codetypepresta);
			switch ($action) {
				case 'sup':
				 	$unControleur->delete($where);
					break;
				
				case 'edit':
					 $leTypePresta= $unControleur->selectWhere("*", $where);

					break;
			}
		}


		require_once ("vue/vue_insert_typepresta.php");

		if(isset($_POST['Modifier']))
		{
			$where = array("codetypepresta"=>$_GET['codetypepresta']);
			$tab=array("nomtypepresta"=>$_POST["nomtypepresta"]);
			$unControleur->update ($tab, $where); 
			header("Location: index.php?page=3"); 
		}
		if (isset($_POST['Valider']))
		{
			$tab=array("nomtypepresta"=>$_POST["nomtypepresta"]);
			$unControleur->insert ($tab); 
		}

	}

	echo"<br/><h2> Liste des types de prestation </h2><br/>"; 
	if(isset($_POST['Rechercher']))
	{
		$mot = $_POST['mot']; 
		$tab=array("nomtypepresta");
		$lesTypesPrestas = $unControleur->selectSearch($tab, $mot);
	}else {
		$chaine = "codetypepresta, nomtypepresta" ; 
		$lesTypesPrestas= $unControleur->selectAll($chaine); 
	}
	
	require_once ("vue/vue_select_all_typeprestas.php"); 
?>

















