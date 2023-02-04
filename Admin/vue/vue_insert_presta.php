<h3> Insertion d'une Préstation </h3>
<form method="post" action="">
	<table border ="0">
		<tr> 
			<td> Nom de la Prestation: </td>
			<td> <input type="text" name="libellepresta"></td>
		</tr>
		<tr> 
			<td> nombre de places : </td>
			<td> <input type="text" name="nombreplaces"></td>
		</tr>
		<tr>  
			<td> Type de Prestation : </td>
			<td> 
				<select name ="codetypepresta">
				<?php 
			foreach ($lesTypesPrestas as $unTypePresta) {
echo "<option value ='".$unTypePresta['codetypepresta']."'>".$unTypePresta['nomtypepresta']."</option>";
			}
				?>	
				</select>
			</td>
		</tr>
		<tr>
			<td> <input type="reset" name="Annuler" value ="Annuler"> </td>
			<td> <input type="submit" name="Valider" value ="Valider"> </td>
		</tr>
	</table>
</form>

