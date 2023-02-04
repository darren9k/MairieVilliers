<?php 
require_once("Controller/connection.php"); 



if(session_status() === PHP_SESSION_NONE){
       session_start(); //On lance à partir d'ici la session si elle n'est pas lancée pour éviter d'avoir des doublons dans le code.
    } else {
        unset($_SESSION['user']); 
        exit();
    }
?>

<!DOCTYPE html>
<html>
<head>
	<meta name ="viewport" content="width=device-with, initial-scale=1" charset="utf-8">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/feuille_style.css">
	<title>Page de connexion</title>
	<meta charset="utf-8">
</head>
<body>
    <br>
    <br>
    <br>
    <br>
	<style>
		

		*{
			padding : 0; 
			margin:0;
			box-sizing: border-box;
		}


		.myrow{
			background: white;
			border-radius: 30px;
			box-shadow: 12px 12px 22px rgb(91,60,17);
		}


		img{
			
			border-top-left-radius:  30px;
			border-bottom-left-radius: 30px;

		}

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
		/*On dessine le bouton en noir*/
		.btn1:hover{
			background: white;
			border:1px solid;
			color:#765e32;
		}


	</style>
    <section class="Form my-4 mx-5">
        <div class="container">
            <div class="row myrow no-gutters">
                <div class="col-lg-5">
                    <img src="img/Famille5.jpg" class="img-fluid" alt="" style="height: 500px;">
                </div>
                <div class="col-lg-7 px-5 pt-5">
                	<h1 class="font-weight-bold py-3" style="color: #765e32;">Connexion</h1>
                	<h4 style="color: #765e32;">Saisissez vos informations</h4>
                    <form method="POST" action="">
                        <div class="form-row">
                            <div class="col-lg-7">
                                <input type="email" name="email" class="form-control my-2 p-3" placeholder="Adresse email" required>
                            </div>
                        </div>
                    
                        <div class="form-row">
                            <div class="col-lg-7">
                                <input type="password" name="mdp" class="form-control my-2 p-3" placeholder="********" required>
                            </div>
                        </div>
                    
                         <div class="form-row">
                            <div class="col-lg-7">
                            	<button type="submit" name="connexion" class="btn1 mt-3 mb-5">Connexion</button><?php
                                

                                if($test_co == 2){
                                    echo '<div class="alert alert-danger" role="alert">
                                        Identifiants incorrets.
                                    </div>'; 
                                    }
                                if($test_co == 1){
                                    //session_start();

                                    //echo $email;   
                                    //echo $mdp; 
                                    file_put_contents('stuff.txt', $email); 
                                    
                                    $_SESSION['user'] = 1;
                                    header('Location: index.php?page=0'); 
                                       
                                    }

                                require_once("Controller/auth.php");
                                //Dans le cas ou l'utilisateur est déjà connecté    
                                if (is_connected()){
                                    header('Location: index.php?page=0');
                                }
                            ?>
                            </div>
                        </div>

                        <a href="#">Mot de passe oublié</a>
                        <p>Vous n'etes pas inscrit ?<a href="inscription.php"> Inscrivez vous</a></p>

                    </form>
                </div>
            </div>
        </div>
        
    </section>
</body>
</html>