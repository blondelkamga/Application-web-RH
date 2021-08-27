<?php
session_start();
?>
<html>
  <head>
    <title>LISTE</title>
     <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
     <meta charset="UTF-8">
        <title>RH</title>   
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
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
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
	<?php
	if($_SESSION['NIV']==0 OR $_SESSION['NIV']==3 OR $_SESSION['NIV']==4 OR $_SESSION['NIV']==5 ){
	?>
		<h1>LISTE EMPLOYES ABSENTS (RH)</h1>
	<?php
	}else{
		?>
		<h1>LISTE EMPLOYES ABSENTS (AGENCE)</h1>
	<?php
	}
	?>
  </head>
<body>
	<div class="content">
								<!-- Page Heading Start -->
				<div class="page-heading">
            		<h1><i class='fa fa-table'></i> Datatables</h1>
            		            	</div>
				<div class="row">
				
					<div class="col-md-12">
						<div class="widget">
							<div class="widget-header">
								<h2><strong>Default</strong> DataTable</h2>
								<div class="additional-btn">
									<a href="#" class="hidden reload"><i class="icon-ccw-1"></i></a>
									<a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
									<a href="#" class="widget-close"><i class="icon-cancel-3"></i></a>
								</div>
							</div>
							<div class="widget-content">
							<br>					
								<div class="table-responsive">
                                    <form method="post" action="acceuil.php">
                                    <button type="submit" class="btn btn-primary" value="RETOUR"> RETOUR</button>
									
  <?php
  
    //connection au serveur:
	$cnx=@mysql_connect("localhost","root","") or die(mysql_error());
	mysql_select_db("bd_sortie",$cnx)or die(mysql_error());

	?>


	<?php
	if($_SESSION['NIV']==0 OR $_SESSION['NIV']==3 OR $_SESSION['NIV']==4 OR $_SESSION['NIV']==5 ){
	?>
		<div class="col-md-12 col-xs-12">
	 <table id="datatables-1" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead> 
		 <tr>
			 <th>MATRICULE</th>
			 <th>NOM</th>
			 <th>PRENOM</th>
			 <th>AGENCE</th>
			 <th>FONCTION</th>
			 <th>JOUR ABSENCE</th>
			 <th>MOTIF</th>
			 <th>COMMENTAIRES</th>
			 <th>ACTION</th>
		  </tr>
		 </thead> 
		 <tbody>
		 <?php 	
			//affichage des données:
			//requête SQL:
			$sql = "SELECT * FROM `abscence`";
			//exécution de la requête:
			$resultat = mysql_query( $sql, $cnx ) ;
				if($resultat){
			 echo "<h1>LISTE EMPLOYES ABSENT</h1>\n";
			 //Nombre de lignes contenu dans resultat
			 $nbrAuto=mysql_num_rows($resultat);
			 //récuperation de chaque ligne et affichage dans un tableau


		 while( $auto = mysql_fetch_array($resultat)){

			 $sql1 = "SELECT * FROM `source` 
			 WHERE smat = '".$auto['mata']."'";

			  $resultat1 = mysql_query( $sql1, $cnx ) ;

			 while( $auto1 = mysql_fetch_array($resultat1)){
		 	?>
		 	<tr>
			<td><?php echo ($auto1['smat'])?></td>
			<td><?php echo ($auto1['snom'])?></td>
			<td><?php echo ($auto1['sprenom'])?></td>
			<td><?php echo ($auto['site'])?></td>
			<td> <?php echo ($auto1['sfonction'])?></td>
			<td> <?php echo $auto['dateAbscence'] ?></td>
			<td> <?php echo ($auto['motif'])?></td>
			<td> <?php echo ($auto	['commentaires'])?></td>
		    <td><a class="btn btn-success" href="enregistrerRempl.php?id=<?php echo($auto['idAbscence'])?>&nom=<?php echo($auto1['snom'].' '.$auto1['sprenom'].'_'.$auto1['smat'])?>" role="button"> valider</a></td>
			</tr>
			<?php
			}
		}
	}
	?> 


			
		   
		</tbody>
	
	</table> 
		
							

				
				            <!-- Footer Start -->
            <footer>
                SOREPCO SA &copy; 2019
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
	<?php
	}else{
	?>
		<div class="col-md-12 col-xs-12">
				<table id="datatables-1" class="table table-striped table-bordered" cellspacing="0" width="100%">
					<thead>
					<tr>
						<th>MATRICULE</th>
						<th>NOM</th>
						<th>PRENOM</th>
						<th>AGENCE</th>
						<th>FONCTION</th>
						<th>JOUR ABSENCE</th>
						<th>MOTIF</th>
						<th>COMMENTAIRES</th>
					</tr>
					</thead>
					<tbody>
					<?php
					//affichage des données:
					//requête SQL:
					$sql = "SELECT * FROM `abscence` WHERE `agence`= '".$_SESSION['site']."'";
					//exécution de la requête:
					$resultat = mysql_query( $sql, $cnx ) ;
					if($resultat){
						echo "<h1>LISTE EMPLOYES ABSENT</h1>\n";
						//Nombre de lignes contenu dans resultat
						$nbrAuto=mysql_num_rows($resultat);
						//récuperation de chaque ligne et affichage dans un tableau


						while( $auto = mysql_fetch_array($resultat)){

							$sql1 = "SELECT * FROM `source` WHERE smat = '".$auto['nomAbscence']."'";

							$resultat1 = mysql_query( $sql1, $cnx ) ;

							while( $auto1 = mysql_fetch_array($resultat1)){
								?>
								<tr>
									<td><?php echo ($auto1['smat'])?></td>
									<td><?php echo ($auto1['snom'])?></td>
									<td><?php echo ($auto1['sprenom'])?></td>
									<td><?php echo ($auto['agence'])?></td>
									<td> <?php echo ($auto1['sfonction'])?></td>
									<td> <?php echo $auto['dateAbscence'] ?></td>
									<td> <?php echo ($auto['motif'])?></td>
									<td> <?php echo ($auto	['commentaires'])?></td>
								</tr>
								<?php
							}
						}
					}
					?>




					</tbody>

				</table>




				<!-- Footer Start -->
				<footer>
					SOREPCO SA &copy; 2019
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
	<?php
		}
	?>
</body>
</html>