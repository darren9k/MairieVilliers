<?php 
		session_start();
		include("structure/headerco.php");

	require_once("controleur/controleur.class.php"); 
	require_once("controleur/config_db.php"); 
	//instanciation de la classe Controleur
	$unControleur = new Controleur($serveur, $bdd, $user, $mdp);
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Mairie de Villiers</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/headers/">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
    

    <!-- Bootstrap core CSS -->
<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>


    <link href="headers.css" rel="stylesheet">
  </head>
<main>
<body>

	<center>
		<br/><br/><br/><br/>
		<img src="images/mairie.png" width="600" height="300">
		<br/><br/><br/><br/>

	


	<?php
		if (isset($_POST['SeConnecter']))
		{
			$email = $_POST['email']; 
			$mdp = $_POST['mdp']; 
			//vérification dans la base 
			$chaine ="*"; 
			$where =array("email"=>$email, "mdp"=>$mdp);
			$unControleur->setTable ("admin"); 
			$unAdmin = $unControleur->selectWhere($chaine, $where); 
			//var_dump($unUser);
			if (isset($unAdmin['email'])){
				$_SESSION['email'] = $unAdmin['email']; 
				$_SESSION['role'] = $unAdmin['role'];
				//bienvenue en JS 
				header("Location: index.php");
			}else{
				echo "Veuillez vérifier vos identifiants"; 
			}

		}

		if( ! isset($_SESSION['email'] ))
		{
		require_once("vue/vue_connexion.php"); 
		}
		else 
			{
		

		?>
	
	<br/> <br/> <br/>
	<?php

		if (isset($_GET['page'])) 
			$page = $_GET['page']; 
		else 
			$page = 0; 
		
		switch($page){
			case 1 : require_once("gestion_typeevents.php"); 	
					 break;
			case 2 : require_once("gestion_evenements.php"); 	
					 break;
			case 3 : require_once("gestion_typeprestas.php");
					 break;
			case 4 : require_once("gestion_prestas.php"); 	
					 break;
			case 5 : require_once("gestion_familles.php"); 	
					 break;
			case 6 : require_once("inscription.php"); 	
					 break;
			case 7 : unset($_SESSION);  
					 session_destroy(); 
					 header("Location: index.php");
					 break;
			case 0 : require_once("index.php"); 	
					 break;
			default : require_once("erreur.php"); 	
					 break;


				}
}
	?>


<?php 

///////////////// STATISTIQUES ////////////////////


// STATISTIQUES GENRE 
$row = $unControleur->countFemme(); //retourne une ligne ; 
$roww = $unControleur->countHomme(); //retourne une ligne 

// STATISTIQUES PRESTATION ET EVENEMENT 

$row1 = $unControleur->nbLPE(); //retourne le nombre d'utilisateur inscrit la prestation petite enfance

$row2 = $unControleur->nbBM(); //retourne le nombre d'utilisateur inscrit la prestation Bien manger 

$row3 = $unControleur->nbAC(); //retourne le nombre d'utilisateur inscrit la prestation ecole albert camus 

?>




<?php 
if (isset($_GET['page'])) 
      $page = $_GET['page']; 
    else 
      $page = 0; 

if($page==0 and isset($_SESSION['email'])):?>

<h3> Nombre inscrit par prestation </h3>
<!-- Barre  -->
<div style="width: 50%; height: 50%;">
   <canvas id="bar-chart" width="800" height="450">
          	

  		<script type="text/javascript">
        // Bar chart
        new Chart(document.getElementById("bar-chart"), {
                  type: 'doughnut',
                  data: {
                  labels: ["La petite enfance", "Ecole albert camus", "Bien manger"],
                  datasets: [
                  {
                    label: "Nombre d'inscrit",
                    backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f"],

                    <?php

                    $laPetiteEnfance = 0; 
                    $albertCamus = 0; 
                    $bienManger = 0; 

                    foreach ($row1 as $rows) {
                      $laPetiteEnfance = $rows['count(*)']; 
                    }

                     foreach ($row2 as $rows) {
                      $albertCamus = $rows['count(*)']; 
                    }

                     foreach ($row3 as $rows) {
                      $bienManger = $rows['count(*)']; 
                    }

			               echo "data: [$laPetiteEnfance,$albertCamus,$bienManger]"; 

                      ?>
                  }
                    ]
                  },
              options: {
              legend: { display: false },
              title: {
              display: true,
              text: ''
            }
            }

          });


    </script>

   </canvas>





</div>

<br><br><br>

<h3>Nombre hommes et femmes</h3>
<div style="width: 50%; height: 50%;">
   <canvas id="bar-chart2" width="800" height="450">
    <script type="text/javascript">
        
        new Chart(document.getElementById("bar-chart2"), 

        {
                  type: 'pie',
                  data: {
                  labels: ["homme", "femme"],
                  datasets: 
                  [{
                      label: 'My first dataset',
                      backgroundColor: ["#3e95cd", "#c45850"],
                    
                    <?php
                    	$homme = 0; $femme = 0; 

                    	foreach ($row as $rows) {
                    		$homme = $rows['count(*)']; 
                    	}

                    	foreach ($roww as $rows) {
                    		$femme = $rows['count(*)']; 
                    	}

                     echo "data: [$femme,$homme]"; 
                      ?>
                  }
                    ]
                  },
              options: {
              legend: { display: false },
              title: {
              display: true,
              text: ''
            }
            }

          });

    </script>
   </canvas>

</div>

<?php endif; ?>


	</center>
<?php
	include("structure/footer.php");
?>
</body>
</main>
</html>
