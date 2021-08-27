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
				
				<form action='modifauto1.php' method='post'>
				<div class="panel panel-default spacer col-md-6 col-xs-6 col-md-offset-3">
               <div class="panel-heading"><h2>Autorisation</h2> <form method="post" action="accueil.php">
				<button type="submit" class="btn btn-success " value="ACCUEIL"> Accueil</button>
			</form></div>
               <div class="panel-body">
                                
					<form action='modifauto1.php' method='post'>
                       <div class="form-group">
                           <label class="control-label">NUM</label>
                           <input type="test" name="id" class="form-control couleur_texte" value="<?php echo($auto['id'])  ?>" >
                       </div>
                        <div class="form-group">
                           <label class="control-label">Matricule</label>
                           <input type="test" name="mat" value="<?php echo($auto['mat'])  ?>" class="form-control " >
                       </div>
                       <div class="form-group">
                           <label class="control-label">Nom</label>
                           <input type="test" name="nom" value="<?php echo($auto['nom'])  ?>" class="form-control " >
                       </div>
                        <div class="form-group">
                           <label class="control-label">Prénom</label>
                           <input type="test" name="prenom" value="<?php echo($auto['prenom'])  ?>" class="form-control " >
                       </div>
					    <div class="form-group">
                           <label class="control-label">Service:</label>
                           <input type="test" name="service" class="form-control couleur_texte" value="<?php echo($auto['service'])?>" >
                       </div>
					     <div class="form-group">
                           <label class="control-label">Poste</label>
                           <input type="test" name="fonction" value="<?php echo($auto['fonction'])  ?>" class="form-control " >
                       </div>
                          <div class="form-group">
                           <label class="control-label">Motif:</label>
                           <input type="test" name="objet" value="<?php echo($auto['objet'])  ?>" class="form-control " >
                       </div>
                        <div class="form-group">
                           <label class="control-label">Destination:</label>
                           <input type="test" name="destination" class="form-control couleur_texte" value="<?php echo($auto['destination'])  ?>">
                       </div>
                      
                        <div class="form-group">
                           <label class="control-label">Validation(OUI/NON)</label>
                           <select name="val1" class=" form-control" value="<?php echo($auto['val1']) ?>" > 
                           	<option value="OK"> OUI</option>
                           	<option value="NON">NON</option> 
                            </select>   
                       </div>
		                   
				               <input type='hidden' name='numorg'  value="<?php echo($_GET["id"])  ?>"/>
				
				<p><button type="submit" name='valider' class="btn btn-success" value="valider"> Valider</button> </p>
				</form>
						</div>
					</div>
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
	