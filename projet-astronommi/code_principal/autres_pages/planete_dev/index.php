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
    <title>Planète Développement</title>
</head>

<body>
    <?php include('../page_chargement/page_chargement.php')?>
    <div id="overlay">
        <div id="text">
            <div class="fiche">
                <?php include('metier.php')?>
            </div>
        </div>
    </div>

    <div class="container">
        <!--Ces deux premières div permettant de faire le scroll horizontal-->
        <div class="blocHorizontal">
            <!-- Elements sur la planètes (batiments, personnages etc) -->
            <div class="slide-1">
                <img src="assets/img/fusee.png" alt="" class="fusee">
                <h1 class="destination">Destination :<br>Planète Audiovisuel</h1>
                <div class="cadre">
                    <p class="presentation">
                        - Bienvenue sur la planète audiovisuelle !<br>
                        Ici, vous pourrez découvrir différents métiers qui permettent d’exercer dans ce domaine.
                        Mais au final, c’est quoi l’audiovisuel ?<br>
                        L’audiovisuel est un domaine qui se réfère à tout travail qui utilise à la fois, du son et de
                        l'image, et qui englobe donc les équipements et les procédés utilisés pour la télévision, le
                        cinéma,ou encore la vidéo. Il peut aussi être utilisé pour le multimédia.<br>
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
                <img src="assets/img/perso_dev.png" alt="" class="perso">
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
                <a role="button" href="#15"><img src="assets/img/batiment-son.png" alt="" class="batiments front"></a>
                <a role="button" href="#16"><img src="assets/img/image.png" alt="" class="batiments back"></a>
                <a role="button" href="#17"><img src="assets/img/Decor.png" alt="" class="batiments fullstack"></a>
                <a role="button" href="#18"><img src="assets/img/texte.png" alt="" class="batiments reseau"></a>
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
                <a href="../../index.php" class="nav-link">
                    <h2>Accueil</h2>
                </a>
                <h2>Planètes</h2>
                <ul>
                    <li><a href="../planete_audio/index.php" class="nav-link">Audiovisuel</a></li>
                    <li class="nav-link planete_actuel">Développement</li>
                    <li><a href="../planete_com/index.php" class="nav-link">Communication</a></li>
                    <li><a href="../planete_art/index.php" class="nav-link">Art&Design</a></li>
                </ul>
                <h2>Infos</h2>
                <ul>
                    <li><a href="#" class="nav-link">Le BUT MMI</a></li>
                    <li><a href="#" class="nav-link">A propos</a></li>
                </ul>
            </div>
        </nav>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
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
    <script type="text/javascript" src="../page_chargement/app.js"></script>
</body>

</html>