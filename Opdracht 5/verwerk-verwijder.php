<?php

$id = $_GET['idproduct'];
$dbc = mysqli_connect('localhost', 'root', 'root', 'boodschappenlijst') or die ('Error connecting');
$query ="DELETE FROM product WHERE idproduct = '$id'";
$result = mysqli_query($dbc, $query) or die ('Error deleting');

//Bevestigen dat het in de database staat
if($result){

    echo 'De volgende gegevens zijn uit de database: ';
    echo "<br>";
    echo $id;

}else {
    echo "Sorry er is iets mis gegaan";
}
