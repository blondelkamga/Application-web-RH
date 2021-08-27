<?php
session_start();
?>
<!Doctype html>
<html>

<head>
	<!doctype html>
	<html lang="fr">
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="css/style.css" />
</head>

<body class="tout">
	<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "bd_sortie";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed:" . $conn->connect_error);
	}
	//Reception des données du formulaire
	$mat				= @$_POST['mat'];
	$nom				= @$_POST['nom'];
	$prenom				= @$_POST['prenom'];
	$site				= @$_POST['site'];
	$fonction			= @$_POST['fonction'];
	$motifAbs	 		= @$_POST['motifAbs'];
	$observation 		= @$_POST['observation'];

	//stockage des donnees du formulaire dans la BD
	$sql = "INSERT INTO `abscence`(`idAbscence`,`mata`,`nomAbsence`,`prenoma`,`site`, `dateAbscence`, `motif`, `commentaires`)
	VALUES (NULL ,'$mat','$nom','$prenom','$site',CURRENT_TIMESTAMP,'$motifAbs','$observation')";


	//verification de l'aboutissement de la requette
	if ($conn->query($sql) === TRUE) {
		echo "........................................................................";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}



	?>


	<div class="en_page">
		<div class="container">
			<div class="panel panel-default spacer col-md-6 col-xs-6 col-md-offset-3">
				<div class="panel-heading">
					<h1>Cette employe est marque comme absent</h1>
				</div>
				<div class="panel-body">

					<p>Voici un rappel des informations que vous avez envoyé.</p>
					<p><b>Agence:</b><span id="mat"><?php echo($site) ?></span></p>
					<p><b>Nom:</b><span id="mat"><?php echo($nom) ?></span></p>
					<p><b>Prenom:</b><span id="mat"><?php echo($prenom) ?></span></p>
					<p><b>Motif:</b><span id="mat"><?php echo($motifAbs) ?></span></p>
					<p><b>Commentaires:</b><span id="mat"><?php echo($observation) ?></span></p>

					<form method="post" action="acceuil.php">
						<button type="submit" class="btn btn-primary" value="RETOUR"> RETOUR AU MENU POUR VALIDER</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</body>

</html>