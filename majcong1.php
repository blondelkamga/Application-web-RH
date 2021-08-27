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
		$cnx=@mysql_connect("localhost","root","") or die(mysql_error());
		mysql_select_db("bd_sortie",$cnx)or die(mysql_error());
		 //récupérer la décision
		 
		 //récupération de tous les enregistrements
		 $resultat=mysql_query("select * from conge where idc='".$_GET["id"]."'",$cnx);
		if($resultat){

			echo "\n";
			$auto = mysql_fetch_array($resultat);
				//recup de chaque ligne
				?>
				<div class="panel panel-default spacer col-md-6 col-xs-6 col-md-offset-3">
               <div class="panel-heading"><h2><u>Validation congé</u></h2> <form method="post" action="majcong.php">
			<button type="submit" class="btn btn-success" value="RETOUR"> RETOUR</button>
	</form>	</div>
               <div class="panel-body">

				<form action='majcong.php' method='post'>
                       <div class="form-group">
                           <label class="control-label">MATRICULE</label>
                           <input type="test" name="matc" class="form-control couleur_texte" value="<?php echo($auto['matc'])  ?>">
                       </div>
                       <div class="form-group">
                           <label class="control-label">NOM</label>
                           <input type="test" name="nomc" class="form-control couleur_texte" value="<?php echo($auto['nomc'])  ?>">
                       </div>
                        <div class="form-group">
                           <label class="control-label">PRENOM</label>
                           <input type="test" name="prenomc" class="form-control couleur_texte" value="<?php echo($auto['prenomc'])  ?>">
                       </div>
                       <div class="form-group">
                           <label class="control-label">SERVICE</label>
                           <input type="test" name="servicec" class="form-control couleur_texte" value="<?php echo($auto['servicec'])  ?>">
                       </div>
                        <div class="form-group">
                           <label class="control-label">FONCTION</label>
                           <input type="test" name="fonctionc" class="form-control couleur_texte" value="<?php echo($auto['fonctionc'])  ?>">
                       </div>
                         
                         <div class="form-group">
                           <label class="control-label">DATE DEPART</label>
                           <input type="text" name="datepjc" class="form-control couleur_texte date-picker" value="<?php echo($auto['datepjc'])  ?>">
                       </div>
                        <div class="form-group">
                           <label class="control-label">DATE RETOUR</label>
                           <input type="text" name="datedjc" class="form-control couleur_texte date-picker" value="<?php echo($auto['datedjc'])  ?>">
                       </div>
                       <div class="form-group">
                           <label class="control-label">NOMBRE DE JOURS</label>
                           <input type="test" name="nbrejc" class="form-control couleur_texte" value="<?php echo($auto['nbrejc'])  ?>">
                       </div>
                      
                         <div class="form-group">
                           <label class="control-label">DATE REPRISE</label>
                           <input type="text" name="datert" class="form-control couleur_texte date-picker" value="<?php echo($auto['datert'])  ?>">
                       </div>
                        <div class="form-group">
                           <label class="control-label">TYPE DE CONGE</label>
                           <input type="test" name="typec" class="form-control couleur_texte" value="<?php echo($auto['typec'])  ?>">
                       </div>
                       
                        <div class="form-group">
                           <label class="control-label">DECISION RESPONSABLE(ACCEPTEE/REFUSEE)</label>
                           <select type="test" name="decrescc" class="form-control couleur_texte" value="<?php echo($auto['decrescc'])  ?>">
                             <option value="ACCEPTEE">ACCEPTEE</option>
                              <option value="REFUSEE">REFUSEE</option>
                           </select> 
                       </div>
                        <div class="form-group">
                           <label class="control-label">NOMBRE JOURS ACCORDES</label>
                           <input type="test" name="nbrjrc1" class="form-control couleur_texte" value="<?php echo($auto['nbrjrc1'])  ?>">
                       </div>
                       <div class="form-group">
                           <label class="control-label">MOTIF REFUS</label>
                           <textarea  name="motifrefc" class="form-control couleur_texte" <?php echo($auto['motifrefc']);  ?>"></textarea> 
                       </div>
                        <div class="form-group">
                           <label class="control-label">REMPLACANT</label>
                           <input type="test" name="remplc" class="form-control couleur_texte" value="<?php echo($auto['remplc'])  ?>">
                       </div>
				 <input type='hidden' name='numorg'  value="<?php echo($_GET["id"])  ?>"/>
				
				<p><button type="submit" name='valider' class="btn btn-success" value="valider"> Valider</button> </p>
				</form>
						</div>
					</div>
			 <?php	
		}else{
			echo "erreure dans l'execution de la requete</br>";
			echo "le message d'erreure est :".mysql_error($cnx);
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