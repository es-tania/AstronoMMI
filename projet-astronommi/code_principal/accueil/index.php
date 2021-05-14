<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link rel="icon" type="image/png" href="image/logo_avec_nom.png">
    <title>Accueil - Astronommi</title>
</head>

<body id="parallax">
    <!--ID qui permet de faire l'effet parallax-->
    <div class="layer1">
        <?php 
        include('index.html')
        ?>
        <footer>
            <form action="envoi.php" method="get">
                <legend>Pour nous contacter</legend>
                <input type="text" name="nom_utilisateur" id="nom_utilisateur" placeholder="Nom*"><br>
                <input type="text" name="prenom_utilisateur" id="prenom_utilisateur" placeholder="Prénom*"><br>
                <input type="email" name="courriel" id="courriel" placeholder="Email*"><br>
                <textarea rows="5" cols="50" name="message" placeholder="Message"></textarea><br>
                <input type="submit" id="envoi" value="Envoyer">
            </form>
            <img src="image/planete_footer.png" alt="" class="BottomPlanet">
        </footer>
    </div>

</body>
<script type="text/javascript" src="app.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

</html>