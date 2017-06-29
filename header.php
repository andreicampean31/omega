<?php
  include 'dbh.php';
  session_start();
 ?>

 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <meta name="description" content="">
     <meta name="author" content="Campean Andrei">
     <title>Omega Group</title>


     <!-- Bootstrap Core CSS -->
     <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

     <!-- CSS pt butone -->
     <link href="css/button.css" rel="stylesheet">

     <!-- Jquery scripts && boostrap scripts-->
     <script type="text/javascript" src="lib\jquery\jquery.min.js"></script>
     <script type="text/javascript" src="lib\bootstrap\js\bootstrap.min.js"></script>


     <!-- Custom Fonts -->
     <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
     <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
     <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

     <!-- Theme CSS -->
     <link href="css/freelancer.min.css" rel="stylesheet">
     <link rel="stylesheet" href="css/fixedheader.css">
     <link rel="stylesheet" href="css/fixedheader_theme.css">



     <!-- Temporary navbar container fix until Bootstrap 4 is patched -->


     <style>
     .navbar-toggler {
         z-index: 1;
     }

     @media (max-width: 576px) {
         nav > .container {
             width: 100%;
         }
     }


     </style>

   <body id="page-top" class="index">
     <!-- Navigation -->
     <nav id="mainNav" class="navbar fixed-top navbar-toggleable-md navbar-light">
         <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarExample" aria-controls="navbarExample" aria-expanded="false" aria-label="Toggle navigation">
             Menu <i class="fa fa-bars"></i>
         </button>
         <div class="container">
             <a class="navbar-brand page-scroll" href="home.php">Omega Group</a>
             <div class="collapse navbar-collapse" id="navbarExample">
                 <ul class="navbar-nav ml-auto">
                      <?php
                        if(isset($_SESSION['uid'])){
                          echo '<li class="nav-item">
                              <a class="nav-link page-scroll" href="home.php">Home</a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link page-scroll" href="ofertare.php">Oferte</a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link page-scroll" href="comanda.php?sortare=">Comenzi</a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link page-scroll" href="includes/logout.inc.php">Logout</a>
                          </li>';
                        }
                        else{
                          echo "You are not logged in and you can't see the content of this page.";
                        }
                       ?>
                 </ul>
             </div>
         </div>
     </nav>
     <br> <br>
     <?php
        //afisare sectiune norificari numai pe pagina home
        //Header
        $url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
        if(strpos($url, 'home.php') != false){
          echo '
          <header>
              <div class="container">
                  <div class="intro-text">
                      <span class="name">Program de facturare</span>
                      <span class="skills">Atentie: </span></br>';
                      $sql_notify = "SELECT denumire_produs, DATEDIFF(termen_livrare, CURRENT_DATE) FROM comanda WHERE DATEDIFF(termen_livrare, CURRENT_DATE) < 0";
                      $result_notify = mysqli_query($conn, $sql_notify);
                      while($row_notify = mysqli_fetch_assoc($result_notify)){
                        echo 'Ati depasit termenul de livrare la '. $row_notify['denumire_produs']. ' cu '. $row_notify['DATEDIFF(termen_livrare, CURRENT_DATE)'] * (-1). ' zile </br>';
                      }

                  echo '</div>
              </div>
          </header>';
        }

      ?>
     <!-- Portfolio Grid Section -->
     <section id="portfolio">
         <div class="container">
