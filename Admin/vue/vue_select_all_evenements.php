<form method="post" action="">
	Mot de recherche : <input type="text" name="mot">
	<input type="submit" name="Rechercher" value="Rechercher">
</form>

<br/>


<table border ="1">
	<tr> 
		<td> Code Event </td>
		<td> Nom  </td> 
		<td> Taille </td> 
		<td> Lieu </td>
		<td> Date </td>
		<td> Heure </td>
		<td> Type </td>
		<td> Opérations </td>
	</tr>
	<center>
	<?php
	foreach ($lesEvenements as $unEvent) {
		echo " <tr> 
			<td> ".$unEvent['codeevent']."</td>
			<td> ".$unEvent['nomevent']."</td>
			<td> ".$unEvent['tailleevent']."</td>
			<td> ".$unEvent['lieuevent']."</td>
			<td> ".$unEvent['dateevent']."</td>
			<td> ".$unEvent['heureevent']."</td>
			<td> ".$unEvent['codetypeevent']."</td>";

			
			if(isset($_SESSION['email']))
			{
			echo"
			<td> 
			<a href='index.php?page=2&action=sup&codeevent=".$unEvent['codeevent']."'> 
				<img src ='images/delete.png' height='30' width='30'> </a>

			<a href='index.php?page=2&action=edit&codeevent=".$unEvent['codeevent']."'> 
				<img src ='images/update.png' height='30' width='30'> </a>
			</td>";
			}  
		echo "</tr>";
	}
	?>
	</center>
</table>








