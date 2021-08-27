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
	$nom			= @$_POST['snom'];
	$prenom			= @$_POST['sprenom'];
	$service			= @$_POST['service'];
	$fonction		= @$_POST['sfonction'];
	$datepjc		= @$_POST['datepjc'];
	$datedjc	    = @$_POST['datedjc'];
	$nbrejc			= @$_POST['nbrejc'];
	$datert			= @$_POST['datert'];
	$typec			= @$_POST['typec'];

	$sql = "INSERT INTO conge (idc, matc, nomc,prenomc,servicec,fonctionc,datepjc,datedjc, nbrejc, datert, typec)
	VALUES (NULL, '$matri', '$nom','$prenom','$service','$fonction','$datepjc','$datedjc','$nbrejc','$datert','$typec')";
	//VALUES (NULL, 'DL0822', '2017-01-14','DEUGOUE','Marie','info','design','mboppi','controle de tout')";

	if ($conn->query($sql) === TRUE) {
		echo "........................................................................";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
	?>


	<div class="container">
		<div class="panel panel-default spacer col-md-6 col-xs-6 col-md-offset-3">
			<div class="panel-heading">
				<h1>Votre demande à bien été envoyée!!!</h1>
			</div>
			<div class="panel-body">

			<p>Voici un rappel des informations que vous avez envoyé.</p>
			<p><b>Matricule:</b><span id="smat"><?php echo($matri) ?></span></p>
			<p><b>Nom:</b><span id="snom"><?php echo($nom) ?></span></p>
			<p><b>Prénom:</b><span id="sprenom"><?php echo($prenom) ?></span></p>	<p><b>Service:</b><span id="service"><?php echo($service) ?></span></p>
			<p><b>fonction:</b><span id="sfonction"><?php echo($fonction) ?></span></p>
			<p><b>date départ congé:</b><span id="datepjc"><?php echo($datepjc) ?></span></p>
			<p><b>date retour congé:</b><span id="datedjc"><?php echo($datedjc) ?></span></p>
			<p><b>nbre jour:</b><span id="nbrejc"><?php echo($nbrejc) ?></span></p>
			<p><b>date reprise travail:</b><span id="datert"><?php echo($datert) ?></span></p>
			<p><b>type congé:</b><span id="typec"><?php echo($typec) ?></span></p>


				<form method="post" action="acceuil.php">
					<button type="submit" class="btn btn-primary" value="RETOUR"> RETOUR</button>
				</form>
			</div>
		</div>
	</div>
</body>

</html>