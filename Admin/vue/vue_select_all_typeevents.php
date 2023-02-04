<form method="post" action="">
	Mot de recherche : <input type="text" name="mot">
	<input type="submit" name="Rechercher" value="Rechercher">
</form>

<br/>
<table border ="1">
	<tr> 
		<td> Code Type Event </td>
		<td> Nom Type Event </td> 
		
	<?php 
	if(isset($_SESSION['email']))
	{
		echo '<td> Opérations </td>';
	}
	?>
	</tr>
	<?php
	foreach ($lesTypesEvents as $unTypeEvent) {
		echo " <tr> 
			<td> ".$unTypeEvent['codetypeevent']."</td>
			<td> ".$unTypeEvent['nomtypeevent']."</td>";
			
			if(isset($_SESSION['email']))
			{
			echo "
			<td> 
			<a href='index.php?page=1&action=sup&codetypeevent=".$unTypeEvent['codetypeevent']."'> 
				<img src ='images/delete.png' height='30' width='30'> </a>

			<a href='index.php?page=1&action=edit&codetypeevent=".$unTypeEvent['codetypeevent']."'> 
				<img src = 'images/update.png' height='30' width='30'> </a>
			</td>"; 
			}

		echo "</tr>";
	}
	?>
</table>







