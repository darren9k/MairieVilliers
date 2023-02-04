<h3> Insertion d'un User </h3>
<form method="post" action="">
	<table border ="0">
		<tr> 
			<td> Nom  : </td>
			<td> <input type="text" name="nom" 
				value="<?php if ($leInscription!=NULL) echo $leInscription['nom']; ?>"  ></td>
		</tr>
		<tr> 
			<td> Prénom : </td>
			<td> <input type="text" name="prenom" 
				value="<?php if ($leInscription!=NULL) echo $leInscription['prenom']; ?>"  ></td>
		</tr>
		<tr> 
			<td> Email :</td>
			<td> <input type="text" name="email" 
				value="<?php if ($leInscription!=NULL) echo $leInscription['email']; ?>" ></td>
		</tr>
		<tr> 
			<td> Mot de Passe : </td>
			<td> <input type="text" name="mdp"  
				value="<?php if ($leInscription!=NULL) echo $leInscription['mdp']; ?>" ></td>
		</tr>
		

		
		<tr>
			<td> <input type="reset" name="Annuler" value ="Annuler"> </td>
			<td> <input type="submit"

			<?php if($leInscription!=NULL) echo 'name ="Modifier" value ="Modifier" '; else echo 'name="Valider" value ="Valider"'; ?> > 
			</td>
		</tr>
	</table>
</form>

