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
		die("Connection failed: " . $conn->connect_error);
	}
	//Reception des données du formulaire
	$matri			= @$_POST['smat'];
	$madate			= @$_POST['date'];
	$nom			= @$_POST['snom'];
	$prenom			= @$_POST['sprenom'];
	$service		= @$_POST['service'];
	$fonction		= @$_POST['sfonction'];
	$destination	= @$_POST['destination'];
	$objet			= @$_POST['objet'];

	$sql = "INSERT INTO autorisation (id, mat, datea, nom,prenom,service,fonction,destination,objet)
	VALUES (NULL, '$matri', '$madate','$nom','$prenom','$service','$fonction','$destination','$objet')";
	

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
					<h1>Votre demande à bien été envoyée!!!</h1>
				</div>
				<div class="panel-body">

					<p>Voici un rappel des informations que vous avez envoyé.</p>
					<p><b>Date:</b><span id="ladate"><?php echo ($madate) ?></span></p>
					<p><b>Matricule:</b><span id="mat"><?php echo ($matri) ?></span></p>
					<p><b>Nom:</b><span id="nom"><?php echo ($nom) ?></span></p>
					<p><b>Prénom:</b><span id="prenom"><?php echo ($prenom) ?></span></p>
					<p><b>Service:</b><span id="sce"><?php echo ($service) ?></span></p>
					<p><b>Poste:</b><span id="poste"><?php echo ($fonction) ?></span></p>
					<p><b>Destination:</b><span id="dest"><?php echo ($destination) ?></span></p>
					<p><b>Motif:</b><span id="motif"><?php echo ($objet) ?></span></p>

					<form method="post" action="acceuil.php">
						<button type="submit" class="btn btn-primary" value="RETOUR"> RETOUR AU MENU POUR VALIDER</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</body>

</html>