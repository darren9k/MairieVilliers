
<h2> Inscription à l'intranet</h2>

<center>

<form method="post" action="">
	<table>
		<tr>
			<td> Nom : </td>
			<td> <input type="text" name="nom" id="nom" onblur="traiterNom()"></td>
		</tr>
		<tr>
			<td> Prénom : </td>
			<td> <input type="text" name="prenom" id="prenom" onblur="traiterPrenom()"></td>
		</tr>
		<tr>
			<td> Email : </td>
			<td> <input type="text" name="email" id="email" onblur="traiterEmail()"></td>
		</tr>
		<tr>
			<td> MDP : </td>
			<td> <input type="password" name="mdp" id="mdp" onblur="traiterMdp()"></td>
		</tr>
		<tr>
			<td> <input type="reset" name="Annuler" value="Annuler"> </td>
			<td> <input type="submit" name="Valider" value="Valider"></td>
		</tr>
	</table>
</form>
</center>
