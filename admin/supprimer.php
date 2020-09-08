<?php
    session_start();
    require_once('../connect/connexion.php');
    $id=$_GET['id'];
    $sql="DELETE FROM gp where id_gp=$id";
    $requete=mysqli_query($conn,$sql) or die(mysqli_error($conn));

    if($requete){
        header("Location: liste_gp_admin.php?msg=Vous avez supprimer le gp avec succes");
    }
    else{
        header("Location: liste_gp_admin.php?msg=Une erreur s'est produit lors de la suppression");
    }
    mysqli_close($conn);
    
?>