
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
        <h1 class="display-5 fw-bold" style="color: #765e32; font-size: 100px;">Evenement</h1>
        <div class="col-lg-6 mx-auto">
          <p class="lead mb-4" style="font-weight: bold;">Participez à tous les évenements de la ville.</p>
           <p class="lead mb-4"></p>
          <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
          </div>
        </div>
      </div>
		  </div>
	 </div>

  <!-- DISCOURS -->
	<div class="container enfance my-5" style="background-color: #1FBB13 ;">
    <div class="row p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center rounded-3 border shadow-lg">
      <div class="col-lg-7 p-3 p-lg-5 pt-lg-3">
        <h1 class="display-4 fw-bold lh-1" style="font-weight: bold;color: white; "> Discours du Maire </h1>
        <p class="lead" style="color:white;">Discours</p>
        <div class="d-grid gap-2 d-md-flex justify-content-md-start mb-4 mb-lg-3">
          <?php if(is_connected()): ?>
         <a href="discours.php"> 
         <?php endif; ?>
         <?php if(!is_connected()): //Empecher l'user d'accéder à la page ?>
           <a href="index.php?page=4">
           <?php endif; ?> 
          <button type="button" class="btn btn1 mt-3 mb-5 btn-lg px-4" style="background-color:#125E0C; color: #F5F5DC;">En Savoir plus...</button></a>
        </div>
      </div>
      <div class="col-lg-4 offset-lg-1 p-0 overflow-hidden shadow-lg">
          <img class="rounded-lg-3" src="img/jacques-alain-benisti.jpg" alt="" width="350">
      </div>
    </div>
  </div>


  <!-- CONCERT -->
  <div class="container manger my-5" style=" background-color:#D62F2F;">
    <div class="row p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center rounded-3 border shadow-lg">
      <div class="col-lg-7 p-3 p-lg-5 pt-lg-3">
        <h1 class="display-4 fw-bold lh-1"  style="font-weight: bold; color: white;" >Concert Booba</h1>
        <p class="lead" style="color: white;">Concert</p>
        <div class="d-grid gap-2 d-md-flex justify-content-md-start mb-4 mb-lg-3">

          <?php if(is_connected()): ?>
         <a href="concert.php"> 
         <?php endif; ?>
         <?php if(!is_connected()): //Empecher l'user d'accéder à la page ?>
           <a href="index.php?page=4">
           <?php endif; ?> 

           <button type="button" class="btn btn1 mt-3 mb-5 btn-lg px-4" style="background-color:#912121; color: #F5F5DC;">En Savoir plus...</button></a>
        </div>
      </div>
      <div class="col-lg-4 offset-lg-1 p-0 overflow-hidden shadow-lg">
          <img class="rounded-lg-3" src=" img/concert.jpeg" alt="" width="350">
      </div>
    </div>
  </div>

  

</div>





</body>
</html>