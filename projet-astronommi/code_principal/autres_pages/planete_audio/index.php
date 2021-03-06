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
    <title>Planète Audiovisuel</title>
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
                <img src="assets/img/fusee.png" alt="" class="fusee">
                <h1 class="destination">Destination :<br>Planète Audiovisuel</h1>
                <div class="cadre">
                    <p class="presentation">
                        - Bienvenue sur la planète Audiovisuel !<br>
                        Ici, vous pourrez découvrir différents métiers qui permettent d’exercer dans ce domaine.
                        Mais au final, c’est quoi l’audiovisuel ?<br>
                        L’audiovisuel est un domaine qui se réfère à tout travail qui utilise à la fois du son et de
                        l'image, et qui englobe donc les équipements et les procédés utilisés pour la télévision, le
                        cinéma, ou encore la vidéo. Il peut aussi être utilisé pour le multimédia.<br>
                        L’audiovisuel est constitué de différentes étapes qui sont l’écriture, le développement, la
                        préproduction, la production et la postproduction. Ainsi, pour toutes ces étapes, il existe
                        plusieurs métiers différents qui sont mis en jeu.<br>
                        Pour faire bref, ce domaine en regroupe plusieurs autres tels que le cinéma, l’animation, les
                        effets visuels, le son et l’image qui seront présentés.<br>
                        En continuant votre aventure sur ma planète, vous verrez les différents métiers du domaine de
                        l'audiovisuel.<br>
                        Bonne découverte ! -
                    </p>
                </div>
                <img src="assets/img/perso_audiovisuel.png" alt="Personnage principal de la planète" class="perso">
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
                <a onclick="on()" id="image"><img src="assets/img/image.png" alt="Batiment pour le sous-domaine Image" class="batiments image"></a>
                <a onclick="on()" id="son"><img src="assets/img/batiment-son.png" alt="Batiment pour le sous-domaine Son" class="batiments son"></a>
            </div>

            <div class="slide-3">
                <a onclick="on()" id="texte"><img src="assets/img/texte.png" alt="Batiment pour le sous-domaine Texte" class="batiments texte"></a>
                <a onclick="on()" id="direction"><img src="assets/img/direction.png" alt="Batiment pour le sous-domaine Direction" class="batiments direction"></a>
                <a onclick="on()" id="decor"><img src="assets/img/decor.png" alt="Batiment pour le sous-domaine Décor" class="batiments decor"></a>
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
                <div class="layer layer-7"></div>
                <div class="layer layer-8"></div>
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
                    <li class="nav-link planete_actuel">Audiovisuel</li>
                    <li><a href="../planete_dev/index.php" class="nav-link">Développement</a></li>
                    <li><a href="../planete_com/index.php" class="nav-link">Communication</a></li>
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