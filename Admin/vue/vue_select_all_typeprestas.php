<form method="post" action="">
	Mot de recherche : <input type="text" name="mot">
	<input type="submit" name="Rechercher" value="Rechercher">
</form>

<br/>
<table border ="1">
	<tr> 
		<td> Code </td>
		<td> Type </td> 
	

	<?php 
	if(isset($_SESSION['email']))
	{
		echo '<td> Opérations </td>';
	}
	?>
	</tr>
	<?php
	foreach ($lesTypesPrestas as $unTypePresta) {
		echo " <tr> 
			<td> ".$unTypePresta['codetypepresta']."</td>
			<td> ".$unTypePresta['nomtypepresta']."</td>";
			if(isset($_SESSION['email']))
			{
			echo "
			<td> 
			<a href='index.php?page=3&action=sup&codetypepresta=".$unTypePresta['codetypepresta']."'> 
				<img src ='images/delete.png' height='30' width='30'> </a>

			<a href='index.php?page=3&action=edit&codetypepresta=".$unTypePresta['codetypepresta']."'> 
				<img src ='images/update.png' height='30' width='30'> </a>
			</td>"; 
			}

		echo "</tr>";
	}
	?>
</table>







