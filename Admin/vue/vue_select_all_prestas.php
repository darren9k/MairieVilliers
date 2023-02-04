
<form method="post" action="">
	Mot de recherche : <input type="text" name="mot">
	<input type="submit" name="Rechercher" value="Rechercher">
</form>

<br/>

<table border ="1">
	<tr> 
		<td> Code  </td>
		<td> Nom  </td> 
		<td> Nombre de places </td> 
		<td> Type  </td>
		
		<td> Opérations </td>
	</tr>
	<?php
	
	foreach ($lesPrestations as $unePrestation) {
		echo " <tr> 
			<td> ".$unePrestation['codepresta']."</td>
			<td> ".$unePrestation['libellepresta']."</td>
			<td> ".$unePrestation['nombreplaces']."</td>
			<td> ".$unePrestation['codetypepresta']."</td>";
			if(isset($_SESSION['email']))
			{
			echo "

			<td> 
			<a href='index.php?page=4&action=sup&codepresta=".$unePrestation['codepresta']."'> 
				<img src ='images/delete.png' height='30' width='30'> </a>

			<a href='index.php?page=4&action=edit&codepresta=".$unePrestation['codepresta']."'> 
				<img src ='images/update.png' height='30' width='30'> </a>
			</td>";
		}
		echo "</tr>";
	}
	?>
</table>



