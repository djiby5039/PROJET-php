<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel='stylesheet'  href="Style/gptrans.css"/>
    <title>Transporter</title>
</head>
<body>
    <form action="ajout_gp.php" method="POST">

        

       <label for="">Date depart</label><br>
       <input type="date" name="datedep"><br><br>

        <label for="">Pays de destination</label><br>
        <select name="destination" id="">
           <option value="">SELECTIONNEZ UN PAYS</option>  
           <option value="senegal"> senegal </option> 
           <option value="tunisie">tunisie</option>
           <option value="kenya">kenya</option>
           <option value="cap-vert">cap-vert</option>
           <option value="cote-divoire">cote-divoire</option>
           <option value="algerie">algerie</option>
           <option value="Gabon">Gabon</option>
           <option value="congo">congo</option>
           <option value="sudAfrica">sudAfrica</option>            
      </select><br><br>

      <label for="nom">Lieux de depart</label><br>
       <input type="text" name="depart"><br><br>

       <label for="">Pays arrivve</label><br>
      <select name="arrivee" id="">
           <option value="">SELECTIONNEZ UN PAYS</option>  
           <option value="senegal"> senegal </option> 
           <option value="tunisie">tunisie</option>
           <option value="kenya">kenya</option>
           <option value="cap-vert">cap-vert</option>
           <option value="cote-divoire">cote-divoire</option>
           <option value="algerie">algerie</option>
           <option value="Gabon">Gabon</option>
           <option value="congo">congo</option>
           <option value="sudAfrica">sudAfrica</option>            
      </select><br><br>

      <label for="">Lieux d'arrivee</label><br>
       <input type="text" name="lieuarrive"><br><br>


       <label for="">Date arrivee</label><br>
       <input type="date" name="datearriv"><br><br>

       <label for=""> Date cloture collecte des colis</label><br>
       <input type="date" name="dateclos"><br><br>

       <label for="">Type de bien autorises</label><br>
       <textarea rows="2" cols="50" name="typebien"> </textarea><br><br>

       <label for=""> Services additionel proposes</label><br>
       <textarea rows="2" cols="50" name="serviceadd"> </textarea><br><br>
       
       <label for="">Nombre de kilos dispo</label><br>
       <input type="number" name="kilodispo"><br><br>

       <label for="">Prix par kilo</label><br>
       <input type="number" name="prixunit"><br><br>

       <label for=""> Moyen transport</label><br>
       <textarea rows="2" cols="50" name="moyentrans"> </textarea><br><br>

       <label for="">Moyen paiement acceptee</label><br>
       <textarea rows="2" cols="50" name="paiement"> </textarea><br><br>

       <input type="submit" value="ENVOYER">
    
    </form>
</body>
</html>