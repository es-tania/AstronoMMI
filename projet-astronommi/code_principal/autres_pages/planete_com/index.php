<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/scroll_horizontal.css">
    <link rel="stylesheet" href="assets/styles.css">
    <link rel="stylesheet" href="assets/menu.css">
    <link rel="stylesheet" href="../page_chargement/page_chargement.css">
    <link rel="icon" type="image/png" href="assets/img/logo_avec_nom.png">
    <title>Planète Communication</title>
</head>

<body>
    <?php include('../page_chargement/page_chargement.php')?>
    <div class="overlay">
        <img src="assets/img/tablette.png" alt="" class="tablette">
        <div id="text">
            <div>
                <!--Div qui contient le bouton retour -->
                <a href="#!" role="button" class="close close-tablet" aria-label="close this modal" onclick="off()"><img
                        src="assets/img/precedent.png" alt="" class="precedent">
                </a>
                <!-- Div de class="fiches" avec le titre h2 et fiche métiers de chaque sous domaine-->
                <?php include('carte.php') ?>
            </div>
        </div>
    </div>

    <?php include('metiers.php')?>

    <div class="container">
        <!--Ces deux premières div permettant de faire le scroll horizontal-->
        <div class="blocHorizontal">
            <!-- Elements sur la planètes (batiments, personnages etc) -->
            <div class="slide-1">
                <img src="assets/img/fusee.png" alt="Fusée de décoration" class="fusee">
                <h1 class="destination">Destination :<br>Planète Communication</h1>
                <div class="cadre">
                    <p class="presentation">
                        - Bienvenue sur la planète communication !<br>
                        Ici, vous pourrez découvrir différents métiers qui permettent d’exercer dans ce domaine. Mais au final, c’est quoi la communication ?<br>
                        La communication est une des spécialités du DUT MMI. Elle relève du marketing et fait connaître, donne envie, rassure sur la qualité d’une marque, d’un produit ou d’un service. Elle joue donc un rôle clé pour faire progresser les ventes.<br>
                        Les supports de communication sont l'édition, l’audiovisuel, les sites internet, l'événementiel, la publicité et beaucoup d’autres…<br>
                        Pour accéder à un métier dans la communication on peut faire différentes études comme des licences ou encore des masters mais aussi avoir différentes compétences comme maîtriser des langues, des techniques professionnelles et avoir une culture du web.<br>
                        En continuant votre aventure sur ma planète, vous verrez les différents métiers du domaine de la  communication .<br>
                        Bonne découverte ! -
                    </p>
                </div>
                <img src="assets/img/perso_com.png" alt="Personnage principal de la planète" class="perso">
                <div class="scroll">
                    <div class="icon-scroll">
                        <div class="mouse">
                            <div class="wheel"></div>
                        </div>
                        <div class="icon-arrows">
                            <span></span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="slide-2">
                <a onclick="on()" id="management"><img src="assets/img/management.png" alt="Batiment pour le sous-domaine Management" class="batiments management"></a>
                <a onclick="on()" id="presse"><img src="assets/img/presse.png" alt="Batiment pour le sous-domaine Presse" class="batiments presse"></a>
                <a onclick="on()" id="multimedia"><img src="assets/img/multimédia.png" alt="Batiment pour le sous-domaine Multimédia" class="batiments multimedia"></a>
            </div>

            <div class="slide">
                <div class="layer color"></div>
                <div class="layer layer-0"></div>
                <div class="layer layer-1"></div>
                <div class="layer layer-2"></div>
                <div class="layer layer-3"></div>
                <div class="layer layer-4"></div>
                <div class="layer layer-5"></div>
                <div class="layer layer-6"></div>
            </div>
        </div>
    </div>

    <!-- Div pour le menu burger -->
    <div class="menu">

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
                <a href="../../index.php" class="nav-link">
                    <h2>Accueil</h2>
                </a>
                <h2>Planètes</h2>
                <ul>
                    <li><a href="../planete_audio/index.php" class="nav-link">Audiovisuel</a></li>
                    <li><a href="../planete_dev/index.php" class="nav-link">Développement</a></li>
                    <li class="nav-link planete_actuel">Communication</li>
                    <li><a href="../planete_art/index.php" class="nav-link">Art&Design</a></li>
                </ul>
                <h2>Infos</h2>
                <ul>
                    <li><a href="../apropos/but_mmi/index.html" class="nav-link">Le BUT MMI</a></li>
                    <li><a href="../apropos/a_propos/index.html" class="nav-link">A propos</a></li>
                </ul>
            </div>
        </nav>
    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="assets/app.js"></script>
    <script src="../page_chargement/app.js"></script>
</body>

</html>