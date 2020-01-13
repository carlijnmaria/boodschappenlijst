<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Verwijder van de lijst</title>
</head>
<body>

<?php

// 1. Connectie maken met de database
$dbc = mysqli_connect('localhost', 'root', 'root', 'boodschappenlijst') or die ('Error connecting');

// 2. Kijken in de database en alle boodschappen tevoorschijn halen
$query = "SELECT * FROM product";
$result = mysqli_query($dbc, $query) or die ('Error querying');
echo '<table>';

// 3. Loopje waarin alle boodschappen in beeld worden gebracht
while ($row = mysqli_fetch_array($result)) {

    $id = $row['idproduct'];
    $omschrijving = $row['omschrijving'];


    echo '<tr>';
    echo "<td>$id</td><td>$omschrijving</td>";
    echo '<td>';
    echo '<a href="verwerk-delete.php?id=' . $id . '">DELETE</a>';
    echo '</td>';
    echo '</tr>';
}

echo '</table>';
?>

</body>
</html>