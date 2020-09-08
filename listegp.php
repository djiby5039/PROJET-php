<?php 
    require_once("connexion_db/conn_db.php");
    $sql="SELECT * FROM participant NATURAL JOIN societe";
    $requete=mysqli_query($connexion,$sql) or die(mysqli_error($connexion));

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table>
        <caption>Liste des GP</caption>
        <tr>
            <th>prenom</th>
            <th>Nom</th>
            <th>Pays de destination</th>
            <th>Lieu de Depart</th>
            <th>Lieu d'arrivee</th>
            <th>Date de depart</th>
            <th>Date d'arrivee</th>
            <th>Date cloture colis</th>
            <th>Nombre de kg</th>
            <th>Prix de transport</th>
        </tr>
        <?php 
            while($ligne=mysqli_fetch_array($requete)){
                echo "<tr>
                <td>".$ligne['prenom']."</td>
                <td>".$ligne['nom']."</td>
                <td>".$ligne['pay_destination']."</td>
                <td>".$ligne['lieu_depart']."</td>
                <td>".$ligne['lieu_arrivee']."</td>
                <td>".$ligne['date_depart']."</td>
                <td>".$ligne['date_arrivee']."</td>
                <td>".$ligne['date_cloture']."</td>
                <td>".$ligne['date_nombre_kg']."</td>
                <td>".$ligne['Prix_transport']."</td>
                </tr>";
            }
            mysqli_close($connexion);
        ?>
        
    </table>
</body>
</html>