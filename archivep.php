<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
    <meta charset="UTF-8">
    <title>Permissions archivees</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="description" content="">
    <meta name="keywords" content="coco bootstrap template, coco admin, bootstrap,admin template, bootstrap admin,">
    <meta name="author" content="Huban Creative">

    <!-- Base Css Files -->
    <link href="assets/libs/jqueryui/ui-lightness/jquery-ui-1.10.4.custom.min.css" rel="stylesheet" />
    <link href="assets/libs/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/libs/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
    <link href="assets/libs/fontello/css/fontello.css" rel="stylesheet" />
    <link href="assets/libs/animate-css/animate.min.css" rel="stylesheet" />
    <link href="assets/libs/nifty-modal/css/component.css" rel="stylesheet" />
    <link href="assets/libs/magnific-popup/magnific-popup.css" rel="stylesheet" />
    <link href="assets/libs/ios7-switch/ios7-switch.css" rel="stylesheet" />
    <link href="assets/libs/pace/pace.css" rel="stylesheet" />
    <link href="assets/libs/sortable/sortable-theme-bootstrap.css" rel="stylesheet" />
    <link href="assets/libs/bootstrap-datepicker/css/datepicker.css" rel="stylesheet" />
    <link href="assets/libs/jquery-icheck/skins/all.css" rel="stylesheet" />
    <!-- Code Highlighter for Demo -->
    <link href="assets/libs/prettify/github.css" rel="stylesheet" />

    <!-- Extra CSS Libraries Start -->
    <link href="assets/libs/jquery-datatables/css/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="assets/libs/jquery-datatables/extensions/TableTools/css/dataTables.tableTools.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/style.css" rel="stylesheet" type="text/css" />
    <!-- Extra CSS Libraries End -->
    <link href="assets/css/style-responsive.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
    <link rel="shortcut icon" href="assets/img/favicon.ico">
    <link rel="apple-touch-icon" href="assets/img/apple-touch-icon.png" />
    <link rel="apple-touch-icon" sizes="57x57" href="assets/img/apple-touch-icon-57x57.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="assets/img/apple-touch-icon-72x72.png" />
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-touch-icon-76x76.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="assets/img/apple-touch-icon-114x114.png" />
    <link rel="apple-touch-icon" sizes="120x120" href="assets/img/apple-touch-icon-120x120.png" />
    <link rel="apple-touch-icon" sizes="144x144" href="assets/img/apple-touch-icon-144x144.png" />
    <link rel="apple-touch-icon" sizes="152x152" href="assets/img/apple-touch-icon-152x152.png" />
    <form method="post" action="acceuil.php">
        <button type="submit" class="btn btn-success" value="RETOUR"> RETOUR</button>
    </form>
    <h1>LISTE DES PERMISSIONS ARCHIVEES</h1>

</head>

