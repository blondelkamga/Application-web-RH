<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Forms | Abscences</title>
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
    <link href="assets/libs/jquery-notifyjs/styles/metro/notify-metro.css" rel="stylesheet" type="text/css" />

    <!-- Code Highlighter for Demo -->
    <link href="assets/libs/prettify/github.css" rel="stylesheet" />

    <!-- Extra CSS Libraries Start -->
    <link href="assets/libs/bootstrap-select/bootstrap-select.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/libs/summernote/summernote.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/style.css" rel="stylesheet" type="text/css" />
    <!-- Extra CSS Libraries End -->
    <link href="assets/css/style-responsive.css" rel="stylesheet" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <link rel="shortcut icon" href="assets/img/favicon.ico">

</head>
<body>
<div class="container">





    <?php
    //connection au serveur:
    $cnx=@mysql_connect("localhost","root","") or die(mysql_error());
    mysql_select_db("bd_sortie",$cnx)or die(mysql_error());

    $sql = "SELECT * FROM `source` WHERE smat = '".$_GET['id']."'";

    $resultat = mysql_query( $sql, $cnx ) ;

      ?>


    <div class="panel panel-default spacer col-md-6 col-xs-6 col-md-offset-3">
        <div class="panel-heading"><h2><u>Enregistrer une absence</u></h2> <form method="post" action="acceuil.php">
                <button type="submit" class="btn btn-success " value="ACCUEIL"> Accueil</button>
                <a href="listeAbsence.php" class="pull-right btn btn-success " value="ACCUEIL"> Retour</a>
            </form></div>
        <div class="panel-body">

            <form action='enregistrerAbs.php' method='post'>
                <?php
                    while( $auto = mysql_fetch_array($resultat)) {
                        ?>
                    <div class="row">
                        <div class="col-md-4 form-group">
                            <label class="control-label">Matricule:</label>
                            <p><?php echo $auto['smat'] ?></p>
                        </div>
                        <div class="col-md-4 form-group">
                            <label class="control-label">Nom:</label>
                            <p><?php echo $auto['snom']?></p>
                        </div>
                        <div class="col-md-4 form-group">
                            <label class="control-label">Prenom:</label>
                            <p><?php echo $auto['sprenom'] ?></p>
                        </div>
                        <div class="col-md-4 form-group">
                            <label class="control-label">Fonction:</label>
                            <p><?php echo $auto['sfonction'] ?></p>
                        </div>
                        <div class="col-md-4 form-group">
                            <label class="control-label">Site:</label>
                            <p><?php echo $auto['ssite'] ?></p>
                        </div>

                    </div>


                        <?php
                    }
                ?>
                <div class="form-group">
                    <label class="control-label">*Motif:</label>
                    <input type="hidden" name="mat" class="form-control" value="<?php echo $_GET['id'] ?>" >
                    <input type="hidden" name="nom" class="form-control" value="<?php echo $_GET['nom'] ?>" >
                     <input type="hidden" name="prenom" class="form-control" value="<?php echo $_GET['prenom'] ?>" >
                     <input type="hidden" name="fonction" class="form-control" value="<?php echo $_GET['fonction'] ?>" >
                     <input type="hidden" name="site" class="form-control" value="<?php echo $_GET['site'] ?>" >
                    <select type="text"  name="motifAbs"  class="form-control" placeholder="Entrer les raisons de l'absence" required>
                        <option value="">Selectionnez le motif d'absence</option>
                        <option value="Maladie">Maladie</option>
                        <option value="Accident">Accident</option>
                        <option value="Permission">Permission</option>
                        <option value="Conges">Conges</option>
                        <option value="Accouchement">Accouchement</option>
                        <option value="Inconnu">Inconnu</option>
                    </select>
                </div>
                <div class="form-group">
                    <label class="control-label">Observation/Commentaires</label>
                    <textarea type="text"  name="observation"  class="form-control" placeholder="Entrer vos observation" required></textarea>
                </div>
                <p><button type="submit" class="btn btn-success" value="VALIDER"> Valider</button> </p>
            </form>
        </div>
    </div>
</div>


</div>
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
<script src="assets/libs/jquery-notifyjs/notify.min.js"></script>
<script src="assets/libs/jquery-notifyjs/styles/metro/notify-metro.js"></script>
<script src="assets/libs/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
<script src="assets/libs/jquery-icheck/icheck.min.js"></script>

<!-- Chat Loader -->
<script src="assets/js/apps/chat.js"></script>

<!-- Demo Specific JS Libraries -->
<script src="assets/libs/prettify/prettify.js"></script>

<script src="assets/js/init.js"></script>
<!-- Page Specific JS Libraries -->
<script src="assets/libs/bootstrap-select/bootstrap-select.min.js"></script>
<script src="assets/libs/bootstrap-inputmask/inputmask.js"></script>
<script src="assets/libs/summernote/summernote.js"></script>
<script src="assets/js/pages/forms.js"></script>
</body>
</html>