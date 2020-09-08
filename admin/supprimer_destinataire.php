<?php
    session_start();
    require_once('../connect/connexion.php');
    $id=$_GET['id'];
    $sql="DELETE FROM destinataire where id_destinataire= $id";
    $requete=mysqli_query($conn,$sql) or die(mysqli_error($conn));

    if($requete){
        header("Location: liste_destinataire_admin.php?msg=Vous avez supprimer le destinataire avec succes");
    }
    else{
        header("Location: liste_destinataire_admin.php?msg=Une erreur s'est produit lors de la suppression");
    }
    mysqli_close($conn);
    ?>