<?php

//POST-array uitlezen
$boodschap = $_POST['boodschap'];

//Data in database stoppen
//1. Verbinding maken met de database
$dbc = mysqli_connect('localhost', 'root', 'root', 'boodschappenlijst') or die ("Error connecting");
//2. Query schrijven
$query = "INSERT INTO product VALUES (0, '$boodschap')";
//3. Query uitvoeren
$result = mysqli_query($dbc, $query) or die ("Error querying");
//4. Verbinding verbreken
mysqli_close($dbc);

//Bevestigen dat het in de database staat
if($result){

    echo 'De volgende gegevens zijn toegevoegd aan de database: ';
    echo "<br>";
    echo $boodschap;

}else {
    echo "Sorry er is iets mis gegaan";
}
header("Location: add.php");
