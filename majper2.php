<!DOCTYPE html>
<html>
	<head>
		<title>Formulaire</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	 <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
	<title></title>
	</head>
	<body>
		<div class="container">
		<h3>SOREPCO SA</h3>
		<h3>BP: 2854 DOUALA</h3>
	  <?php
		//connection au serveur:
		$cnx=@mysql_connect("localhost","root","") or die(mysql_error());
		mysql_select_db("bd_sortie",$cnx)or die(mysql_error());
		 
		 //récupération de tous les enregistrements
		 $resultat=mysql_query("select * from permission where idp='".$_GET["id"]."'",$cnx);
		if($resultat){
			//echo "<h1>Validation permission</h1>\n";
			$auto = mysql_fetch_array($resultat); ?>
				
				
				

                         <form action='modifper1.php' method='post'>
					         <p>
							  
							    <label for="test">DEMANDE DE PERMISSION N°</label>
							    <input type="test"  name='idp' class="form-control" id="idp" size="10" value="<?php echo($auto['idp'])  ?>">
							  
							
							    <label for="test">MATRICULE:</label>
							    <input type="test" name='matp' class="form-control" id="matp" size="10" value="<?php echo($auto['matp'])  ?>">
							  
						     </p>

							<label for="test"><strong><u><h4>INFORMATION PERSONNEL</h4></u></strong></label>
								 <p> </p>		
							
							  <div class="form-group">
							    <label for="test">NOM:</label>
							    <input type="test"  name='nomp' class="form-control" id="nomp" value="<?php echo($auto['nomp'])  ?>">
							  </div>
							  <div class="form-group">
							    <label for="test">PRENOM:</label>
							    <input type="test" name='prenomp' class="form-control" id="prenomp" value="<?php echo($auto['prenomp'])  ?>">
							  </div>

							

							  <div class="form-group">
							    <label for="test">FONCTION:</label>
							    <input type="test"  name='fonctionp' class="form-control" id="fonctionp" value="<?php echo($auto['fonctionp'])  ?>">
							  </div>
							  <div class="form-group">
							    <label for="test">SITE:</label>
							    <input type="test" name='sitep' class="form-control" id="sitep" value="<?php echo($auto['sitep'])  ?>">
							  </div>
						
						    <p> </p>
						
							  <div class="form-group">
							     <label class="control-label col-sm-2" for="test">SOLLICITE S'ABSENTER PENDANT:</label>
							    
							      <input type="test" class="form-control" id="nbrjr1p" name='nbrjr1p'  value="<?php echo($auto['nbrjr1p'])  ?>">
							 
							  </div>
						

							  <div class="form-group">
							    <label for="test">Date départ</label>
							    <input type="test"  name='datedepp' class="form-control" id="datedepp" value="<?php echo($auto['datedepp'])  ?>">
							  </div>
							  <div class="form-group">
							    <label for="test">Heure départ</label>
							    <input type="test" name='hdepp' class="form-control" id="hdepp" value="<?php echo($auto['hdepp'])  ?>">
							  </div>
					
					        
					 
							  <div class="form-group">
							    <label for="test">Date retour</label>
							    <input type="test"  name='dateretp' class="form-control" id="dateretp" value="<?php echo($auto['dateretp'])  ?>">
							  </div>
							  <div class="form-group">
							    <label for="test">Heure retour</label>
							    <input type="test" name='hretp' class="form-control" id="hretp" value="<?php echo($auto['hretp'])  ?>">
							  </div>
				
					   
							  <div class="form-group">
							    <label for="test">MOTIF:</label>
							    <input type="test" size='97' style='height:75px;' name="motifp" value="<?php echo($auto['motifp'])  ?>" class="form-control " >
							  </div>
							  <div class="form-group">
							    <label for="test">Demandée le:</label>
							    <input type="test" name="datejrp" class="form-control " value="<?php echo($auto['datejrp'])  ?>">
							  </div>
				
					             <p> </p>
					            <label for="test"><strong><u><h4>DECISION DU RESPONSABLE DU SITE</h4></u></strong></label>

                     <p> </p>
							  <div class="form-group">
							    <label for="test">Nombre de jours:</label>
							    <input type="test"  name="nbrjrp1" value="<?php echo($auto['nbrjrp1'])  ?>" class="form-control ">
							  </div>
							  <div class="form-group">
							    <label for="test">Personne(s) devant assurer la relève:</label>
							    <input type="test" name="remplp" class="form-control " value="<?php echo($auto['remplp'])  ?>">
							  </div>
					
					
				
							  <div class="form-group">
							    <label for="test">Fait à:</label>
							    <input type="test"  name='faitap' class="form-control" id="faitap" value="<?php echo($auto['faitap'])  ?>" required>
							  </div>
							  <div class="form-group">
							    <label for="date">Le:</label>
							    <input type="date" name='datevalp' class="form-control datepicker-input" id="datevalp" value="date de validation de la permission"<?php echo($auto['datevalp'])  ?>" required>
							  </div>
					
							   <p> </p>
							   <label for="test"><strong><u><h4>DECISION DES RESSOURCES HUMAINES</h4></u></strong></label>
					 <p> </p>
							  <select  name="decrhp" class="form-control couleur_texte" value="<?php echo($auto['decrhp'])  ?>">
								<option value="ACCORDEE">ACCORDEE</option>
								<option value="REFUSEE">REFUSEE</option>
							</select>
							  </div>
							  <div class="form-group">
							    <label for="date">Nombre jours:</label>
							    <input type="test" name='nbrjr3p' class="form-control" id="nbrjr3p" value="<?php echo($auto['nbrjr3p'])  ?>">
							  </div>
					 <p> </p>
							       
							        <label for="test"><strong><u><h4>DECISION DIRECTION</h4></u></strong></label>
                                 <p> </p>
							
							  <div class="form-group">
							    <!--label for="test">Demande (ACCORDEE/REFUSEE):</label>-->
							    <select  name="decdirp" class="form-control couleur_texte" value="<?php echo($auto['decdirp'])  ?>">
								<option value="ACCORDEE">ACCORDEE</option>
								<option value="REFUSEE">REFUSEE</option>
							</select>
							  </div>
							  <div class="form-group">
							    <label for="date">Nombre jours:</label>
							    <input type="test" name='nbrjr4p' class="form-control" id="nbrjr4p" value="<?php echo($auto['nbrjr4p'])  ?>">
							  </div>
						
							 <div class="form-group">
							    <label for="test">Motif refus:</label>
							    <input type="test" size='97' style='height:75px;' name="motfirefdir" value="<?php echo($auto['motfirefdir'])  ?>" class="form-control " >
							  </div>
							  <p><strong>...................................................................................................................................................Direction</strong></p>
                        <input type='hidden' name='numorg'  value="<?php echo($_GET["id"])  ?>"/>
                      
				
				<p><button type="submit" name='valider' class="btn btn-success" value="valider"> valider</button> </p>
		</form>

		<?php
		}else{
			echo "erreure dans l'execution de la requete</br>";
			echo "le message d'erreure est :".mysql_error($cnx);
		}
		?>
		</div>
		</body>
		</html>