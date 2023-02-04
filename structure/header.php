<!-- header de la page --> 
<?php
if(session_status() === PHP_SESSION_NONE){
       session_start(); 
    }
    
require_once("Controller/auth.php"); //systeme d'authentification 
?>
<head>
	 <meta charset="utf-8">
    <meta name ="viewport" content="width=device-with, initial-scale=1" charset="utf-8">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/feuille_style.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <title>Mairie de Villiers</title>
</head>

<body class="body">

  <style>
    .btn2:hover{
      background: white;
      border:1px solid;
      color:#765e32;
    }
  </style>
    
  <div class="container-fluid">

		<nav class="navbar  navbar-expand-md navbar-light fixed-top" style="background-color: #e1d2b8;" id="navigbar">


     <a class="nav-link" style="color: #765e32; font-size: 50px" href="index.php?page=0" style="text-decoration: none;">Villiers sur Marne</a> 

      <!--<a class="navbar-brand" href="#">Villiers sur Marne</a>-->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#my-nav-bar" aria-controls="    navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="my-nav-bar">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link font-weight-bold px-2" href="index.php?page=0">Accueil <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link font-weight-bold px-2" href="index.php?page=1">Information</a>
      </li>
      <li class="nav-item">
        <a class="nav-link font-weight-bold px-2" href="index.php?page=2">Evenement</a>
      </li>
      <li class="nav-item">
        <a class="nav-link font-weight-bold px-2" href="index.php?page=3">Prestation</a>
      </li>
      <li class="nav-item">
        <!-- Si on est pas connecté alors on demande a se connecter-->
        <?php if(!is_connected()): ?>
        <a class="nav-link font-weight-bold px-5 disabled" href="index.php?page=4">Connexion/Inscription</a>
        <?php endif;  ?>

         <?php if(is_connected()): ?>
        <a class="nav-link font-weight-bold px-5 disabled" href="index.php?page=5">Compte</a>
        <?php endif;  ?>
      </li>

    <?php if(is_connected()): ?>
      <li class="nav-item">   
        <a href="logout.php"><button type="submit" class="btn btn2" style="background-color:#765e32; color: #e1d2b8;" >Se déconnecter</button></a>
      </li>
    <?php endif;  ?>

    


    </ul>
  </div>
</nav>
</div>

<br>
	
</body>