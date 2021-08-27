<!Doctype html>
<html>
<head>
	<!doctype html>
<html lang="fr">
<meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
	
</head>
<body> 
<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "bd_sortie";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}  
	//Reception des données du formulaire
	$matri			=$_POST['smat'];
	$madate			=$_POST['date'];
	$nom			=$_POST['snom'];
	$prenom			=$_POST['sprenom'];
	$site			=$_POST['ssite'];
	$fonction		=$_POST['sfonction'];
	$nbre			=$_POST['nbrp1'];
	$date1			=$_POST['datedepp'];
	$heure1			=$_POST['hdepp'];
	$date2			=$_POST['dateretp'];
	$heure2			=$_POST['hretp'];
	$motif			=$_POST['objet'];
	
	
	$sql = "INSERT INTO permission (idp, matp, datejrp, nomp,prenomp,fonctionp,sitep,nbrjr1p,datedepp,hdepp,dateretp,hretp,motifp)
	VALUES (NULL, '$matri', '$madate','$nom','$prenom','$fonction','$site','$nbre','$date1','$heure1','$date2','$heure2','$motif')";
	//VALUES (NULL, 'DL0822', '2017-01-14','DEUGOUE','Marie','info','design','mboppi','controle de tout')";

if ($conn->query($sql) === TRUE) {
    echo "........................................................................";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}	
?>
       <div class="container">
		<div class="panel panel-default spacer col-md-6 col-xs-6 col-md-offset-3">
               <div class="panel-heading"><h1>Votre demande de permission à bien été envoyée!!!</h1> </div>
               <div class="panel-body">
	

	
		<p>Voici un rappel des informations que vous avez envoyé.</p>
		<p><b>Date:</b><span id="date"><?php echo($madate)?></span></p>
		<p><b>Matricule:</b><span id="smat"><?php echo($matri)?></span></p>
		<p><b>Nom:</b><span id="snom"><?php echo($nom)?></span></p>
		<p><b>Prénom:</b><span id="sprenom"><?php echo($prenom)?></span></p>
		<p><b>Fonction:</b><span id="sfonction"><?php echo($fonction)?></span></p>
		<p><b>Site:</b><span id="ssite"><?php echo($site)?></span></p>
		<p><b>Nombre de jour:</b><span id="nbrp1"><?php echo($nbre)?></span></p>
		<p><b>Date de départ:</b><span id="datedepp"><?php echo($date1)?></span></p>
		<p><b>Heure de départ:</b><span id="hdepp"><?php echo($heure1)?></span></p>
		<p><b>Date retour:</b><span id="dateretp"><?php echo($date2)?></span></p>
		<p><b>Heure retour:</b><span id="hretp"><?php echo($heure2)?></span></p>
		<p><b>Motif:</b><span id="objet"><?php echo($motif)?></span></p>
		
		<form method="post" action="acceuil.php">
			<button type="submit" class="btn btn-success" value="RETOUR"> RETOUR</button>
		</form>
	</div>
</div>
</div>
</body>
</html>
