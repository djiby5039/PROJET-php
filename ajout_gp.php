<?php
session_start();
//Appel du fichier de connexiion
require_once('connect/connexion.php');
//Récupération des données provenant du formulaire
$destination=$_POST['destination'];
$depart=$_POST['depart'];
$arrivee=$_POST['arrivee'];
$lieux_arrivee=$_POST['lieuarrive'];
$date_depart=$_POST['datedep'];
$date_arrivee=$_POST['datearriv'];
$date_clos=$_POST['dateclos'];
$Type_bien=$_POST['typebien'];
$service_add=$_POST['serviceadd'];
$kilo_dispo=$_POST['kilodispo'];
$Prix_kilo=$_POST['prixunit'];
$Moyen_trans=$_POST['moyentrans'];
$Paiement=$_POST['paiement'];
$kilo_restant=$_POST['kilodispo'];
$id_client= $_SESSION['id_client'];
//Définition de la requête d'insertion 
$sql_ajout="insert into gp values(null,'$destination','$depart','$arrivee',
'$lieux_arrivee','$date_depart',
'$date_arrivee', '$date_clos', '$Type_bien'
,'$service_add',$kilo_dispo,$Prix_kilo,$kilo_restant,'$Moyen_trans','$Paiement',$id_client)";
//Exécution de la requête
$query_ajout=mysqli_query($conn,$sql_ajout) or die(mysqli_error($conn));
mysqli_close($conn);
//Redirection
header("location:acceuil.php");
?>