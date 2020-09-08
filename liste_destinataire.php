<?php
session_start();
//Appel du fichier de connexiion
require_once('connect/connexion.php');
//Définition de la requête d'insertion
$sql_select=" select * from destinataire"  ;
$query_select=mysqli_query($conn,$sql_select) or die(mysqli_error($conn));
$ch = "<table>
<tr>
<th>id_destinataire</th>
<th>prenom</th>
<th>nom</th>
<th>num_cn</th>
<th>num_tel</th>
<th>civilite</th>
<th>email</th>
<th>adresse</th>
</tr>" ;
$ch2 = "";        
//Exécution de la requête
while($desti=mysqli_fetch_array($query_select)){

    $ch2 = $ch2." <tr>
    <td>".$desti['id_destinataire']."</td>
    <td>".$desti['prenom']."</td>
    <td>".$desti['nom']."</td>
    <td>".$desti['num_cn']."</td>
    <td>".$desti['num_tel']."</td>
    <td>".$desti['civilite']."</td>
    <td>".$desti['email']."</td>
    <td>".$desti['adresse']."</td>
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
    <link rel='stylesheet'  href="Style/acceuil.css"/>
    <title>Document</title>
</head>
<body>
    
</body>
</html>
