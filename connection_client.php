<?php
session_start();
//Appel du fichier de connexiion
require_once('connect/connexion.php');
//Récupération des données provenant du formulaire
$email=$_POST['email'];
$motpasse=$_POST['mdp'];
//Définition de la requête d'insertion
$mp=sha1($motpasse); 
$sql_select=" select * from client  where email='".$email."' and password='".$mp."'";
$query_select=mysqli_query($conn,$sql_select) or die(mysqli_error($conn));
$ligne=mysqli_fetch_array($query_select);
//Exécution de la requête
if(mysqli_num_rows($query_select)>0){
    $_SESSION['id_client']=$ligne['id_client'];
    header("location:acceuil.php");  
    }
else{
    include('error.php');
}
mysqli_close($conn);

//Redirection
?>