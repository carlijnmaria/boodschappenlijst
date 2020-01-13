<?php

//Connectie met database
$dbc = mysqli_connect("localhost", "root", "root", "boodschappenlijst") or die ("Error connecting");
//Query schrijven
$query = "SELECT * FROM product";
//Query uitvoeren
$result = mysqli_query($dbc, $query) or die ("Error querying");

echo "<table>";

// Loopje waarin alle boodschappen in beeld worden gebracht
while ($row = mysqli_fetch_array($result)) {

    $id = $row['idproduct'];
    $omschrijving = $row['omschrijving'];


    echo '<tr>';
        echo "<td>$id</td>";
        echo "<td>$omschrijving</td>";
    echo '</tr>';
}

echo '</table>';


