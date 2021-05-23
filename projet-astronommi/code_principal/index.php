<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/styles.css">
    <link rel="stylesheet" href="autres_pages/page_chargement/page_chargement.css">
    <link rel="icon" type="image/png" href="assets/image/logo_avec_nom.png">
    <title>Accueil - Astronommi</title>
</head>

<body id="parallax">
    <div class="fond"><img src="autres_pages/page_chargement/logo_avec_nom.png" alt=""><span class="loader"></span></div>
    <!--ID qui permet de faire l'effet parallax-->
    <div class="layer1">
        <?php 
        include('accueil.html')
        ?>
        <div id="contact" class="footer">
            <img src="assets/image/planete_footer.png" alt="">
            <form action="envoi.php" method="get">
                <legend>Pour nous contacter</legend>
                <input type="text" name="nom_utilisateur" id="nom_utilisateur" placeholder="Nom*" required="Merci d'entrer votre nom."
                data-validation-required-message="Merci d'entrer votre nom."><br>
                <input type="text" name="prenom_utilisateur" id="prenom_utilisateur" placeholder="Prénom*" required=""
                data-validation-required-message="Merci d'entrer votre prénom."><br>
                <input type="email" name="courriel" id="courriel" placeholder="Email*" required=""
                data-validation-required-message="Merci d'entrer votre adresse de courriel."><br>
                <textarea rows="5" cols="50" name="message" placeholder="Message"></textarea><br>
                <input type="submit" id="envoi" value="Envoyer">
            </form>
            
        </div>
    </div>

</body>
<script type="text/javascript" src="assets/app.js"></script>
<script type="text/javascript" src="autres_pages/page_chargement/app.js"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js">
    </script>

</html>