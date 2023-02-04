<style type="text/css">
	table,
td {
    border: 1px solid #333;
}

thead,
tfoot {
    background-color: #333;
    color: #fff;
}
	
</style>

<form method="post" action="">
	Mot de recherche : <input type="text" name="mot">
	<input type="submit" name="Rechercher" value="Rechercher">
</form>

<br/>

<div class="container">
<table border ="2" class="table table-primary">
	<tr> 
		<td> ID </td>
		<td> Nom  </td> 
		<td> Prenom </td> 
		<td> Adresse </td>
		<td> Ville </td>
		<td> Email </td>
		<td> Mdp </td>
		<td> Telephone </td>
		<td> Revenu Imposable </td>
		<td> Nb enfants </td>
		<td> Date-Inscription </td>
		<td> Sexe </td>
		<td> Opérations </td>

	</tr>
	<?php
	foreach ($lesFamilles as $uneFamille) {
		echo " <tr> 
			<td> ".$uneFamille['idfamille']."</td>
			<td> ".$uneFamille['nom']."</td>
			<td> ".$uneFamille['prenom']."</td>
			<td> ".$uneFamille['adresse']."</td>
			<td> ".$uneFamille['ville']."</td>
			<td> ".$uneFamille['email']."</td>
			<td> ".$uneFamille['mdp']."</td>
			<td> ".$uneFamille['telephone']."</td>
			<td> ".$uneFamille['revenu_imposable']."</td>
			<td> ".$uneFamille['nombreenfants']."</td>
			<td> ".$uneFamille['dateinscription']."</td>
			<td> ".$uneFamille['sexe']."</td>";

			if(isset($_SESSION['email']))
			{
			echo "
			<td> 
			<a href='index.php?page=5&action=sup&idfamille=".$uneFamille['idfamille']."'> 
				<img src ='images/delete.png' height='30' width='30'> </a>

			<a href='index.php?page=5&action=edit&idfamille=".$uneFamille['idfamille']."'> 
				<img src ='images/update.png' height='30' width='30'> </a>
			</td>";
		}


		echo "</tr>";
	}
	?>
</table>


</div>