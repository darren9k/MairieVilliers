
<script type="text/javascript">

    function traiterNom() 
        {
            let nom = document.getElementById("nom").value;
            if(nom.length==0)
        	{
        		alert("Le Nom est vide");
        		document.getElementById("nom").style.backgroundColor="red";
        	}else if(nom.length >50 || nom.length<2)
        	{
        		alert("Votre nom est trop court ou trop long.");
        		document.getElementById("nom").style.backgroundColor="red";
        	}
        	else{
        		nom = nom.toUpperCase();
        		document.getElementById("nom").value = nom;
        		let chaine = "ABCDEFGHIJKLMNOPQRSTUVWXYZ- ";
        		let existe = 0;
        		for(i=0;i<nom.length;i++)
        		{
        			if(chaine.indexOf(nom.charAt(i)) == -1)
        			{
						existe = 1;
        			}
        		}
        		if(existe==1)
        		{
        			alert("Erreur de Nom.");
        			nom = document.getElementById("nom").style.backgroundColor="red";
        		}
        	}
        }


        function traiterPrenom()
        {
            let prenom = document.getElementById("prenom").value;
            if (prenom.length==0)
            {
                alert("le prénom est vide !");
                document.getElementById("prenom").style.backgroundColor="red";
            }
            else if(prenom.length> 50 || prenom.length<2)
                {
                    alert("Votre prenom est trop court ou trop long.")
                    document.getElementById("prenom").style.backgroundColor="red";
                }
                else{
                    prenom = prenom.toUpperCase();
                document.getElementById("prenom").value = prenom;
                let chaine = "ABCDEFGHIJKLMNOPQRSTUVWXYZ- ";
                let existe = 0;
                for(i=0;i<prenom.length;i++)
                {
                    if(chaine.indexOf(prenom.charAt(i)) == -1)
                    {
                        existe = 1;
                    }
                }
                if(existe==1)
                {
                    alert("Erreur de Prenom.");
                    prenom = document.getElementById("prenom").style.backgroundColor="red";
                }
                //mise en forme du prénom

                var tab = prenom.split(" ");
                prenom = " ";

                for(i=0;i<tab.length;i++)
                {
                    prenom += tab[i].substring(0,1).toUpperCase() + tab[i].substring(1).toLowerCase()+ " ";
                }
                document.getElementById("prenom").value = prenom;
            }
        }


    function traiterEmail()
        {
            var email= document.getElementById("email").value;
            if (email.length == 0)
            {
                alert ("Veuillez saisir votre  email");
                document.getElementById("email").style.backgroundColor = "red";
            }
                var cEmail =0, cPoint=0 ;
            for(let i =0 ; i < email.length; i++)
            {
                if (email.charAt(i) == '@') { cEmail ++ ;}
                else if (email.charAt(i) == '.') { cPoint ++ ;}
            }
            if (cEmail == 1 && cPoint >= 1)
            {
                document.getElementById("email").style.backgroundColor="green";
            }else {
                document.getElementById("email").style.backgroundColor="red";
            }
        }


</script>



<h3> Insertion des Familles </h3>
<div class="container">
<form method="post" action="">
	<table border ="0" class="table table-striped">
		<tr> 
			<td> Nom  : </td>
			<td> <input type="text" name="nom" id="nom"
				value="<?php if ($laFamille!=NULL) echo $laFamille['nom']; ?>" onblur="traiterNom()" ></td>
		</tr>
		<tr> 
			<td> Prénom : </td>
			<td> <input type="text" name="prenom" id="prenom"
				value="<?php if ($laFamille!=NULL) echo $laFamille['prenom']; ?>" onblur="traiterPrenom()" ></td>
		</tr>
		<tr> 
			<td> Adresse :</td>
			<td> <input type="text" name="adresse" 
				value="<?php if ($laFamille!=NULL) echo $laFamille['adresse']; ?>" ></td>
		</tr>
		<tr> 
			<td> Ville : </td>
			<td> <input type="text" name="ville"  
				value="<?php if ($laFamille!=NULL) echo $laFamille['ville']; ?>" ></td>
		</tr>
		<tr> 
			<td> Email : </td>
			<td> <input type="text" name="email" id="email"
				value="<?php if ($laFamille!=NULL) echo $laFamille['email']; ?>" onblur="traiterEmail()"></td>
		</tr>
		<tr> 
			<td> Mdp : </td>
			<td> <input type="password" name="mdp" id="mdp"
				value="<?php if ($laFamille!=NULL) echo $laFamille['mdp']; ?>" onblur="traiterMd()"></td>
		</tr>
		<tr> 
			<td> Telephone : </td>
			<td> <input type="text" name="telephone"  
				value="<?php if ($laFamille!=NULL) echo $laFamille['telephone']; ?>" ></td>
		</tr>
				<tr> 
			<td> Revenu Imposable : </td>
			<td> <input type="text" name="revenu_imposable"  
				value="<?php if ($laFamille!=NULL) echo $laFamille['revenu_imposable']; ?>" ></td>
		</tr>
				<tr> 
			<td> Nombre d'enfants : </td>
			<td> <input type="text" name="nombreenfants"  
				value="<?php if ($laFamille!=NULL) echo $laFamille['nombreenfants']; ?>" ></td>
		</tr>
		
			<tr> 
			<td> Sexe : </td>
			<td> <input type="text" name="sexe"  
				value="<?php if ($laFamille!=NULL) echo $laFamille['sexe']; ?>" ></td>
		



		
		<tr>
			<td> <input type="reset" name="Annuler" value ="Annuler"> </td>
			<td> <input type="submit"

			<?php if($laFamille!=NULL) echo 'name ="Modifier" value ="Modifier" '; else echo 'name="Valider" value ="Valider"'; ?> > 
			</td>
		</tr>
	</table>
</form>
</div>
