<h3> Insertion des types d'evenement </h3>
<form method="post" action="">
	<table border ="1">
		<tr> 
			<td> Nom du type d'evenement : </td>
			<td> <input type="text" name="nomtypeevent" 
				value="<?php if ($leTypeEvent!=NULL) echo $leTypeEvent['nomtypeevent']; ?>">
			</td>
		</tr>
		<tr>
			<td> <input type="reset" name="Annuler" value ="Annuler"> </td>
			<td> <input type="submit"

			<?php if($leTypeEvent!=NULL) echo 'name ="Modifier" value ="Modifier" '; 
			else echo 'name="Valider" value ="Valider"'; ?> > 
			</td>
		</tr>
		
	</table>
</form>










