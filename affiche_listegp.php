<?php
session_start();
//Appel du fichier de connexiion
require_once('connect/connexion.php');
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
</tr>" ;
$ch2 = "";        
//Exécution de la requête
while($gp=mysqli_fetch_array($query_select)){

    $ch2 = $ch2." <tr>
    <td>".$gp['Pays_destination']."</td>
    <td>".$gp['lieux_dep']."</td>
    <td>".$gp['pays_arriv']."</td>
    <td>".$gp['lieux_arriv']."</td>
    <td>".$gp['date_dep']."</td>
    <td>".$gp['date_arriv']."</td>
    <td>"."<a href='details.php'> Details</a>"."</td>
    </tr>" ;
    }
    echo $ch.$ch2 ."</table>";
mysqli_close($conn);
?>
