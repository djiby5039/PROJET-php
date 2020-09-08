<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel='stylesheet'  href="Style/inscription.css"/>
    <title>Document</title>
</head>
<body>
         <h1>INSCRIVER VOS DONNEES SONT PROTEGEES</h1>
    <form action="ajoutclient.php" method="POST">
        <label for="">Prenom</label><br>
       <input type="text"  name="prenom"><br><br>

       <label for="nom">nom</label><br>
       <input type="text" name="nom"><br><br>

       <label for="">N° Carte d'identite</label><br>
       <input type="text" name="numeroC"><br><br>

       <label for="">N° Telephone</label><br>
       <input type="text" name="numeroT"><br><br>

       <label for="">Civilite</label><br>
       <input type="text" name="civil"><br><br>

       <label for="">Email</label><br>
       <input type="mail" name="email"><br><br>

       <label for=""> Adresse</label><br>
       <input type="text" name="adr"><br><br>

       <label for="">Mot de passe</label><br>
       <input type="password" name="mdp"><br><br>

       <label for=""> Confirmer Mot de passe</label><br>
       <input type="password" name="mdp1"><br><br>



       <input type="submit" value="VALIDEZ">
    
    </form>
</body>
</html>