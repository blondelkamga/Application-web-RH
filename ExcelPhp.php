<?php
/**
 * Created by PhpStorm.
 * User: Computer
 * Date: 20/02/2018
 * Time: 12:05
 */
require_once "Classes/PHPExcel.php";

$cnx=@mysql_connect("localhost","root","") or die(mysql_error());
mysql_select_db("bd_sortie",$cnx)or die(mysql_error());

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bd_sortie";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

$fichierExcel = "LISTE_PERSONNEL.xls";
$test = false;

$sql = "SELECT * FROM `source`";
//exécution de la requête:
$resultat = mysql_query( $sql, $cnx ) ;

$excelReader = PHPExcel_IOFactory::createReaderForFile($fichierExcel);
$excelObj = $excelReader->load($fichierExcel);
$worksheet = $excelObj->getActiveSheet();
$lastRow = $worksheet->getHighestRow();

for ($row = 1; $row <= $lastRow; $row++){

    $sql = "SELECT * FROM `source`";
//exécution de la requête:
    $resultat = mysql_query( $sql, $cnx ) ;

    while( $auto = mysql_fetch_array($resultat)){
        if(strcmp($auto['smat'],$worksheet->getCell('A'.$row)->getValue()) == 0){
            $test = true;
        }
    }
    if($test == false){
        $mat = $worksheet->getCell('A'.$row)->getValue();
        $nom = $worksheet->getCell('B'.$row)->getValue();
        $prenom = $worksheet->getCell('C'.$row)->getValue();
        $fonction = $worksheet->getCell('D'.$row)->getValue();
        $site = $worksheet->getCell('G'.$row)->getValue();

        $sql = "INSERT INTO `source`(`smat`, `snom`,`sprenom`,`sfonction`, `ssite`)
                  VALUES ('$mat','$nom','$prenom','$fonction','$site')";

        if ($conn->query($sql) === TRUE) {
            echo "........................................................................";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        echo $worksheet->getCell('A'.$row)->getValue().' </br>';
    }else{
        $test = false;
    }
}

