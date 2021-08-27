<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Forms | Coco - Responsive Bootstrap Admin Template</title>
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

    </style>
</head>

<body>
    <div class="container">




        <?php
        //connection au serveur:
        $cnx = @mysql_connect("localhost", "root", "") or die(mysql_error());
        mysql_select_db("bd_sortie", $cnx) or die(mysql_error());

        //récupération de tous les enregistrements
        $resultat = @mysql_query("select * from source where smat='" . $_POST["smat"] . "'", $cnx);
        if ($resultat) {
            $auto = mysql_fetch_array($resultat);
            //recup de chaque ligne
            if ($auto > 0) { ?>


                <div class="panel panel-default spacer col-md-6 col-xs-6 col-md-offset-3">
                    <div class="panel-heading">
                        <h2><u>Demande de congé</u></h2>
                        <form method="post" action="acceuil.php">
                            <button type="submit" class="btn btn-success " value="ACCUEIL"> Accueil</button>
                        </form>
                    </div>
                    <div class="panel-body">
                        <td><strong class="couleur_texte">Format de date (mm/jj/aaaa). Exemple: 02/24/2017</strong></td>
                        </p>

                        <form action='enregconge.php' method='post'>

                            <div class="form-group">
                                <label class="control-label">Matricule</label>
                                <input type="texte" name="smat" value="<?php echo ($auto['smat'])  ?>" class="form-control ">
                            </div>
                            <div class="form-group">
                                <label class="control-label">Nom</label>
                                <input type="texte" name="snom" value="<?php echo ($auto['snom'])  ?>" class="form-control ">
                            </div>
                            <div class="form-group">
                                <label class="control-label">Prénom</label>
                                <input type="texte" name="sprenom" value="<?php echo ($auto['sprenom'])  ?>" class="form-control ">
                            </div>

                            <div class="form-group">
                                <label class="control-label">*Service:</label>
                                <select name="service" class=" form-control">
                                    <option value="informatique">informatique</option>
                                    <option value="comptabilité">comptabilité</option>
                                    <option value="logistique">logistique</option>
                                    <option value="juridique">juridique</option>
                                    <option value="RH">RH</option>
                                    <option value="technique">technique</option>
                                    <option value="audit">audit</option>
                                    <option value="controle interne">controle interne</option>
                                    <option value="commercial">commercial</option>
                                    <option value="marketing">marketing</option>
                                    <option value="export">export</option>
                                    <option value="Facturation">Facturation</option>
                                    <option value="Achat & transit">Achat & transit</option>
                                    <option value="Controle gestion">Controle gestion</option>
                                    <option value="Fiscalité">Fiscalité</option>
                                    <option value="Projet">Projet</option>
                                    <option value="Immobilier">Immobilier</option>
                                    <option value="Agence">Agence</option>
                                    <option value="Vigile">Vigile</option>

                                </select>
                            </div>
                            <div class="form-group">
                                <label class="control-label">Fonction</label>
                                <input type="texte" name="sfonction" value="<?php echo ($auto['sfonction'])  ?>" class="form-control ">
                            </div>
                            <div class="form-group">
                                <label class="control-label">Date du premier jour de congé:</label>
                                <input type="text" name="datepjc" class="form-control datepicker-input" value="date du premier jour" required>
                            </div>
                            <div class="form-group">
                                <label class="control-label">Date du dernier jour de congé:</label>
                                <input type="text" name="datedjc" class="form-control datepicker-input" value="date du dernier jour " required>
                            </div>
                            <div class="form-group">
                                <label class="control-label">Nombre de jours de congé:</label>
                                <input type="text" name="nbrejc" class="form-control couleur_texte" required>
                            </div>
                            <div class="form-group">
                                <label class="control-label">Date de reprise du travail:</label>
                                <input type="text" name="datert" class="form-control datepicker-input" value="date de reprise " required>
                            </div>
                            <div class="form-group">
                                <label class="control-label">Type de congé:</label>
                                <select name="typec" class=" form-control" required>
                                    <option value="Congé annuel ordinaire">Congé annuel ordinaire</option>
                                    <option value="Congé de maternité">Congé de maternité</option>

                                </select>
                            </div>

                            <p><button type="submit" class="btn btn-success" value="VALIDER"> Valider</button> </p>
                            <p><strong class="couleur_texte" style="color:red">NB: tout les champs sont obligatoire!!!!!</strong></p>
                        </form>
                    </div>
                </div>
            </div>


        <?php
    } else {
        echo "<p>Désolé, ce numéro de matricule est introuvable !!!</p>";
    }
} else {
    echo "erreure dans l'execution de la requete</br>";
    echo "le message d'erreure est :" . mysql_error($cnx);
}
?>

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