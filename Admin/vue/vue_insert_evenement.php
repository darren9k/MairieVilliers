<h3> Insertion des Evenements </h3>
<form method="post" action="">
	<table border ="0">
		<tr> 
			<td> Nom de l'evenements : </td>
			<td> <input type="text" name="nomevent" 
				value="<?php if ($leEvenement!=NULL) echo $leEvenement['nomevent']; ?>"  ></td>
		</tr>
		<tr> 
			<td> Taille de l'evenement : </td>
			<td> <input type="text" name="tailleevent" 
				value="<?php if ($leEvenement!=NULL) echo $leEvenement['tailleevent']; ?>"  ></td>
		</tr>
		<tr> 
			<td> Lieu de l'evenement :</td>
			<td> <input type="text" name="lieuevent" 
				value="<?php if ($leEvenement!=NULL) echo $leEvenement['lieuevent']; ?>" ></td>
		</tr>
		<tr> 
			<td> La Date de l'evement : </td>
			<td> <input type="text" name="dateevent"  
				value="<?php if ($leEvenement!=NULL) echo $leEvenement['dateevent']; ?>" ></td>
		</tr>
		<tr> 
			<td> L'heure de l'evement : </td>
			<td> <input type="text" name="heureevent"  
				value="<?php if ($leEvenement!=NULL) echo $leEvenement['heureevent']; ?>" ></td>
		</tr>
		<tr>
			<td> Le Type d'evenement : </td>
			<td> 
				<select name ="codetypeevent"> 	
			<?php 
			foreach ($lesTypesEvents as $unTypeEvent) {
echo "<option value ='".$unTypeEvent['codetypeevent']."'>".$unTypeEvent['nomtypeevent']."</option>";
			}
				?>	
				</select>
			</td>
		</tr>	
			<td> <input type="reset" name="Annuler" value ="Annuler"> </td>
			<td> <input type="submit"
				<?php if($leEvenement!=NULL) echo 'name ="Modifier" value ="Modifier" '; else echo 'name="Valider" value ="Valider"'; ?> 
			>
			</td>
		</tr>
	</table>
</form>

