<!DOCTYPE html>
<html>

<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />



</head>

<body>

    <?php
    //connection au serveur:
    $cnx = @mysql_connect("localhost", "root", "") or die(mysql_error());
    mysql_select_db("bd_sortie", $cnx) or die(mysql_error());
    //récupérer la décision

    //récupération de tous les enregistrements
    $resultat = mysql_query("select * from permission where idp='" . $_GET["id"] . "'", $cnx);
    if ($resultat) {

        echo "\n";
        $auto = mysql_fetch_array($resultat);
        //recup de chaque ligne
        ?>
        <div class="panel panel-default spacer col-md-6 col-xs-6 col-md-offset-3">
            <div class="panel-heading">
                <h2><u>Validation permission</u></h2>
                <form method="post" action="majper1.php">
                    <button type="submit" class="btn btn-success" value="RETOUR"> RETOUR</button>
                </form>
            </div>
            <div class="panel-body">

                <form action='majper1.php' method='post'>
                    <div class="form-group">
                        <label class="control-label">MATRICULE</label>
                        <input type="test" name="matp" class="form-control couleur_texte" value="<?php echo ($auto['matp'])  ?>">
                    </div>
                    <div class="form-group">
                        <label class="control-label">NOM</label>
                        <input type="test" name="nomp" class="form-control couleur_texte" value="<?php echo ($auto['nomp'])  ?>">
                    </div>
                    <div class="form-group">
                        <label class="control-label">PRENOM</label>
                        <input type="test" name="prenomp" class="form-control couleur_texte" value="<?php echo ($auto['prenomp'])  ?>">
                    </div>
                    <div class="form-group">
                        <label class="control-label">FONCTION</label>
                        <input type="test" name="fonctionp" class="form-control couleur_texte" value="<?php echo ($auto['fonctionp'])  ?>">
                    </div>
                    <div class="form-group">
                        <label class="control-label">SITE</label>
                        <input type="test" name="sitep" class="form-control couleur_texte" value="<?php echo ($auto['sitep'])  ?>">
                    </div>
                    <div class="form-group">
                        <label class="control-label">NOMBRE DE JOURS</label>
                        <input type="test" name="nbrjr1p" class="form-control couleur_texte" value="<?php echo ($auto['nbrjr1p'])  ?>">
                    </div>
                    <div class="form-group">
                        <label class="control-label">MOTIF</label>
                        <input type="test" name="motifp" class="form-control couleur_texte" value="<?php echo ($auto['motifp'])  ?>">
                    </div>
                    <div class="form-group">
                        <label class="control-label">DATE DEPART</label>
                        <input type="test" name="datedepp" class="form-control couleur_texte" value="<?php echo ($auto['datedepp'])  ?>">
                    </div>
                    <div class="form-group">
                        <label class="control-label">HEURE DEPART</label>
                        <input type="test" name="hdepp" class="form-control couleur_texte" value="<?php echo ($auto['hdepp'])  ?>">
                    </div>
                    <div class="form-group">
                        <label class="control-label">DATE RETOUR</label>
                        <input type="test" name="dateretp" class="form-control couleur_texte" value="<?php echo ($auto['dateretp'])  ?>">
                    </div>
                    <div class="form-group">
                        <label class="control-label">HEURE RETOUR</label>
                        <input type="test" name="hretp" class="form-control couleur_texte" value="<?php echo ($auto['hretp'])  ?>">
                    </div>
                    <div class="form-group">
                        <label class="control-label">DECISION RESPONSABLE(ACCEPTEE/REFUSEE)</label>

                        <select name="decrespp" class="form-control couleur_texte" value="<?php echo ($auto['decrespp'])  ?>">
                            <option value="ACCEPTEE">ACCEPTEE</option>
                            <option value="REFUSEE">REFUSEE</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="control-label">NOMBRE DE JOUR(S) ACCORDES</label>
                        <input type="test" name="nbrjrp1" class="form-control couleur_texte" value="<?php echo ($auto['nbrjrp1'])  ?>">
                    </div>
                    <div class="form-group">
                        <label class="control-label">MOTIF REFUS</label>
                        <input type="test" name="motifrefp" class="form-control couleur_texte" value="<?php echo ($auto['motifrefp'])  ?>">
                    </div>
                    <div class="form-group">
                        <label class="control-label">REMPLACANT</label>
                        <input type="test" name="remplp" class="form-control couleur_texte" value="<?php echo ($auto['remplp'])  ?>">
                    </div>
                    <input type='hidden' name='numorg' value="<?php echo ($_GET["id"])  ?>" />

                    <p><button type="submit" name='valider' class="btn btn-success" value="valider"> Valider</button> </p>
                </form>
            </div>
        </div>
    <?php
} else {
    echo "erreure dans l'execution de la requete</br>";
    echo "le message d'erreure est :" . mysql_error($cnx);
}
?>
</body>

</html>