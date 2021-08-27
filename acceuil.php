<?php
require_once("verifier.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>RH</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css">
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Poppins:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

  <!-- =======================================================
    Theme Name: Regna
    Theme URL: https://bootstrapmade.com/regna-bootstrap-onepage-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body>

  <!--==========================
  Header
  ============================-->
  <header id="header">


  </header><!-- #header -->

  <!--==========================
    Hero Section
  ============================-->
  <section id="hero">
    <div class="hero-container">
      <h1>Bienvenue sur la Plateforme des RH</h1>

      <a href="#portfolio" class="btn-get-started">Commencer</a>
    </div>
  </section><!-- #hero -->

  <main id="main" style="background-image:url(img/call_to_action_bg.jpg)">

    <!--==========================
      About Us Section
    ============================-->


    <!--==========================
      Facts Section
    ============================-->
    <section id="facts">
      <div class="container wow fadeIn">
        <div class="section-header">
          <h3 class="section-title">Statistique RH</h3>
        </div>
        <div class="row counters">

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up"><?php $connect = new PDO('mysql:host=localhost; dbname=bd_sortie', 'root', '');
            $req = $connect->query("SELECT COUNT(*) As nbrep FROM permission WHERE decdirp='ACCORDEE'");
            $data = $req->fetch();
            echo $data['nbrep']; ?></span>
            <p>Demande de Permission </p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up"><?php $connect = new PDO('mysql:host=localhost; dbname=bd_sortie', 'root', '');
            $req = $connect->query("SELECT COUNT(*) As nbrec FROM conge WHERE decdirc='ACCEPTEE'");
            $data = $req->fetch();
            echo $data['nbrec']; ?></span>
            <p>Demande conge</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up"><?php $connect = new PDO('mysql:host=localhost; dbname=bd_sortie', 'root', '');
            $req = $connect->query("SELECT COUNT(*) As nbrea FROM autorisation WHERE val2='OK'");
            $data = $req->fetch();
            echo $data['nbrea']; ?></span>
            <p>Demande Autorisation</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up"><?php $connect = new PDO('mysql:host=localhost; dbname=bd_sortie', 'root', '');
            $req = $connect->query("SELECT COUNT(*) As nbreex FROM explication WHERE obs='ACCEPTEE'");
            $data = $req->fetch();
            echo $data['nbreex']; ?></span>
            <p>Demande Explication</p>
          </div>

        </div>

      </div>
    </section><!-- #facts -->

    <!--==========================
      Services Section
    ============================-->


    <!--==========================
    Call To Action Section
    ============================-->

    <!--==========================
      Portfolio Section
    ============================-->
    <section id="portfolio">
      <div class="container wow fadeInUp">
        <div class="section-header">
          <h3 class="section-title">SERVICES DE GESTION</h3>
          <br /><br />
        </div>
        <div class="row">


          <div class="col-lg-12">
            <ul id="portfolio-flters">
              <li data-filter=".filter-app, .filter-card, .filter-logo, .filter-web, .filter-imp" class="filter-active">All</li>
              <li data-filter=".filter-app">Demandes</li>
              <li data-filter=".filter-card">Validations</li>
              <li data-filter=".filter-logo">Administration</li>
              <li data-filter=".filter-web">Affichages</li>
              <!--<li data-filter=".filter-imp">Impression</li>-->
            </ul>
          </div>
        </div>




        <form method="post" action="autoappel.php">
          <div class="row" id="portfolio-wrapper">
            <div class="col-lg-3 col-md-6 portfolio-item filter-app">
              <h5>AUTORISATION DE SORTIE</h5>
              <a href="autoappel.php">
                <h4>AUTORISATION DE SORTIE</h4>
                <div class="details">
                  <h4>AUTORISATION DE SORTIE</h4>
                  <span> cliquez ici !!! </span>
                </div>
              </a>
            </div>
        </form>



        <div class="col-lg-3 col-md-6 portfolio-item filter-app">
          <h5>DEMANDE DE PERMISSION</h5>
          <a href="autoappel1.php">
            <h4>DEMANDE DE PERMISSION</h4>
            <div class="details">
              <h4>DEMANDE DE PERMISSION</h4>
              <span>Cliquez ici !!!</span>
            </div>
          </a>
        </div>



        <div class="col-lg-3 col-md-6 portfolio-item filter-app">
          <h5>DEMANDE DE CONGE</h5>
          <a href="conges1.php">
            <h4>DEMANDE DE CONGE</h4>
            <div class="details">
              <h4>DEMANDE DE CONGE</h4>
              <span>Cliquez ici !!!</span>
            </div>
          </a>
        </div>



        <div class="col-lg-3 col-md-6 portfolio-item filter-app">
          <h5>DEMANDE D'EXPLICATION</h5>
          <form method="post" action="autoappel2.php">
            <a href="autoappel2.php">
              <h4>DEMANDE D'EXPLICATION</h4>
              <div class="details">
                <h4>DEMANDE D'EXPLICATION</h4>
                <span>Cliquez ici !!!</span>
              </div>
            </a>
        </div>

        <?php if ($_SESSION['NIV'] == 0 or $_SESSION['NIV'] == 1 or $_SESSION['NIV'] == 3 or $_SESSION['NIV'] == 4 or $_SESSION['NIV'] == 5) { ?>
          <div class="col-lg-3 col-md-6 portfolio-item filter-app">
            <h5>ENREGISTRER ABSENCES</h5>
            <form method="post" action="listeAbsence.php">
              <a href="listeAbsence.php">
                <h4>ENREGISTRER ABSENCES</h4>
                <div class="details">
                  <h4>ENREGISTRER ABSENCES</h4>
                  <span>par chef servise</span>
                </div>
              </a>
            </form>
          </div>
        <?php } ?>

        <?php if ($_SESSION['NIV'] == 0 or $_SESSION['NIV'] == 1 or $_SESSION['NIV'] == 3 or $_SESSION['NIV'] == 4 or $_SESSION['NIV'] == 5) { ?>
          <div class="col-lg-3 col-md-6 portfolio-item filter-web">
            <h5>LISTE DES ABSENCES</h5>
            <form method="post" action="listeAbsenceEnrg.php">
              <a href="listeAbsenceEnrg.php">
                <h4>Afficher la liste des absences</h4>
                <div class="details">
                  <h4>Afficher la liste des absences</h4>
                  <span>par chef servise</span>
                </div>
              </a>
            </form>
          </div>
        <?php } ?>

        <?php if ($_SESSION['NIV'] == 0 or $_SESSION['NIV'] == 4 or $_SESSION['NIV'] == 5) { ?>
          <div class="col-lg-3 col-md-6 portfolio-item filter-web">
            <h5>LISTE DES ABSENCES COORDINATION</h5>
            <form method="post" action="listeAbsenceCoor.php">
              <a href="listeAbsenceCoor.php">
                <h5>LISTE DES ABSENCES COORDINATION</h5>
                <div class="details">
                  <h4>Afficher la liste des absences pour la coordination</h4>
                  <span>par la coordination</span>
                </div>
              </a>
            </form>
          </div>
        <?php } ?>

        <?php if ($_SESSION['NIV'] == 0 or $_SESSION['NIV'] == 5) { ?>
          <div class="col-lg-3 col-md-6 portfolio-item filter-web">
            <h5>LISTE DES ABSENCES DIRECTION</h5>
            <form method="post" action="listeAbsenceDirect.php">
              <a href="listeAbsenceDirect.php">
                <h5>LISTE DES ABSENCES DIRECTION</h5>
                <div class="details">
                  <h4>Afficher la liste des absences pour la direction</h4>
                  <span>par la direction</span>
                </div>
              </a>
            </form>
          </div>
        <?php } ?>

        <?php if ($_SESSION['NIV'] == 0 or $_SESSION['NIV'] == 1 or $_SESSION['NIV'] == 3 or $_SESSION['NIV'] == 4 or $_SESSION['NIV'] == 5) { ?>
          <div class="col-lg-3 col-md-6 portfolio-item filter-card">
            <h5>VALIDER AUTORISATION SORTIE (Chef service) </h5>
            <form method="post" action="modifauto1.php">
              <a href="modifauto1.php">
                <h5>VALIDER AUTORISATION SORTIE (Chef service) </h5>
                <div class="details">
                  <h4>VALIDER AUTORISATION SORTIE (Chef service) </h4>
                  <span>par chef service</span>
                </div>
              </a>
            </form>
          </div>
        <?php } ?>


        <?php if ($_SESSION['NIV'] == 0 or $_SESSION['NIV'] == 3 or $_SESSION['NIV'] == 4 or $_SESSION['NIV'] == 5) { ?>
          <div class="col-lg-3 col-md-6 portfolio-item filter-card">
            <h5>VALIDER AUTORISATION SORTIE (RH) </h5>
            <form method="post" action="modifauto2.php">
              <a href="modifauto2.php">
                <h5>VALIDER AUTORISATION SORTIE (RH) </h5>
                <div class="details">
                  <h4>VALIDER AUTORISATION SORTIE</h4>
                  <span> par RH</span>
                </div>
              </a>
            </form>
          </div>
        <?php } ?>


        <?php if ($_SESSION['NIV'] == 9) { ?>
          <div class="col-lg-3 col-md-6 portfolio-item filter-card">
            <h5>ENREGISTRER HEURE DE SORTIE </h5>
            <form method="post" action="modifauto3.php">
              <a href="modifauto3.php">
                <img src="img/portfolio/card2.jpg" alt="">
                <div class="details">
                  <h5>ENREGISTRER HEURE DE SORTIE </h5>
                  <span>cliquez ici !!!</span>
                </div>
              </a>
            </form>
          </div>
        <?php } ?>


        <?php if ($_SESSION['NIV'] == 0 or $_SESSION['NIV'] == 1 or $_SESSION['NIV'] == 3 or $_SESSION['NIV'] == 4 or $_SESSION['NIV'] == 5) { ?>
          <div class="col-lg-3 col-md-6 portfolio-item filter-card">
            <h5>VALIDER PERMISSION (chef service)</h5>
            <form method="post" action="majper1.php">
              <a href="majper1.php">
                <h5>VALIDER PERMISSION (chef service)</h5>
                <div class="details">
                  <h4>VALIDER PERMISSION (chef service)</h4>
                  <span>par chef de service</span>
                </div>
              </a>
            </form>
          </div>
        <?php } ?>

        <?php if ($_SESSION['NIV'] == 0 or $_SESSION['NIV'] == 1 or $_SESSION['NIV'] == 3 or $_SESSION['NIV'] == 4 or $_SESSION['NIV'] == 5) { ?>
          <div class="col-lg-3 col-md-6 portfolio-item filter-card">
            <h5>VALIDER CONGE (chef service)</h5>
            <form method="post" action="majcong.php">
              <a href="majcong.php">
                <h5>VALIDER CONGE (chef service)</h5>
                <div class="details">
                  <h4>VALIDER CONGE (CS)</h4>
                  <span>par chef de service</span>
                </div>
              </a>
            </form>
          </div>
        <?php } ?>

        <?php if ($_SESSION['NIV'] == 0 or $_SESSION['NIV'] == 3 or $_SESSION['NIV'] == 4 or $_SESSION['NIV'] == 5) { ?>
          <div class="col-lg-3 col-md-6 portfolio-item filter-card">
            <h5>VALIDER CONGE (RH)</h5>
            <form method="post" action="majcong2.php">
              <a href="majcong2.php">
                <h5>VALIDER CONGE (RH)</h5>
                <div class="details">
                  <h4>VALIDER CONGE (RH)</h4>
                  <span>par RH</span>
                </div>
              </a>
            </form>
          </div>
        <?php } ?>

        <?php if ($_SESSION['NIV'] == 0 or $_SESSION['NIV'] == 3 or $_SESSION['NIV'] == 4 or $_SESSION['NIV'] == 5) { ?>
          <div class="col-lg-3 col-md-6 portfolio-item filter-card">
            <h5>VALIDER PERMISSION (RH)</h5>
            <form method="post" action="modifper1.php">
              <a href="modifper1.php">
                <h5>VALIDER PERMISSION (RH)</h5>
                <div class="details">
                  <h4>VALIDER PERMISSION RH</h4>
                  <span> par RH</span>
                </div>
              </a>
          </div>
        <?php } ?>

        <?php if ($_SESSION['NIV'] == 0 or $_SESSION['NIV'] == 3 or $_SESSION['NIV'] == 4 or $_SESSION['NIV'] == 5) { ?>
          <div class="col-lg-3 col-md-6 portfolio-item filter-card">
            <h5>VALIDER DEMANDE D'EXPLICATION (RH)</h5>
            <form method="post" action="explicationrh.php">
              <a href="explicationrh.php">
                <h5>VALIDER DEMANDE D'EXPLICATION (RH)</h5>
                <div class="details">
                  <h4>VALIDER DEMANDE D'EXPLICATION RH</h4>
                  <span> par RH</span>
                </div>
              </a>
          </div>
        <?php } ?>

        <div class="col-lg-3 col-md-6 portfolio-item filter-web">
          <h5>LISTE DES AUTORISATIONS VALIDEES</h5>
          <form method="post" action="listso.php">
            <a href="listso.php">
              <h5>LISTE DES AUTORISATIONS VALIDEES</h5>
              <div class="details">
                <h4>LISTE DES AUTORISATIONS VALIDEES</h4>
                <span>cliquez ici !!!</span>
              </div>
            </a>
          </form>
        </div>



        <div class="col-lg-3 col-md-6 portfolio-item filter-web">
          <h5>LISTE DES CONGES VALIDEES</h5>
          <form method="post" action="listcong.php">
            <a href="listcong.php">
              <h5>LISTE DES CONGES VALIDEES</h5>
              <div class="details">
                <h4>LISTE DES CONGES VALIDEES</h4>
                <span>cliquez ici !!!</span>
              </div>
            </a>
          </form>
        </div>

        <div class="col-lg-3 col-md-6 portfolio-item filter-web">
          <h5>LISTE DES DEMANDES D'EXPLICATIONS</h5>
          <form method="post" action="listexplication.php">
            <a href="listexplication.php">
              <h5>LISTE DES DEMANDES D'EXPLICATIONS</h5>
              <div class="details">
                <h4>LISTE DES DEMANDES D'EXPLICATIONS</h4>
                <span>cliquez ici !!!</span>
              </div>
            </a>
          </form>
        </div>


        <div class="col-lg-3 col-md-6 portfolio-item filter-web">
          <h5>LISTE DES PERMISSIONS VALIDEES</h5>
          <form method="post" action="listepermission_validee.php">
            <a href="listepermission_validee.php">
              <h5>LISTE DES PERMISSIONS VALIDEES</h5>
              <div class="details">
                <h4>LISTE DES PERMISSIONS VALIDEES</h4>
                <span>cliquez ici !!!</span>
              </div>
            </a>
          </form>
        </div>

        <?php if ($_SESSION['NIV'] == 0 or $_SESSION['NIV'] == 3 or $_SESSION['NIV'] == 4 or $_SESSION['NIV'] == 5) { ?>
          <div class="col-lg-3 col-md-6 portfolio-item filter-web">
            <h5>ARCHIVAGES PERMISSIONS</h5>
            <form method="post" action="archivep.php">
              <a href="archivep.php">
                <h5>ARCHIVAGES PERMISSIONS</h5>
                <div class="details">
                  <h4>ARCHIVAGES PERMISSIONS</h4>
                  <span> cliquez ici !!!</span>
                </div>
              </a>
          </div>
        <?php } ?>

        <?php if ($_SESSION['NIV'] == 0) { ?>
          <div class="col-lg-3 col-md-6 portfolio-item filter-logo">
            <h5>ADMINISTRATION</h5>
            <a href="">
              <h4>ADMINISTRATION</h4>
              <div class="details">
                <h4>ADMINISTRATION</h4>
                <span>Administrateur</span>
              </div>
            </a>
          </div>
        <?php } ?>

      </div>

      </div>
    </section><!-- #portfolio -->



    <!--==========================
      Contact Section
    ============================-->


    <!--==========================
    Footer
  ============================-->
    <footer id="footer">
      <div class="footer-top">
        <div class="container">

        </div>
      </div>

      <div class="container">
        <div class="copyright">
          &copy; Copyright <strong>SOREPCO</strong>. All Rights Reserved
        </div>

      </div>
    </footer><!-- #footer -->

    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="lib/jquery/jquery.min.js"></script>
    <script src="lib/jquery/jquery-migrate.min.js"></script>
    <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD8HeI8o-c1NppZA-92oYlXakhDPYR7XMY"></script>

    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/superfish/hoverIntent.js"></script>
    <script src="lib/superfish/superfish.min.js"></script>

    <!-- Contact Form JavaScript File -->
    <script src="contactform/contactform.js"></script>

    <!-- Template Main Javascript File -->
    <script src="js/main.js"></script>

</body>

</html>