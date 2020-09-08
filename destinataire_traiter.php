<?php
//Appel du fichier de connexiion
require_once('connect/connexion.php');
//Récupération des données provenant du formulaire
$Prenom=$_POST['prenom'];
$Nom=$_POST['nom'];
$N°carte=$_POST['numeroC'];
$N°tel=$_POST['numeroT'];
$civilite=$_POST['civil'];
$email=$_POST['email'];
$adresse=$_POST['adr'];
$sql_ajout="insert into destinataire values(null,'$Prenom','$Nom','$N°carte' ,'$N°tel','$civilite',
'$email', '$adresse')";
$query_ajout=mysqli_query($conn,$sql_ajout) or die(mysqli_error($conn));
mysqli_close($conn);
//Redirection
header("location:liste_destinataire.php");
?>