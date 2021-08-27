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


    <!DOCTYPE html>
    <html>

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
        <title></title>

    </head>

<body>

    <div class="container">
        <h4>SOREPCO SA</h4>
        <h4>BP: 2854 DOUALA</h4>




        <?php
        //connection au serveur:
        $cnx = @mysql_connect("localhost", "root", "") or die(mysql_error());
        mysql_select_db("bd_sortie", $cnx) or die(mysql_error());
        //récupérer la décision

        //récupération de tous les enregistrements
        $resultat = mysql_query("select * from explication where ide='" . $_GET["id"] . "'", $cnx);
        if ($resultat) {

            echo "\n";
            $auto = mysql_fetch_array($resultat);
            //recup de chaque ligne
            ?>

            <style>
                @media print {

                    #p1,
                    #p2,
                    #imprimer {
                        display: none;
                    }
                }
            </style>


            <div class="panel-heading">
                <h2><u>Confirmation demande d'explication</u></h2>
                <form method="post" action="explicationrh.php">
                    <button type="submit" id="p2" class="btn btn-success" value="RETOUR"> RETOUR</button>
                </form>
            </div>
            <div class="panel-body">

                <form action='explicationrh.php' method='post'>

                    <div class="form-group">
                        <label class="control-label">MATRICULE</label>
                        <input type="text" name="mate" class="form-control couleur_texte" value="<?php echo ($auto['mate'])  ?>">
                    </div>
                    <div class="form-group">
                        <label class="control-label">NOM</label>
                        <input type="text" name="nome" class="form-control couleur_texte" value="<?php echo ($auto['nome'])  ?>">
                    </div>
                    <div class="form-group">
                        <label class="control-label">PRENOM</label>
                        <input type="text" name="prenome" class="form-control couleur_texte" value="<?php echo ($auto['prenome'])  ?>">
                    </div>
                    <div class="form-group">
                        <label class="control-label">SERVICE</label>
                        <input type="text" name="servicee" class="form-control couleur_texte" value="<?php echo ($auto['servicee'])  ?>">
                    </div>
                    <div class="form-group">
                        <label class="control-label">FONCTION</label>
                        <input type="text" name="fonction" class="form-control couleur_texte" value="<?php echo ($auto['fonction'])  ?>">
                    </div>

                    <div class="form-group">
                        <label class="control-label">Motif</label>
                        <input type="text" name="motife" class="form-control couleur_texte" value="<?php echo ($auto['motife'])  ?>">
                    </div>
                    <div class="form-group">
                        <label class="control-label">COMMENTAIRE SERVICE EMETTEUR</label>
                        <input type="text" name="cmse" class="form-control couleur_texte" value="<?php echo ($auto['cmse'])  ?>">
                    </div>

                    <div class="form-group">
                        <label class="control-label">DATE SERVICE EMETTEUR</label>
                        <input type="text" name="dateemett" class="form-control couleur_texte date-picker" value="<?php echo ($auto['dateemett'])  ?>">
                    </div>

                    <div class="form-group">
                        <label class="control-label">DECISION DE LA DIRECTION(ACCEPTEE/REFUSEE)</label>
                        <select type="text" name="obs" class="custom-control couleur_texte">
                            <option value="ACCEPTEE">ACCEPTEE</option>
                            <option value="REFUSEE">REFUSEE</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label class="control-label">Delai pour repondre:</label>
                        <select name="delai" class=" custom-control">
                            <option value="Des_reception">Des reception</option>
                            <option value="24_heures">24 Heures</option>
                            <option value="48_heures">48 Heures</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label class="control-label">Sanction:</label>
                        <select name="sanction" class=" custom-control">
                            <option value="blame">Blame</option>
                            <option value="avertissement">Avertissement</option>
                            <option value="miseapied">mise a pied</option>
                            <option value="liceciement">licenciement</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="control-label">SI MISE A PIED NOMBRE DE JOUR(S)</label>
                        <input type="text" name="nbrejmap" class="form-control couleur_texte" value="">
                    </div>

                    <div class="form-group">
                        <label class="control-label">Date direction </label>
                        <input type="date" name="datedir" value="date" class="custom-form date-picker" required>
                    </div>

                    <input type='hidden' name='numorg' value="<?php echo ($_GET["id"])  ?>" />

                    <p id="p1"><button type="submit" name='valider' class="btn btn-success" value="valider"> Valider</button> </p>

                    <?php echo "<p id='imprimer'><a href='' onclick='window.print();return false;'>Cliquer ici pour imprimer" ?>

                </form>
            </div>
        <?php
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