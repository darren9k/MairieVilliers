<!-- PRESTATION -->
<!-- different service proposé par la mairie -->

<?php require_once("Controller/auth.php");?>

<!DOCTYPE html>
<html>
<head>
	<meta name ="viewport" content="width=device-with, initial-scale=1" charset="utf-8">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/feuille_style.css">
	<title>Prestation</title>
	<meta charset="utf-8">
</head>
<body>

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

    .titre{
      animation : transitionOne 2s;
    }

    .enfance {
      animation : transitionOne 2s;
    }
    .manger {
      animation : transitionOne 2s;
    }

    .ecole {
      animation : transitionOne 2s;
    }





  </style>
<br>

<div class="container-fluid titre" style="background-color: #ddd2bc;">
  <!-- TITRE -->
	<div class="container-fluid" style="margin-top: -50px;">
		<div class="container">
      <div class="px-4 py-5 my-5 text-center" style="margin-top : -10px;">
        <h1 class="display-5 fw-bold" style="color: #765e32; font-size: 100px;">Préstations</h1>
        <div class="col-lg-6 mx-auto">
          <p class="lead mb-4" style="font-weight: bold;">La ville de Villiers-sur-Marne propose très souvent des prestations gratuites pour subvenir à vos besoins.</p>
           <p class="lead mb-4"></p>
          <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
          </div>
        </div>
      </div>
		  </div>
	 </div>

  <!-- GARDERIE -->
	<div class="container enfance my-5" style="background-color: #e67e30;">
    <div class="row p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center rounded-3 border shadow-lg">
      <div class="col-lg-7 p-3 p-lg-5 pt-lg-3">
        <h1 class="display-4 fw-bold lh-1" style="font-weight: bold;color: white; ">La petite enfance </h1>
        <p class="lead" style="color:white;">Garderie</p>
        <div class="d-grid gap-2 d-md-flex justify-content-md-start mb-4 mb-lg-3">
          <?php if(is_connected()): ?>
         <a href="Lapetiteenfance.php"> 
         <?php endif; ?>
         <?php if(!is_connected()): ?>
           <a href="index.php?page=4">
           <?php endif; ?> 
          <button type="button" class="btn btn1 mt-3 mb-5 btn-lg px-4" style="background-color:#c66318; color: #F5F5DC;">En Savoir plus...</button></a>
        </div>
      </div>
      <div class="col-lg-4 offset-lg-1 p-0 overflow-hidden shadow-lg">
          <img class="rounded-lg-3" src="img/enfance.jpeg" alt="" width="350">
      </div>
    </div>
  </div>


  <!-- RESTAURATION -->
  <div class="container manger my-5" style=" background-color:#f760fd;">
    <div class="row p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center rounded-3 border shadow-lg">
      <div class="col-lg-7 p-3 p-lg-5 pt-lg-3">
        <h1 class="display-4 fw-bold lh-1"  style="font-weight: bold; color: white;" >Bien manger c'est le début du bonheur</h1>
        <p class="lead" style="color: white;">Service de restauration rapide</p>
        <div class="d-grid gap-2 d-md-flex justify-content-md-start mb-4 mb-lg-3">

          <?php if(is_connected()): ?>
         <a href="Bienmanger.php"> 
         <?php endif; ?>
         <?php if(!is_connected()): ?>
           <a href="index.php?page=4">
           <?php endif; ?> 

           <button type="button" class="btn btn1 mt-3 mb-5 btn-lg px-4" style="background-color:#f41bfc; color: #F5F5DC;">En Savoir plus...</button></a>
        </div>
      </div>
      <div class="col-lg-4 offset-lg-1 p-0 overflow-hidden shadow-lg">
          <img class="rounded-lg-3" src=" img/bien.jpg" alt="" width="350">
      </div>
    </div>
  </div>

  <!-- ECOLE  -->
  <div class="container ecole my-5" style="background-color: #fd1857;">
    <div class="row p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center rounded-3 border shadow-lg">
      <div class="col-lg-7 p-3 p-lg-5 pt-lg-3">
        <h1 class="display-4 fw-bold lh-1" style="font-weight: bold; color: white;">Ecole Albert Camus</h1>
        <p class="lead" style="color: white;">Ecole élémentaire.</p>
        <div class="d-grid gap-2 d-md-flex justify-content-md-start mb-4 mb-lg-3">

          <?php if(is_connected()): ?>
         <a href="EcoleAlbertCamus.php"> 
         <?php endif; ?>
         <?php if(!is_connected()): ?>
           <a href="index.php?page=4">
           <?php endif; ?> 

           <button type="button" class="btn btn1 mt-3 mb-5 btn-lg px-4" style="background-color:#dc023e; color: #F5F5DC;">En Savoir plus...</button></a>
        </div>
      </div>
      <div class="col-lg-4 offset-lg-1 p-0 overflow-hidden shadow-lg">
          <img class="rounded-lg-3" src="img/ecole.jpg" alt="" width="350">
      </div>
    </div>
  </div>

</div>


</body>
</html>