<body align="center">
    <?php
    //connection au serveur:
    $cnx = @mysql_connect("localhost", "root", "") or die(mysql_error());
    mysql_select_db("bd_sortie", $cnx) or die(mysql_error());

    //requête SQL:
    $sql = "SELECT *
	      FROM permission
		  WHERE decrespp='ACCEPTEE'
			AND decrhp='ACCORDEE'
            AND decdirp='ACCORDEE'
            AND dateretp < CURDATE()
	      ORDER BY idp";
    //exécution de la requête:
    $resultat = mysql_query($sql, $cnx);
    if ($resultat) {
        //echo "<h1>Liste des demandes en attente</h1>\n";
        //Nombre de lignes contenu dans resultat
        $nbrAuto = mysql_num_rows($resultat);
        //récuperation de chaque ligne et affichage dans un tableau


        ?>
        <div class="col-md-12 col-xs-12">
            <table id="datatables-1" class="table table-striped table-bordered" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>DATE</th>
                        <th>MATRICULE</th>
                        <th>NOM</th>
                        <th>PRENOM</th>
                        <th>SERVICE</th>
                        <th>SITE DE TRAVAIL</th>
                        <th>SOLLICITE UNE ABSCENCE PENDANT</th>
                        <th>DATE DE DEPART</th>
                        <th>HEURE DE DEPART</th>
                        <th>DATE DE RETOUR</th>
                        <th>HEURE DE RETOUR</th>
                        <th>MOTIF</th>
                        <th>DECISION RESPONSABLE</th>
                        <th>HEURE(S)/JOUR(S) ACCORDES(E)</th>
                        <th>REMPLACANT</th>
                        <th>FAIT A </th>
                        <th>LE</th>
                        <th>DECISION DES RH</th>
                        <th>NOMBRE HEURE(S)/JOUR(S)</th>
                        <th>DECISION DIRECTION</th>
                        <th>NOMBRE HEURE(S)/JOUR(S)</th>
                        <th>ETATS</th>
                    </tr>
                </thead>
                <tbody>
                    <?php

                    while ($auto = mysql_fetch_array($resultat)) {
                        ?>
                        <tr>
                            <td><?php echo ($auto['datejrp']) ?></td>
                            <td><?php echo ($auto['matp']) ?></td>
                            <td><?php echo ($auto['nomp']) ?></td>
                            <td><?php echo ($auto['prenomp']) ?></td>
                            <td> <?php echo ($auto['fonctionp']) ?></td>
                            <td><?php echo ($auto['sitep']) ?></td>
                            <td> <?php echo ($auto['nbrjr1p']) ?></td>
                            <td><?php echo ($auto['datedepp']) ?></td>
                            <td> <?php echo ($auto['hdepp']) ?></td>
                            <td> <?php echo ($auto['dateretp']) ?></td>
                            <td> <?php echo ($auto['hretp']) ?></td>
                            <td> <?php echo ($auto['motifp']) ?></td>
                            <td> <?php echo ($auto['decrespp']) ?></td>
                            <td> <?php echo ($auto['nbrjrp1']) ?></td>
                            <td> <?php echo ($auto['remplp']) ?></td>
                            <td> <?php echo ($auto['faitap']) ?></td>
                            <td> <?php echo ($auto['datevalp']) ?></td>
                            <td> <?php echo ($auto['decrhp']) ?></td>
                            <td> <?php echo ($auto['nbrjr3p']) ?></td>
                            <td> <?php echo ($auto['decdirp']) ?></td>
                            <td> <?php echo ($auto['nbrjr4p']) ?></td>
                            <td style="color:blue;"> <?php echo ('Archivee') ?></td>
                        </tr>
                    <?php

                }
            }
            ?>

            </tbody>

        </table>
        <footer>
            SOREPCO SA &copy; 2017
            <div class="footer-links pull-right">

            </div>
        </footer>
        <!-- Footer End -->

        <!-- End of page -->
        <!-- the overlay modal element -->
        <div class="md-overlay"></div>
        <!-- End of eoverlay modal -->
        <script>
            var resizefunc = [];
        </script>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="assets/libs/jquery/jquery-1.11.1.min.js"></script>
        <script src="assets/libs/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/libs/jqueryui/jquery-ui-1.10.4.custom.min.js"></script>
        <script src="assets/libs/jquery-ui-touch/jquery.ui.touch-punch.min.js"></script>
        <script src="assets/libs/jquery-detectmobile/detect.js"></script>
        <script src="assets/libs/jquery-animate-numbers/jquery.animateNumbers.js"></script>
        <script src="assets/libs/ios7-switch/ios7.switch.js"></script>
        <script src="assets/libs/fastclick/fastclick.js"></script>
        <script src="assets/libs/jquery-blockui/jquery.blockUI.js"></script>
        <script src="assets/libs/bootstrap-bootbox/bootbox.min.js"></script>
        <script src="assets/libs/jquery-slimscroll/jquery.slimscroll.js"></script>
        <script src="assets/libs/jquery-sparkline/jquery-sparkline.js"></script>
        <script src="assets/libs/nifty-modal/js/classie.js"></script>
        <script src="assets/libs/nifty-modal/js/modalEffects.js"></script>
        <script src="assets/libs/sortable/sortable.min.js"></script>
        <script src="assets/libs/bootstrap-fileinput/bootstrap.file-input.js"></script>
        <script src="assets/libs/bootstrap-select/bootstrap-select.min.js"></script>
        <script src="assets/libs/bootstrap-select2/select2.min.js"></script>
        <script src="assets/libs/magnific-popup/jquery.magnific-popup.min.js"></script>
        <script src="assets/libs/pace/pace.min.js"></script>
        <script src="assets/libs/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
        <script src="assets/libs/jquery-icheck/icheck.min.js"></script>

        <!-- Demo Specific JS Libraries -->
        <script src="assets/libs/prettify/prettify.js"></script>

        <script src="assets/js/init.js"></script>
        <!-- Page Specific JS Libraries -->
        <script src="assets/libs/jquery-datatables/js/jquery.dataTables.min.js"></script>
        <script src="assets/libs/jquery-datatables/js/dataTables.bootstrap.js"></script>
        <script src="assets/libs/jquery-datatables/extensions/TableTools/js/dataTables.tableTools.min.js"></script>
        <script src="assets/js/pages/datatables.js"></script>
    </div>
</body>

</html>