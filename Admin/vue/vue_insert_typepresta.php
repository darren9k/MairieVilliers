<h3> Insertion de type de Prestation </h3>
<form method="post" action="">
	<table border ="0">
		<tr> 
			<td> Nom : </td>
			<td> <input type="text" name="nomtypepresta" 
				value="<?php if ($leTypePresta!=NULL) echo $leTypePresta['nomtypepresta']; ?>">
			</td>
		</tr>
		<tr>
			<td> <input type="reset" name="Annuler" value ="Annuler"> </td>
			<td> <input type="submit"

			<?php if($leTypePresta!=NULL) echo 'name ="Modifier" value ="Modifier" '; 
			else echo 'name="Valider" value ="Valider"'; ?> > 
			</td>
		</tr>
	</table>
</form>
