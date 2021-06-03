<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/styles.css">
    <link rel="stylesheet" href="assets/menu.css">
    <link rel="stylesheet" href="autres_pages/page_chargement/page_chargement.css">
    <link rel="icon" type="image/png" href="assets/image/logo_avec_nom.png">
    <title>Accueil - Astronommi</title>
</head>

<body id="parallax">
    <div class="fond"><img src="autres_pages/page_chargement/logo_avec_nom.png" alt=""><span class="loader"></span></div>
    <!--ID qui permet de faire l'effet parallax-->
    <div class="layer1">
    <div class="first" id="accueil">
        <!-- Div pour placer tous les élements au haut de la page -->
        <a href="#accueil"><img src="assets/image/logo_avec_nom.png" alt="Logo en haut à gauche" class="logo"></a>
        <img src="assets/image/fusee.png" alt="" class="rocket">
        <a title="Le BUT MMI" href="autres_pages/apropos/but_mmi/index.html" target="_blank"><img src="assets/image/satelite-mmi-v2.png" alt="Satellite page MMI" class="mmi satellite"></a>
        <a title="A propos" href="autres_pages/apropos/a_propos/index.html" target="_blank"><img src="assets/image/satelite-a-propos.png" alt="Satellite page A propos" class="apropos satellite"></a>
        <a title="Contact" href="#contact"><img src="assets/image/satelite-contact-v2.png" alt="Satellite Contact" class="contact satellite"></a>
        <h1>Astronommi</h1>
        <p>Découvre les métiers possibles après le DUT MMI</p>
        <div class="FiltersOrScroll">
            <a href="autres_pages/filtre/index.php" class="FiltersButton">Utilise les filtres de recherche pour trouver un métier</a>
            <p>OU</p>
            <p>↓ Balade toi dans la galaxie ! ↓</p>
        </div>
    </div>

    <div class="menu">
        <!-- Div pour le menu burger -->
        <button class="click-bouton">
            <!-- Création de l'icon du menu -->
            <div id="icon-menu">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </button>
        <nav class="sidebar">
            <h1>Menu</h1>
            <div class="menu-link">
                <h2>Planètes</h2>
                <ul>
                    <li><a href="autres_pages/planete_audio/index.php" class="nav-link" target="_blank">Audiovisuel</a></li><br>
                    <li><a href="autres_pages/planete_dev/index.php" class="nav-link" target="_blank">Développement</a></li><br>
                    <li><a href="autres_pages/planete_com/index.php" class="nav-link" target="_blank">Communication</a></li><br>
                    <li><a href="autres_pages/planete_art/index.php" class="nav-link" target="_blank">Art&Design</a></li>
                    <h2>Infos</h2>
                    <li><a href="autres_pages/apropos/but_mmi/index.html" class="nav-link" target="_blank">Le BUT MMI</a></li><br>
                    <li><a href="autres_pages/apropos/a_propos/index.html" class="nav-link" target="_blank">A propos</a></li><br>
                </ul>
            </div>
        </nav>
    </div>

    <div class="planete">
        <!--Planètes-->
        <div class="planete-et-titre clickable"><a title="Planète Audiovisuel" href="autres_pages/planete_audio/index.php" target="_blank"><img src="assets/image/planetes_audio.png" alt=""></a><h2>Planète<br>Audiovisuel</h2></div>
        <div class="planete-et-titre clickable"><h2>Planète<br>Développement</h2><a title="Planète Développement" href="autres_pages/planete_dev/index.php" target="_blank"><img src="assets/image/planete_dev.png" alt="" class="planète2"></a></div>
        <div class="planete-et-titre clickable"><a title="Planète Communication" href="autres_pages/planete_com/index.php" target="_blank"><img src="assets/image/planete_com.png" alt=""></a><h2>Planète<br>Communication</h2></div>
        <div class="planete-et-titre clickable"><h2>Planète<br>Art et Design</h2><a title="Planète Art&Design" href="autres_pages/planete_art/index.php" target="_blank"><img src="assets/image/planetes_art.png" alt=""></a>
    </div>
        <div id="contact" class="footer">
            <img src="assets/image/planete_footer.png" alt="">
            <form action="envoi.php" method="get">
                <legend>Pour nous contacter</legend>
                <input type="text" name="nom_utilisateur" id="nom_utilisateur" placeholder="Nom*" required
                data-validation-required-message="Merci d'entrer votre nom."><br>
                <input type="text" name="prenom_utilisateur" id="prenom_utilisateur" placeholder="Prénom*" required
                data-validation-required-message="Merci d'entrer votre prénom."><br>
                <input type="email" name="courriel" id="courriel" placeholder="Email*" required
                data-validation-required-message="Merci d'entrer votre adresse de courriel."><br>
                <textarea rows="5" cols="50" name="message" placeholder="Message"></textarea><br>
                <input type="submit" id="envoi" value="Envoyer">
            </form>
        </div>
    </div>

</body>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script type="text/javascript" src="assets/app.js"></script>
<script type="text/javascript" src="autres_pages/page_chargement/app.js"></script>
    <script type="text/javascript">
    // Fonction qui permet de faire apparaître le menu de droite
    $(document).ready(function () {
        $('.click-bouton').click(function () {
            $('.sidebar').toggleClass('active');
            $('button').toggleClass('active-2');
        });

        $("#icon-menu").click(function () {
            $(this).toggleClass("open");
        });
    });
</script>

</html>