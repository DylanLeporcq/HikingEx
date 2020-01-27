<?php
include "server.php";

function showAll()
{
    global $conn;
    $test =
        "
            SELECT *
            FROM hiking 
        ";
    $result = $conn->query($test);
    while ($tst = $result->fetch_assoc() ) {
        echo "<tr><td>".$tst['name']."</td></tr>";
    }
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Randonnées</title>
    <link rel="stylesheet" href="css/basics.css" media="screen" title="no title" charset="utf-8">
  </head>
  <body>
    <h1>Liste des randonnées</h1>
    <table>
        <tr>
            <td>Nom de la randonnée</td>
            <td>Critere 2</td>
            <td>Critere 3</td>
        <?php showAll(); ?>
    </table>

    <a href="create.php">Ajouter une nouvelle randonnée</a>
  </body>
</html>
