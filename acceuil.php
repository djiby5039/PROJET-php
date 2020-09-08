<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel='stylesheet'  href="Style/acceuil.css"/>
    <title>Document</title>
</head>
<body>
    <div id='gauche'>
        <ul>
            <li><a href='gptrans.php'>Je veux Transporter</a></li>
            <li><a href='destinataire.php'>Je veux envoyer</a></li>
            <li><a href='description.php'>Comment ca marche</a></li>
        </ul>
    </div>
    <div id="droite">
        <ul>
            <li id=""><a href='inscription.php'>Inscription</a></li>
            <li id=""><a href='connecter.php'>Connexion</a></li>
            <li id=""><a href='Deconnexion.php'>Deconnexion</a></li>
        </ul>
    </div>
    <br>
    <br>

    <div>
        <div id="images">
            <h1>Nos Destinations</h1>
            <img src='img/1.jpg' style="display: block;"> 
            <img src='img/2.jpg' style="display: none;" >
            <img src='img/3.jpg' style="display: none;" > 
            <img src='img/4.jpg' style="display: none;"> 
            <img src='img/5.jpg' style="display: none;">
            <img src='img/6.jpg' style="display: none;" > 
            <img src='img/7.jpg' style="display: none;" >
            <img src='img/8.jpg' style="display: none;" > 
            <img src='img/9.jpg' style="display: none;"> 
            <img src='img/10.jpg' style="display: none;">
            <img src='img/11.jpg' style="display: none;"> 
        </div>
        <div id='video'> 
            <video src="video/colis.mp4" width=850px  height=250px  preload="auto" autoplay controls >Description</video>
        </div>
    </div>

    <div>
        <?php
        include('affiche_listegp.php');
        ?>
    </div>
    <script type="text/javascript" src="script/defiler_image.js"></script>
    <div id="footer">
         
    </div>

</body>

</html>