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

	$matri			= @$_POST['mate'];
	$nom			= @$_POST['nome'];
	$prenom			= @$_POST['prenome'];
	$service		= @$_POST['servicee'];
	$fonction		= @$_POST['fonction'];
	$motife			= @$_POST['motife'];
	$cmse			= @$_POST['cmse'];
	$datemett   	= @$_POST['datemett'];


	$sql = "INSERT INTO explication(ide, mate, nome,prenome,servicee,fonction,motife,cmse,dateemett)
	VALUES (NULL, '$matri', '$nom','$prenom','$service','$fonction','$motife','$cmse','$datemett')";


	if ($conn->query($sql) === TRUE) {
		echo "........................................................................";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
	?>


	<div class="container">
		<div class="panel panel-default spacer col-md-6 col-xs-6 col-md-offset-3">
			<div class="panel-heading">
				<h1>Demande enregistre avec succes </h1>
			</div>

			<form method="post" action="acceuil.php">
				<button type="submit" class="btn btn-primary" value="RETOUR"> RETOUR</button>
			</form>
		</div>
	</div>
</body>

</html>