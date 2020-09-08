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
$motpasse=$_POST['mdp'];
$motpasse1=$_POST['mdp1'];
//Définition de la requête d'insertion
$mp=sha1($motpasse); 
$sql_ajout="insert into client values(null,'$Prenom','$Nom','$N°carte' ,'$N°tel','$civilite',
'$email', '$adresse', '$mp')";
//Exécution de la requête
if($motpasse == $motpasse1){

    

    $query_ajout=mysqli_query($conn,$sql_ajout) or die(mysqli_error($conn));
}
else{
    echo "Les deux mots de passe ne correspondent pas ";
}

mysqli_close($conn);
//Redirection
header("location:acceuil.php");
?>