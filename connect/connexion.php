<?php
/*adresse du serveur: adresse IP ou le nom de la Hote (localhost=serveur local).*/
$server="localhost"; 
/*nom de l'utilisateur ayant droit sur la bdd*/
$user="Djiby"; 
//mot de passe de cet utilisateur 
$pwd="passer";
/*nom de la base de données.*/
$db = "";  
// connexion au serveur MYSQL et à la source de données
$conn=mysqli_connect ($server, $user, $pwd, $db);
?>