<!DOCTYPE html>
<html>
	<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>

	<title></title>
	
	</head>
	<body>
        <div class="container">
	  <?php
		//connection au serveur:
		$cnx=@mysql_connect("localhost","root","") or die(mysql_error());
		mysql_select_db("bd_sortie",$cnx)or die(mysql_error());
		 
		 //récupération de tous les enregistrements
		 $resultat=mysql_query("select * from autorisation where id='".$_GET["id"]."'",$cnx);
		if($resultat){
			
			//recup de chaque ligne
			$auto = mysql_fetch_array($resultat); ?>
				
				<form action='modifauto2.php' method='post'>
				
               <div class="panel-heading"><h2>Autorisation</h2> 
                <form method="post" action="acceuil.php">
				<button type="submit" class="btn btn-success " value="ACCUEIL"> Accueil</button>
			</form>
               
                                
					 <p></p>
                <form class="form-inline">
                <div class="form-group">
                  <label for="test">NUM:</label>
                  <input type="test"  name='id' class="form-control" id="id" value="<?php echo($auto['id'])  ?>">
                </div>
                <div class="form-group">
                  <label for="test">MATRICULE:</label>
                  <input type="test" name='mat' class="form-control" id="mat" value="<?php echo($auto['mat'])  ?>">
                </div>
               </form>
               <p></p>
                       <form class="form-inline">
                <div class="form-group">
                  <label for="test">NOM:</label>
                  <input type="test"  name='nom' class="form-control" id="nom" value="<?php echo($auto['nom'])  ?>">
                </div>
                <div class="form-group">
                  <label for="test">PRENOM:</label>
                  <input type="test" name='prenom' class="form-control" id="prenom" value="<?php echo($auto['prenom'])  ?>">
                </div>
               </form>
					    <div class="form-group">
                           <label class="control-label">Service:</label>
                           <input type="test" name="service" class="form-control couleur_texte" value="<?php echo($auto['service'])?>" >
                       </div>
					     <div class="form-group">
                           <label class="control-label">Fonction</label>
                           <input type="test" name="fonction" value="<?php echo($auto['fonction'])  ?>" class="form-control " >
                       </div>
                        <div class="form-group">
                           <label class="control-label">Destination:</label>
                           <input type="test" name="destination" class="form-control couleur_texte" value="<?php echo($auto['destination'])  ?>">
                       </div>
                          <div class="form-group">
                           <label class="control-label">Motif:</label>
                           <input type="text" name="objet" value="<?php echo($auto['objet'])  ?>" class="form-control " >
                       </div>
                        <div class="form-group">
                           <label class="control-label">Heure de sortie:</label>
                           <input type="test" name="hsortie" class="form-control couleur_texte" value="<?php echo($auto['hsortie'])  ?>">
                       </div>
                       <div class="form-group">
                           <label class="control-label">Heure de retour:</label>
                           <input type="test" name="hretour" class="form-control couleur_texte" value="<?php echo($auto['hretour'])  ?>">
                       </div>
                      
                        <div class="form-group">
                           <label class="control-label">Validation(OK/NON)</label>
                           <select name="val2" class=" form-control" value="<?php echo($auto['val2']) ?>" >
                                  <option value="OK">OK</option>
                                  <option value="NON">NON</option>
                            </select>    
                       </div>
                       <p><button type="submit" name='valider' class="btn btn-success" value="valider"> Valider</button> </p>
		                   
				               <input type='hidden' name='numorg'  value="<?php echo($_GET["id"])  ?>"/>
				
				
				</form>
					
				
				</div>
					
		           
		<?php
		}else{
			echo "erreure dans l'execution de la requete</br>";
			echo "le message d'erreure est :".mysql_error($cnx);
		}
		?>
		</div>
		</body>
		</html>
	