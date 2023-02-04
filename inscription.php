
<?php

require_once("structure/headerInscrip.php"); 
require_once("Controller/signIn.php");

?>


<!DOCTYPE html>
<html>
<head>
	<meta name ="viewport" content="width=device-with, initial-scale=1" charset="utf-8">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script type="text/javascript" src="script.js"></script>
    <link rel="stylesheet" type="text/css" href="css/feuille_style.css">
	<title>Page de connexion</title>
	<meta charset="utf-8">
</head>
<body>
	<style>
        .btn1{
			border:none;
			outline: none; 
			height:50px; 
			width: 330px;
			background-color: #765e32;
			color: #F5F5DC;
			border-radius: 4px;
			font-weight: bold;
		}

        .btn1:hover{
			background: white;
			border:1px solid;
			color:#765e32;
		}


    </style>

    <section class="Form my-4 mx-5">
        <div class="container">
            <div class="row myrow no-gutters">
                <div class="col-lg-7 px-5 pt-5">

                	<h1 class="font-weight-bold py-3" style="color: #765e32;">Inscription</h1>
                	<h4 style="color: #765e32;">Saisissez vos informations</h4>

                    <form method="POST" action="">

                    <div class="form-row">
                            <div class="col-lg-7">
                                <label for="firstName" class="form-label">Nom : </label>
                                <input type="name" id = "nom"  onblur="traiterNom()" name="nom" class="form-control my-2 p-3" placeholder="nom" required>
                            </div>
                    </div>

                    <div class="form-row">
                            <div class="col-lg-7">
                            <label for="Name" class="form-label">Prenom : </label>
                                <input type="name" id = "prenom"  onblur="traiterPrenom()"  name="prenom" class="form-control my-2 p-3" placeholder="prénom" required>
                            </div>
                    </div>

                    <div class="form-row">
                            <div class="col-lg-7">
                                <label for="firstName" class="form-label">Adresse domicile : </label>
                                <input type="text" id = "adresse"  onblur="traiterDomicile()" name="adresse" class="form-control my-2 p-3" placeholder="adresse" required>
                            </div>
                    </div>

                    <div class="form-row">
                            <div class="col-lg-7">
                                <label for="firstName" class="form-label">Numéro de téléphone : </label>
                                <input type="text" id = "numero" name="tel"  onblur="traiterNumero()" class="form-control my-2 p-3" placeholder="+33 01 02 03 04 05" required>
                            </div>
                    </div>


                    <div class="form-row">
                            <div class="col-lg-7">
                                <label for="firstName" class="form-label">Ville : </label>
                                <input type="text" id = "ville" onblur="traiterVille()" name="ville" class="form-control my-2 p-3" placeholder="Paris, Nanterre, Saint Denis" required>
                            </div>
                    </div>

                    
                    <div class="form-row">
                            <div class="col-lg-7">
                                <label for="firstName" class="form-label">Revenu imposable </label>
                                <input type="text" name="revenu" class="form-control my-2 p-3" placeholder="Ex: 3200"  required>
                            </div>
                    </div>

                    <div class="form-row">
                            <div class="col-lg-7">
                                <label for="firstName" class="form">Nombre d'enfant </label>
                                <input type="number" name="enfant" class="form-control my-2 p-3" required>
                            </div>
                    </div>

                    <div class="form-row">
                            <div class="col-lg-7">
                            <label for="firstName" class="form-label">sexe : </label>
                                <select class="form-control" id="exampleFormControlSelect1" name="sexe">
                                     <option>homme</option>
                                     <option>femme</option>
                                </select>
                            </div>
                        </div>


                        <div class="form-row">
                            <div class="col-lg-7">
                            <label for="firstName" class="form-label">Adresse electronique : </label>
                                <input type="email" name="email" class="form-control my-2 p-3" placeholder="Adresse email" required>
                            </div>
                        </div>
                    
                        <div class="form-row">
                            <div class="col-lg-7">
                                <label for="firstName" class="form-label">Mot de passe : </label>
                                <input type="password" onblur="traiterMdp()" id="mdp" name="mdp" class="form-control my-2 p-3" placeholder="********" required>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col-lg-7">
                                <label for="firstName" class="form-label">Confirmer votre mot de passe : </label>
                                <input type="password" id = "mdp2" name="mdp2" class="form-control my-2 p-3" placeholder="********"  onblur="verifMdp()" required>
                            </div>
                        </div>
                    
                         <div class="form-row">
                            <div class="col-lg-7">
                            	<button type="submit" name="inscription" class="btn1 mt-3 mb-5">Inscription</button>
                            </div>
                        </div>


                    </form>
                </div>
            </div>
        </div>
        
    </section>

    <script type="text/javascript">
        

        function traiterDomicile(){
            let domicile = document.getElementById("adresse").value; 
            if(domicile.length > 100){
                alert("adresse incorrecte."); 
                document.getElementById("adresse").style.backgroundColor="red"; 
            }

        }

        function traiterVille(){
            let ville = document.getElementById("ville").value; 
            if(ville.length < 2 || ville.length > 10){
                alert("Ville invalide."); 
                document.getElementById("ville").style.backgroundColor = "red"; 
            }
            
        }

        function traiterNom() 
        {
            let nom = document.getElementById("nom").value;
            if(nom.length >50 || nom.length<2)
            {
                alert("Votre nom est trop court ou trop long.");
               
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


        function traiterNumero(){
            let numero = document.getElementById("numero").value;
           if(numero.length!=10)
            {
                alert("numéro invalide");
                document.getElementById("numero").style.backgroundColor="red";
            }
            else if(numero.length ==10)
            {
                let chaine = "0123456789";
                let existe = 0;
                for(i=0;i<numero.length;i++)
                {
                    if(chaine.indexOf(numero.charAt(i)) == -1)
                    {
                        existe = 1;
                    }
                }
                if(existe==1)
                {
                    alert("Numero invalide");
                    numero = document.getElementById("numero").style.backgroundColor="red";
                }
                 else {
                     if( numero.substring(0,1)!="0" && numero.substring(1,2)!="7")
                        {
                            alert("Votre numéro doit commencer par 07 ou 06");
                            numero = document.getElementById("numero").style.backgroundColor="red";
                        }
                    if (numero.substring(0,1)!="0" && numero.substring(1,2)!="6"){
                        alert("Votre numéro doit commencer par 07 ou 06");
                        numero = document.getElementById("numero").style.backgroundColor="red";
                    }
                }

            }
        }



        function traiterPrenom(){
            let prenom = document.getElementById("prenom").value;
           if(prenom.length> 50 || prenom.length<2)
                {
                    alert("Votre prenom est trop court ou trop long.")
                    
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
                    alert("Erreur de Preom.");
                    prenom = document.getElementById("prenom").style.backgroundColor="red";
                }
                //mise en forme du prénom

                var tab = prenom.split(" ");
                prenom = " ";

                for(i=0;i<tab.length;i++)
                {
                    prenom += tab[i].substring(0,1).toUpperCase() + tab[i].substring(1).toLowerCase()+" ";
                }
                document.getElementById("prenom").value = prenom;
            }
        }






            //Le mot de passe doit etre supérieur a 8 carac + au moins maj au moins min + lettre 
        function traiterMdp(){
           var mdp = document.getElementById("mdp").value; 
            if (mdp.length < 8) {
                     alert("Veuillez saisir un mot de passe plus long");
                    document.getElementById("mdp").style.backgroundColor = "red";
        }
            else if (mdp == mdp.toLowerCase())
            {
                alert("Veuillez saisir au moins une lettre majuscule");
                document.getElementById("mdp").style.backgroundColor = "red";
            }
            else if (mdp == mdp.toUpperCase())
            {
                alert("Veuillez saisir au moins une lettre miniscule");
                document.getElementById("mdp").style.backgroundColor = "red";
            }
            else if (mdp /[0-9]/g)
            {
                alert("Veuillez saisir au moins un chiffre");
                document.getElementById("mdp").style.backgroundColor = "red";
            } 
        }

        function verifMdp(){
            var mdp = document.getElementById("mdp").value; 
            var mdp2 = document.getElementById("mdp2").value; 

                if(mdp2!=mdp){
                    alert("Les deux mots de passe ne sont pas identiques"); 
                    document.getElementById("mdp2").style.backgroundColor = "red"; 
                }

        }


        




    </script>
</body>
</html>