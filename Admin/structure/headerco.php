 <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Intranet - Mairie</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/headers/">

    

    <!-- Bootstrap core CSS -->
<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

<link href="./css/bootstrap.min.css" rel="stylesheet">

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

  <body>




  <header class="p-3  text-white"  style="background-color: #784208;">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
          <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"/></svg>
        </a>

<?php

  if(isset($_SESSION['email']))
  {
    echo'
    <div style="margin-left: 5%">
    <h1>Intranet</h1> </div>

    <div style = "margin-left : 100px">
          <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><a href="index.php?page=0" class="nav-link px-2 text-white">Statistiques</a></li>
          <li><a href="index.php?page=1" class="nav-link px-2 text-white">Type Event</a></li>
          <li><a href="index.php?page=2" class="nav-link px-2 text-white">Evenement</a></li>
          <li><a href="index.php?page=3" class="nav-link px-2 text-white">Type Presta</a></li>
          <li><a href="index.php?page=4" class="nav-link px-2 text-white">Prestation</a></li>
          <li><a href="index.php?page=5" class="nav-link px-2 text-white">Famille</a></li>
        </ul> 

      </div>'

        ;
    

        echo'

        <div class="text-end"  style = "margin-left : 200px">
         
          <button type="button" onclick=window.location.href="index.php?page=7"; class="btn btn-warning">Deconnexion</button>
        </div>';
      }

     else{

      echo'
        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
         
          <li><a href="index.php?page=0" class="nav-link px-2 text-white">Statistiques</a></li>
        </ul>

      
      ';
      }
      ?>
      </div> 
    </div>
  </header>




</body>