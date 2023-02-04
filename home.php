<!-- Page d'accueil --> 
<!DOCTYPE html>
<html>
<head>
	<meta name ="viewport" content="width=device-with, initial-scale=1" charset="utf-8">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/feuille_style.css">
	<title>Evenement</title>
	<meta charset="utf-8">
</head>
<body class="body">
<style>
  
  .btn1:hover{
      background: white;
      border:1px solid;
      color:#765e32;
    }


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


.actualite {
  animation : transitionTree 5s;
}
   

</style>

		<div id="carouselExampleIndicators carou" class="carousel slide" data-ride="carousel">
  		<ol class="carousel-indicators">
    		<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    		<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    		<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  		</ol>
  		<div class="carousel-inner">
    	<div class="carousel-item active">
     	 	<img class="d-block w-100" src="img/centre_ville.jpg" alt="First slide" height="800px" width="500px">
     	 	 <div class="carousel-caption d-none d-md-block">
    			<h1>De nombreuses prestation disponible ! </h1>
    				<p>Rendez vous sur l'onglet pour plus d'information </p>
  			</div>
    	</div>
    	<div class="carousel-item">
      		<img class="d-block w-100" src="img/maire_villiers.jpg" alt="Second slide" height="800px" width="500px">

      			<div class="carousel-caption d-none d-md-block">
    			<h1>Bienvenue sur le site de Villiers</h1>
    				<p>Toutes informations sur votre ville à votre dispositions ! </p>
  			</div>
    	</div>
    	<div class="carousel-item">
      		<img class="d-block w-100" src="img/Place_Rémoiville.jpg" alt="Third slide" height="800px" width="500px">
      			<div class="carousel-caption d-none d-md-block">
    			<h1>Toute l'actualité à votre disposition</h1>
    				<p>Add captions to your slides easily with the .carousel-caption element within any .carousel-item. They can be easily hidden on smaller viewports, as shown below, with optional display utilities. </p>
  			</div>
    	</div>
  		</div>
  		<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
    		<span class="sr-only">Previous</span>
  		</a>
  		<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    		<span class="carousel-control-next-icon" aria-hidden="true"></span>
    		<span class="sr-only">Next</span>
  		</a>
		</div>		
	


<br><br><br>


	<!------ actualité -------> 
	
	<div class="container actualite" style="background-color: ;">
		<div class="row justify-content">
	<h1 class="mainTitle" style="color: ">Actualité de la ville<br></h1> 
				<div class="card-columns">
  <div class="card">
    <img class="card-img-top" src="img/actu1.jpeg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Vols à fausse qualité</h5>
      <p class="card-text">Les tentatives de vols à la fausse qualité sont fréquentes dans le Val-de-Marne, notamment auprès des plus âgés. Deux cas ont été à déplorer récemment.</p> <a href="#" class="btn btn-primary" style="background-color: #765e32; ">Voir</a>
    </div>
  </div>

  <div class="card">
    <img class="card-img-top" src="img/actu2.webp" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Et si vous testiez la gym sur trampoline ?</h5>
      <p class="card-text">L’association Happy Gym & Co propose deux fois par semaine, à Villiers-sur-Marne, cette activité «accessible à tous», qui permet de faire du sport dans un esprit ludique. Une à deux fois par mois, comme ce samedi et ce dimanche, pour 10 euros la séance, le cours est ouvert aux non inscrits qui veulent tester.</p> <a href="#" class="btn btn-primary" style="background-color: #765e32; ">Voir</a>
    </div>
  </div>

  <div class="card">
    <img class="card-img-top" src="img/actu3.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Fulgurante hausse des cas de Covid-19 dans les écoles.</h5>
      <p class="card-text">La situation épidémique continue de se dégrader et les établissements scolaires du premier degré du Val-de-Marne n’y échappent pas.</p> <a href="#" class="btn btn-primary" style="background-color: #765e32; ">Voir</a>
    </div>
  </div>

  <div class="card">
    <img class="card-img-top" src="img/actu4.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">La vaccination contre le Covid-19 s'accélère</h5>
      <p class="card-text">plusieurs centaines de doses de vaccins ont été injectées cette semaine dans le département, grâce à l’ouverture d’espaces de vaccination éphémères. La campagne va se poursuivre dans les centres de vaccination ambulatoires.</p> <a href="#" class="btn btn-primary" style="background-color: #765e32; ">Voir</a>
    </div>
  </div>

  <div class="card">
    <img class="card-img-top" src="img/actu5.webp" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Un homme tué par balle dans un squat</h5>
      <p class="card-text">Ce lundi, après la découverte du corps sans vie d’un homme, dont l’identité n’a pas été confirmée, dimanche, dans l’appartement d’une bâtisse vouée à la démolition, rue des Fossés, à Villiers-sur-Marne. </p> <a href="#" class="btn btn-primary" style="background-color: #765e32; ">Voir</a>
    </div>
  </div>

  <div class="card">
    <img class="card-img-top" src="img/actu6.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">La première « Ninja run » réunit 500 personnes</h5>
      <p class="card-text">Cette course d’obstacles a fait le plein samedi sur la pelouse du stade Octave Lapize à Villiers-sur-Marne, attirant beaucoup de familles pressées de renouer avec des activités de plein air.</p> <a href="#" class="btn btn-primary" style="background-color: #765e32; ">Voir</a>
    </div>
  </div>


	</div>
		</div>
</div>
<br><br>

<div class="container-fluid red" style="background-color:#765e32; ">
	<div class="container"><br><br>

		<h1 style="color: white;">Le cinéma à Villiers</h1><br><br>
		
		<div class="row">

		<br><br>
<div id="carouselExampleIndicators" class="carousel slide col-md-6 col-xs-12" data-ride="carousel" >
  		<ol class="carousel-indicators">
    		<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    		<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    		<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  		</ol>
  		<div class="carousel-inner">
    	<div class="carousel-item active">
     	 	<img class="d-block w-100" src="img/film1.jpg" alt="First slide" height="300px" width="400px">
     	 	 <div class="carousel-caption d-none d-md-block">
    			
  			</div>
    	</div>
    	<div class="carousel-item">
      		<img class="d-block w-100" src="img/film2.jpg" alt="Second slide" height="300px" width="400px">

      			<div class="carousel-caption d-none d-md-block">
    			<h1></h1>
    				<p></p>
  			</div>
    	</div>
    	<div class="carousel-item">
      		<img class="d-block w-100" src="img/film3.jpg" alt="Third slide" height="300px" width="400px">
      			<div class="carousel-caption d-none d-md-block">
    			<h1></h1>
    				<p></p>
  			</div>
    	</div>
  		</div>
  		<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
    		<span class="sr-only">Previous</span>
  		</a>
  		<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    		<span class="carousel-control-next-icon" aria-hidden="true"></span>
    		<span class="sr-only">Next</span>
  		</a>
		</div>	

			<article class="col-md-6 col-xs-12">
				<h5 style="color:white;">Retrouvez les dernières sorties à proximité</h5>
				<p style="color:white;">Retrouvez tous les derniers films dans les UGC de la ville de Villier.</p>
				<br><br>

				<h5 style="color:white;">Retrouvez les dernières sorties à proximité</h5>
				<p style="color:white;">Retrouvez tous les derniers films dans les UGC de la ville de Villier.</p>
				<br><br>

				<h5 style="color:white;">Retrouvez les dernières sorties à proximité</h5>
				<p style="color:white;">Retrouvez tous les derniers films dans les UGC de la ville de Villier.</p>
				<br><br>

			</article>

		

	</div>
	<br><br><br><br>
</div>


</div>


</div>

</body>
</html>