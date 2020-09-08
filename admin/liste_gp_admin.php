<?php
session_start();
//Appel du fichier de connexiion
require_once('../connect/connexion.php');
//Définition de la requête d'insertion
$sql_select=" select * from gp"  ;
$query_select=mysqli_query($conn,$sql_select) or die(mysqli_error($conn));
$ch = "<table>
<tr>
<th>Pays_destination</th>
<th>lieux_dep</th>
<th>pays_arriv</th>
<th>lieux_arriv</th>
<th>date_dep</th>
<th>date_arriv</th>
<th>date_clos</th>
<th>type_bien_trans</th>
<th>service_add</th>
<th>nb_kilo_dispo</th>
<th>prix_kilo</th>
<th>nbr_kilo_rest</th>
<th>moyen_trans</th>
<th>moyen_paiement</th>
<th>id_client</th>
<th>supprimer</th>
</tr>" ;
$ch2 = "";        
//Exécution de la requête
while($gp=mysqli_fetch_array($query_select)){
    $id_gp=$gp['id_gp'];
    $ch2 = $ch2." <tr>
    <td>".$gp['id_gp']."</td>
    <td>".$gp['Pays_destination']."</td>
    <td>".$gp['lieux_dep']."</td>
    <td>".$gp['pays_arriv']."</td>
    <td>".$gp['lieux_arriv']."</td>
    <td>".$gp['date_dep']."</td>
    <td>".$gp['date_arriv']."</td>
    <td>".$gp['date_clos']."</td>
    <td>".$gp['type_bien_trans']."</td>
    <td>".$gp['service_add']."</td>
    <td>".$gp['nb_kilo_dispo']."</td>
    <td>".$gp['prix_kilo']."</td>
    <td>".$gp['nbr_kilo_rest']."</td>
    <td>".$gp['moyen_trans']."</td>
    <td>".$gp['moyen_paiement']."</td>
    <td>".$gp['id_client']."</td>
    <td>"."<a href='supprimer.php?id=$id_gp'>supprimer</a>"."</td>
    </tr>" ;
    }
    echo $ch.$ch2 ."</table>";
mysqli_close($conn);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel='stylesheet'  href="../Style/acceuil.css"/>
    <title>Document</title>
</head>
<body>
    
</body>
</html>