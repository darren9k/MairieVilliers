

<!-- INFORMATION -->

<!-- CONTACT formulaire et map -->
<!DOCTYPE html>
<html>
<head>
	<meta name ="viewport" content="width=device-with, initial-scale=1" charset="utf-8">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/feuille_style.css">
	<title>Information</title>
	<meta charset="utf-8">
</head>

<br><br>

<style>


    @keyframes transitionOne {
        from{
            opacity: 0;
            transform: rotateX(-10deg);
        }

        to {
            opacity: 1;
            transform: rotateX(0);
        }
    }

    @keyframes transitionTwo {
        from{
            opacity: 0;
            transform: rotateX(-60deg);
        }

        to {
            opacity: 1;
            transform: rotateX(0);
        }
    }

    @keyframes transitionTree {
        from{
            opacity: 0;
            transform: rotateX(-100deg);
        }

        to {
            opacity: 1;
            transform: rotateX(0);
        }
    }

    .mycontainer {
    	animation : transitionOne 2s;
    }
    .secondContainer {
    	animation : transitionOne 2s;
    }


</style>





<body>
	<div class="container mycontainer mt-5">
		<h1 style="color: brown;">Contactez nous ! </h1>
		<form class="row g-3" method="post">
			<div class="col-md-6">
				<label for="firstName" class="form-label">Nom</label>
				<input type="text" class="form-control" id="firstName" required>
			</div>
			<div class="col-md-6">
				<label for="lastName" class="form-label">Prénom</label>
				<input type="text" class="form-control" id="lastName" required>
			</div>

			<div class="col-md-8">
				<label for="emailInfo" class="form-label"> Adresse E-mail</label>
				<input type="email" class="form-control" id="emailInfo" required>
			</div>
			<div class="col-md-4">
				<label for="phoneNumber" class="form-label">Numéro de téléphone</label>
				<input type="text" name="" class="form-control" id="phoneNumber" placeholder="+33 12 34 56 78 90" required>
			</div>

			<div class="col-md-12">
				<label for="comments" class="form-label">Message</label>
				<textarea class="form-control" id="comments" rows="3"></textarea>
			</div>
			<br>
			<div class="col-md-12" style="margin-top: 10px;">
				<button type="submit" class="btn-primary">Envoyer</button>
			</div>

		</form>
	</div>
<br>
	<div class="container-fluid secondContainer" style="background-color: #6e3300;">
		<br><br>
		<div class="container" style="margin-bottom: 10px;">
			<h1 style="color: white;">Où nous trouver ?</h1>
			<div class="row">
			<!--Balise google map -->	
			<div class="col-md-6">

					<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d656.673970003732!2d2.5406599!3d48.8258638!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e60dd923ea21e9%3A0xc083eaee84d3f86a!2sMairie%20de%20Villiers%20sur%20Marne!5e0!3m2!1sfr!2sfr!4v1643625641528!5m2!1sfr!2sfr" width="500" height="450"  frameBorder = "0" allowfullscreen=""></iframe> 
			</div>
			<div class="col-md-6">
				<h3 style="color: white;">Informations supplémentaires : </h3><br/>
				<h5 style="color:white;">Google map : </h5><br/>
				<button type="button" style="background-color: #F5F5DC;" onclick=window.location.href='https://goo.gl/maps/kDZuWqvXNd4H3aFx7'; class="btn  px-4 me-md-2">Plan</button>

				<h5 style="color:white;"><br/>Horaires d'ouverture</h5>
				<p style="color:white;">Lundi à jeudi : 8h30 - 12h & 13h30 - 17h15</p><br/>
				<p style="color:white;">Vendredi : 8h30 - 12h & 13h30 - 17h</p><br/>
				<p style="color:white;">Samedi : 8h30 - 11h45</p><br/>
				<p style="color:white;">Mardi : 13h30 - 17h 15 : fermé (CMAT)</p><br/>
			</div>

			</div>
		
			<br><br>
		</div>




	</div>


</body>
</html>