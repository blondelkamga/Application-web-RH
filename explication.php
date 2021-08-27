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

        <form method="post" action="acceuil.php">
            <button type="submit" id="p2" class="btn btn-success " value="ACCUEIL">Retour</button>
        </form>


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


                <h1><strong>DEMANDE D'EXPLICATION</strong></h1></label>
                <form action='explication2.php' method='post'>

                    <div class="panel-body">
                        <td><strong class="couleur_texte">Format de date (jj/mm/aaaa). Exemple: 24/02/2017</strong></td>
                        </p>


                        <form action='explication2.php' method='post' enctype="multipart/form-data">

                            <div class="form-group">
                                <label class="control-label">Matricule</label>
                                <input type="text" name="mate" value="<?php echo ($auto['smat'])  ?>" class="form-control ">
                            </div>
                            <div class="form-group">
                                <label class="control-label">Nom</label>
                                <input type="text" name="nome" value="<?php echo ($auto['snom'])  ?>" class="form-control ">
                            </div>
                            <div class="form-group">
                                <label class="control-label">Prenom</label>
                                <input type="texte" name="prenome" value="<?php echo ($auto['sprenom'])  ?>" class="form-control ">
                            </div>

                            <div class="form-group">
                                <label class="control-label">*Service:</label>
                                <select name="servicee" class=" custom-control">
                                    <option value="informatique">informatique</option>
                                    <option value="comptabilité">comptabilite</option>
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
                                    <option value="Fiscalité">Fiscalite</option>
                                    <option value="Projet">Projet</option>
                                    <option value="Immobilier">Immobilier</option>
                                    <option value="Agence">Agence</option>
                                    <option value="Vigile">Vigile</option>

                                </select>
                            </div>
                            <div class="form-group">
                                <label class="control-label">Fonction</label>
                                <input type="texte" name="fonction" value="<?php echo ($auto['sfonction'])  ?>" class="custom-control ">
                            </div>

                            <div class="form-group">
                                <label class="control-label">MOTIF</label>
                                <textarea name="motife" class="form-control couleur_texte" required></textarea>
                            </div>

                            <!--<div class="form-group">
                                                                                        <label class="control-label">Delai pour repondre:</label>
                                                                                        <select name="delai" class=" custom-control">
                                                                                            <option value="Des_reception">Des reception</option>
                                                                                            <option value="24_heures">24 Heures</option>
                                                                                            <option value="48_heures">48 Heures</option>
                                                                                        </select>
                                                                                    </div>-->

                            <div class="form-group">
                                <label for="test">reponce</label>
                                <input type="test" size='' style='height:400px;' class="form-control ">
                            </div>
                            <table>
                                <tr>
                                    <td> &nbsp; &nbsp; &nbsp;</td>
                                    <td> &nbsp; &nbsp; &nbsp;</td>
                                    <td> &nbsp; &nbsp; &nbsp;</td>
                                    <td> &nbsp; &nbsp; &nbsp;</td>
                                    <td> &nbsp; &nbsp; &nbsp;</td>
                                    <td> &nbsp; &nbsp; &nbsp;</td>
                                    <td> &nbsp; &nbsp; &nbsp;</td>
                                    <td> &nbsp; &nbsp; &nbsp;</td>
                                    <td> &nbsp; &nbsp; &nbsp;</td>
                                    <td> &nbsp; &nbsp; &nbsp;</td>
                                    <td> &nbsp; &nbsp; &nbsp;</td>
                                    <td> &nbsp; &nbsp; &nbsp;</td>
                                    <td> &nbsp; &nbsp; &nbsp;</td>
                                    <td> &nbsp; &nbsp; &nbsp;</td>
                                    <td> &nbsp; &nbsp; &nbsp;</td>
                                    <td> &nbsp; &nbsp; &nbsp;</td>
                                    <td> &nbsp; &nbsp; &nbsp;</td>
                                    <td> &nbsp; &nbsp; &nbsp;</td>
                                    <td> &nbsp; &nbsp; &nbsp;</td>
                                    <td> &nbsp; &nbsp; &nbsp;</td>
                                    <td> &nbsp; &nbsp; &nbsp;</td>
                                    <td> &nbsp; &nbsp; &nbsp;</td>
                                    <td> &nbsp; &nbsp; &nbsp;</td>
                                    <td> &nbsp; &nbsp; &nbsp;</td>
                                    <td> &nbsp; &nbsp; &nbsp;</td>
                                    <td> &nbsp; &nbsp; &nbsp;</td>
                                    <td> &nbsp; &nbsp; &nbsp;</td>
                                    <td> &nbsp; &nbsp; &nbsp;</td>
                                    <td> &nbsp; &nbsp; &nbsp;</td>
                                    <td> &nbsp; &nbsp; &nbsp;</td>
                                    <td> &nbsp; &nbsp; &nbsp;</td>
                                    <td> &nbsp; &nbsp; &nbsp;</td>
                                    <td> &nbsp; &nbsp; &nbsp;</td>
                                    <td> &nbsp; &nbsp; &nbsp;</td>
                                    <td> &nbsp; &nbsp; &nbsp;</td>
                                    <td> &nbsp; &nbsp; &nbsp;</td>
                                    <td> &nbsp; &nbsp; &nbsp;</td>
                                    <td> &nbsp; &nbsp; &nbsp;</td>
                                    <td> &nbsp; &nbsp; &nbsp;</td>
                                    <td> &nbsp; &nbsp; &nbsp;</td>
                                    <td><strong> Date et signature de l'employe:</strong></td>
                                </tr>
                                <tr>
                                    <td> &nbsp; &nbsp; &nbsp;</td>
                                    <td> &nbsp; &nbsp; &nbsp;</td>
                                    <td> &nbsp; &nbsp; &nbsp;</td>
                                    <td> &nbsp; &nbsp; &nbsp;</td>
                                </tr>
                                <tr>
                                    <td> &nbsp; &nbsp; &nbsp;</td>
                                    <td> &nbsp; &nbsp; &nbsp;</td>
                                    <td> &nbsp; &nbsp; &nbsp;</td>
                                    <td> &nbsp; &nbsp; &nbsp;</td>
                                </tr>
                                <tr>
                                    <td> &nbsp; &nbsp; &nbsp;</td>
                                    <td> &nbsp; &nbsp; &nbsp;</td>
                                    <td> &nbsp; &nbsp; &nbsp;</td>
                                    <td> &nbsp; &nbsp; &nbsp;</td>
                                    <td> &nbsp; &nbsp; &nbsp;</td>
                                    <td> &nbsp; &nbsp; &nbsp;</td>
                                    <td> &nbsp; &nbsp; &nbsp;</td>
                                    <td> &nbsp; &nbsp; &nbsp;</td>
                                    <td> &nbsp; &nbsp; &nbsp;</td>
                                    <td> &nbsp; &nbsp; &nbsp;</td>
                                    <td> &nbsp; &nbsp; &nbsp;</td>
                                    <td> &nbsp; &nbsp; &nbsp;</td>
                                    <td> &nbsp; &nbsp; &nbsp;</td>
                                    <td> &nbsp; &nbsp; &nbsp;</td>
                                    <td> &nbsp; &nbsp; &nbsp;</td>
                                    <td> &nbsp; &nbsp; &nbsp;</td>
                                    <td> &nbsp; &nbsp; &nbsp;</td>
                                    <td> &nbsp; &nbsp; &nbsp;</td>
                                    <td> &nbsp; &nbsp; &nbsp;</td>
                                    <td> &nbsp; &nbsp; &nbsp;</td>
                                    <td> &nbsp; &nbsp; &nbsp;</td>
                                    <td> &nbsp; &nbsp; &nbsp;</td>
                                    <td> &nbsp; &nbsp; &nbsp;</td>
                                    <td> &nbsp; &nbsp; &nbsp;</td>
                                    <td> &nbsp; &nbsp; &nbsp;</td>
                                    <td> &nbsp; &nbsp; &nbsp;</td>
                                    <td> &nbsp; &nbsp; &nbsp;</td>
                                    <td> &nbsp; &nbsp; &nbsp;</td>
                                    <td> &nbsp; &nbsp; &nbsp;</td>
                                    <td> &nbsp; &nbsp; &nbsp;</td>
                                    <td> &nbsp; &nbsp; &nbsp;</td>
                                    <td> &nbsp; &nbsp; &nbsp;</td>
                                    <td> &nbsp; &nbsp; &nbsp;</td>
                                    <td> &nbsp; &nbsp; &nbsp;</td>
                                    <td> &nbsp; &nbsp; &nbsp;</td>
                                    <td> &nbsp; &nbsp; &nbsp;</td>
                                    <td> &nbsp; &nbsp; &nbsp;</td>
                                    <td> &nbsp; &nbsp; &nbsp;</td>
                                    <td> &nbsp; &nbsp; &nbsp;</td>
                                    <td> &nbsp; &nbsp; &nbsp;</td>
                                    <td><strong>Le...................</strong></td>
                                </tr>
                            </table>

                            <div class="form-group">
                                <label class="control-label">COMMENTAIRE SERVICE EMETTEUR</label>
                                <textarea name="cmse" class="form-control couleur_texte"></textarea>
                            </div>

                            <!--<div class="form-group">
                                                                                        <label class="control-label">Nombre de jour(s) de mise a pied</label>
                                                                                        <input type="text" name="nbrejmap" class="custom-control couleur_texte">
                                                                                    </div>-->
                            <table style="align:right">
                                <tr>
                                    <td> &nbsp; &nbsp; &nbsp;</td>
                                    <td> &nbsp; &nbsp; &nbsp;</td>
                                    <td> &nbsp; &nbsp; &nbsp;</td>
                                    <td> &nbsp; &nbsp; &nbsp;</td>
                                    <td> &nbsp; &nbsp; &nbsp;</td>
                                    <td> &nbsp; &nbsp; &nbsp;</td>
                                    <td> &nbsp; &nbsp; &nbsp;</td>
                                    <td> &nbsp; &nbsp; &nbsp;</td>
                                    <td> &nbsp; &nbsp; &nbsp;</td>
                                    <td> &nbsp; &nbsp; &nbsp;</td>
                                    <td> &nbsp; &nbsp; &nbsp;</td>
                                    <td> &nbsp; &nbsp; &nbsp;</td>
                                    <td> &nbsp; &nbsp; &nbsp;</td>
                                    <td> &nbsp; &nbsp; &nbsp;</td>
                                    <td> &nbsp; &nbsp; &nbsp;</td>
                                    <td> &nbsp; &nbsp; &nbsp;</td>
                                    <td> &nbsp; &nbsp; &nbsp;</td>
                                    <td> &nbsp; &nbsp; &nbsp;</td>
                                    <td> &nbsp; &nbsp; &nbsp;</td>
                                    <td> &nbsp; &nbsp; &nbsp;</td>
                                    <td> &nbsp; &nbsp; &nbsp;</td>
                                    <td> &nbsp; &nbsp; &nbsp;</td>
                                    <td> &nbsp; &nbsp; &nbsp;</td>
                                    <td> &nbsp; &nbsp; &nbsp;</td>
                                    <td> &nbsp; &nbsp; &nbsp;</td>
                                    <td> &nbsp; &nbsp; &nbsp;</td>
                                    <td> &nbsp; &nbsp; &nbsp;</td>
                                    <td> &nbsp; &nbsp; &nbsp;</td>
                                    <td> &nbsp; &nbsp; &nbsp;</td>
                                    <td> &nbsp; &nbsp; &nbsp;</td>
                                    <td> &nbsp; &nbsp; &nbsp;</td>
                                    <td> &nbsp; &nbsp; &nbsp;</td>
                                    <td> &nbsp; &nbsp; &nbsp;</td>
                                    <td> &nbsp; &nbsp; &nbsp;</td>
                                    <td> &nbsp; &nbsp; &nbsp;</td>
                                    <td> &nbsp; &nbsp; &nbsp;</td>
                                    <td> &nbsp; &nbsp; &nbsp;</td>
                                    <td> &nbsp; &nbsp; &nbsp;</td>
                                    <td> &nbsp; &nbsp; &nbsp;</td>
                                    <td> &nbsp; &nbsp; &nbsp;</td>
                                    <div class="form-group">
                                        <label class="control-label">Date service emetteur </label>
                                        <input type="date" name="datemett" value="date de l'emetteur" class="custom-form date-picker" required>
                                    </div>
                    </div>
                    <td><strong>Signature de l'emetteur:</strong></td>
                    </tr>
                    <tr>
                        <td> &nbsp; &nbsp; &nbsp;</td>
                        <td> &nbsp; &nbsp; &nbsp;</td>
                        <td> &nbsp; &nbsp; &nbsp;</td>
                        <td> &nbsp; &nbsp; &nbsp;</td>
                    </tr>
                    <tr>
                        <td> &nbsp; &nbsp; &nbsp;</td>
                        <td> &nbsp; &nbsp; &nbsp;</td>
                        <td> &nbsp; &nbsp; &nbsp;</td>
                        <td> &nbsp; &nbsp; &nbsp;</td>
                    </tr>
                    <tr>
                        <td> &nbsp; &nbsp; &nbsp;</td>
                        <td> &nbsp; &nbsp; &nbsp;</td>
                        <td> &nbsp; &nbsp; &nbsp;</td>
                        <td> &nbsp; &nbsp; &nbsp;</td>
                        <td> &nbsp; &nbsp; &nbsp;</td>
                        <td> &nbsp; &nbsp; &nbsp;</td>
                        <td> &nbsp; &nbsp; &nbsp;</td>
                        <td> &nbsp; &nbsp; &nbsp;</td>
                        <td> &nbsp; &nbsp; &nbsp;</td>
                        <td> &nbsp; &nbsp; &nbsp;</td>
                        <td> &nbsp; &nbsp; &nbsp;</td>
                        <td> &nbsp; &nbsp; &nbsp;</td>
                        <td> &nbsp; &nbsp; &nbsp;</td>
                        <td> &nbsp; &nbsp; &nbsp;</td>
                        <td> &nbsp; &nbsp; &nbsp;</td>
                        <td> &nbsp; &nbsp; &nbsp;</td>
                        <td> &nbsp; &nbsp; &nbsp;</td>
                        <td> &nbsp; &nbsp; &nbsp;</td>
                        <td> &nbsp; &nbsp; &nbsp;</td>
                        <td> &nbsp; &nbsp; &nbsp;</td>
                        <td> &nbsp; &nbsp; &nbsp;</td>
                        <td> &nbsp; &nbsp; &nbsp;</td>
                        <td> &nbsp; &nbsp; &nbsp;</td>
                        <td> &nbsp; &nbsp; &nbsp;</td>
                        <td> &nbsp; &nbsp; &nbsp;</td>
                        <td> &nbsp; &nbsp; &nbsp;</td>
                        <td> &nbsp; &nbsp; &nbsp;</td>
                        <td> &nbsp; &nbsp; &nbsp;</td>
                        <td> &nbsp; &nbsp; &nbsp;</td>
                        <td> &nbsp; &nbsp; &nbsp;</td>
                        <td> &nbsp; &nbsp; &nbsp;</td>
                        <td> &nbsp; &nbsp; &nbsp;</td>
                        <td> &nbsp; &nbsp; &nbsp;</td>
                        <td> &nbsp; &nbsp; &nbsp;</td>
                        <td> &nbsp; &nbsp; &nbsp;</td>
                        <td> &nbsp; &nbsp; &nbsp;</td>
                        <td> &nbsp; &nbsp; &nbsp;</td>
                        <td> &nbsp; &nbsp; &nbsp;</td>
                        <td> &nbsp; &nbsp; &nbsp;</td>
                        <td> &nbsp; &nbsp; &nbsp;</td>
                        <td><strong>Le...................</strong></td>
                    </tr>
                    </table>


                    <p id="p1"><button type="submit" class="btn btn-success" value="enregistrer">Enregistrer</button> </p>
                    <p><strong class="couleur_texte" style="color:red">NB: Tout les champs sont obligatoire!!!!!</strong></p>
                </form>
            </div>

            <!-- ciblage du contenu a ne pas imprimer -->
            <style>
                @media print {

                    #p1,
                    #p2,
                    #imprimer {
                        display: none;
                    }
                }
            </style>


            <?php echo "<p id='imprimer'><a href='' onclick='window.print();return false;'>Cliquer ici pour imprimer" ?>




        <?php
    } else {
        echo "erreure dans l'execution de la requete</br>";
        echo "le message d'erreure est :" . mysql_error($cnx);
    }
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