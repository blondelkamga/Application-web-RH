<!DOCTYPE html>
<html>
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	 <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
	<title></title>
	</head>
	<body>
		<div class="container">
		<h4>SOREPCO SA</h4>
		<h4>BP: 2854 DOUALA</h4>
	  <?php
		//connection au serveur:
		$cnx=@mysql_connect("localhost","root","") or die(mysql_error());
		mysql_select_db("bd_sortie",$cnx)or die(mysql_error());
		 
		 //récupération de tous les enregistrements
		 $resultat=mysql_query("select * from conge where idc='".$_GET["id"]."'",$cnx);
		if($resultat){
			//echo "<h1>Validation permission</h1>\n";
			$auto = mysql_fetch_array($resultat); ?>
				
				
										<label><h1><strong>DEMANDE DE DEPART EN CONGE</strong></h1></label>
							<form action='majcong2.php' method='post'>

							  
							    <label for="test">NOM:</label>
							    <input type="test"  name='nomc' class="form-control" id="nomc" value="<?php echo($auto['nomc'])  ?>">
							  
							    <label for="test">PRENOM:</label>
							    <input type="test" name='prenomc' class="form-control" id="prenomc" value="<?php echo($auto['prenomc'])  ?>">
							  
						  
							 <p> </p>
							 
						
							    <label for="test">FONCTION:</label>
							    <input type="test"  name='fonctionc' class="form-control" id="fonctionc" value="<?php echo($auto['fonctionc'])  ?>">
							 
							    <label for="test">SERVICE:</label>
							    <input type="test" name='servicec' class="form-control" id="servicec" value="<?php echo($auto['servicec'])  ?>">
												   
						    <label><h2><strong>COMPUTATION DU CONGE</strong></h2></label>
							
					 <p> </p>
					 
							 
							    <label for="text">Date début de congé</label>
							    <input type="text"  name='datepjc' class="form-control" id="datepjc" value="<?php echo($auto['datepjc'])  ?>">
							 
							    <label for="text">Date fin de congé</label>
							    <input type="text" name='datedjc' class="form-control" id="datedjc" value="<?php echo($auto['datedjc'])  ?>">
							 
					
					          <p> </p>
					
							 
							    <label for="test">Nombre de jours</label>
							    <input type="test"  name='nbrejc' class="form-control" id="nbrejc" value="<?php echo($auto['nbrejc'])  ?>">
							
							    <label for="text">Date reprise travail</label>
							    <input type="text" name='datert' class="form-control" id="datert" value="<?php echo($auto['datert'])  ?>">
							  
				
					    <label><h2><strong>TYPE DE CONGE</strong></h2></label>
					
							  
						 
                           <label class="control-label"></label>
                           <select  name="typec" class=" form-control">
                               <option value="Congé annuel ordinaire">Congé annuel ordinaire</option>
                               <option value="Congé de maternité">Congé de maternité</option>
                                
                           </select>
                         
							  



							  <p> </p>
							   <label for="text"><strong><u><h4>DECISION DES RESSOURCES HUMAINES</h4></u></strong></label>
					 <p> </p>
							  <div class="form-group">
							    <label for="text">Demande (ACCORDEE/REFUSEE):</label>
							    <select  name="decrhc" class="custom-control couleur_texte" value="<?php echo($auto['decrhc'])  ?>">
								<option value="ACCEPTEE">ACCEPTEE</option>
								<option value="REFUSEE">REFUSEE</option>
							</select>
							  </div>
							  <div class="form-group">
							    <label for="date">Nombre jours:</label>
							    <input type="text" name='nbrjr3c' class="custom-control" id="nbrjr3c" value="<?php echo($auto['nbrjr3c'])  ?>">
							  </div>
					 <p> </p>
							       
							        <label for="test"><strong><u><h4>DECISION DIRECTION</h4></u></strong></label>
                                 <p> </p>
							
							  <div class="form-group">
							    <label for="test">Demande (ACCORDEE/REFUSEE):</label>
							    <select  name="decdirc" class="custom-control couleur_texte" value="<?php echo($auto['decdirc'])  ?>">
								<option value="ACCEPTEE">ACCEPTEE</option>
								<option value="REFUSEE">REFUSEE</option>
							</select>
							  </div>
							  <div class="form-group">
							    <label for="test">Nombre jours:</label>
							    <input type="test" name='nbrjr4c' class="custom-control" id="nbrjr4c" value="<?php echo($auto['nbrjr4c'])  ?>">
							  </div>
						
							 <div class="form-group">
							    <label for="test">Motif refus:</label>
							    <input type="test" size='97' style='height:75px;' name="motfirefdirc" value="<?php echo($auto['motfirefdirc'])  ?>" class="form-control " >
							  </div>
				
					       <p></p>   

                   
							 
							  
							    <label for="test">Personne(s) devant assurer la relève:</label>
							    <input type="test" name="remplc" class="form-control " value="<?php echo($auto['remplc'])  ?>">
							  
					
					  
							  <label><strong>...................................................................................................................................................SIGNATURE.................................................................................................................................</strong></label>
                              
							 <table>
							 	<tr>
							 		<td><strong> Signature<br>de l'intéressé(e)</strong></td>
							 		<td> &nbsp; &nbsp; &nbsp;</td>
							 		<td> &nbsp; &nbsp; &nbsp;</td>
							 		<td> &nbsp; &nbsp; &nbsp;</td>
							 		<td> &nbsp; &nbsp; &nbsp;</td>
							 		<td><strong>Accord<br>du Responsable du site</strong></td>
							 		<td> &nbsp; &nbsp; &nbsp;</td>
							 		<td> &nbsp; &nbsp; &nbsp;</td>
							 		<td> &nbsp; &nbsp; &nbsp;</td>
							 		<td> &nbsp; &nbsp; &nbsp;</td>
							 		<td><strong>Accord<br>de la Direction Générale</strong></td>
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
							 		<td><strong>Le...................</strong></td>
							 		<td> &nbsp; &nbsp; &nbsp;</td>
							 		<td> &nbsp; &nbsp; &nbsp;</td>
							 		<td> &nbsp; &nbsp; &nbsp;</td>
							 		<td> &nbsp; &nbsp; &nbsp;</td>
							 		<td><strong>Le...................</strong></td>
							 		<td> &nbsp; &nbsp; &nbsp;</td>
							 		<td> &nbsp; &nbsp; &nbsp;</td>
							 		<td> &nbsp; &nbsp; &nbsp;</td>
							 		<td> &nbsp; &nbsp; &nbsp;</td>
							 		<td><strong>Le....................</strong></td>
							 	</tr>
							 </table>

                        <input type='hidden' name='numorg'  value="<?php echo($_GET["id"])  ?>"/>
                      
				
				<p><button type="submit" name='valider' class="btn btn-success" value="valider"> Valider</button> </p>
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