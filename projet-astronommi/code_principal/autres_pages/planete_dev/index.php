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
                <img src="assets/img/fusee.png" alt="Fusée de décoration" class="fusee">
                <h1 class="destination">Destination :<br>Planète Développement</h1>
                <div class="cadre">
                    <p class="presentation">
                    - Tiens, nous avons un visiteur ! Bienvenue sur la planète Développement !<br><br>Les habitants de cette planète adorent passer leur temps au café Visual Studio Code. Ici, tu retrouveras des passionnés de la technique : si tel est ton cas, tu as atterri sur la bonne planète ! <br>
                    Le développement web consiste à programmer des sites web ou applications web destinés à être publiés sur des serveurs. Pour cela, il faut d’abord maîtriser les langages de mise en forme HTML et CSS. L’usage d‘autres langages de programmation est aussi nécessaire tels que JavaScript, PHP, SQL... Enfin, des compétences en réseaux sont aussi utiles notamment pour la publication sur les serveurs du projet.<br>
                    Sur cette planète, tu retrouveras d’anciens habitants de la planète DUT MMI qui ont particulièrement aimé l'algorithmique et la programmation, l’intégration web, le service sur réseaux. Si tu te reconnais dans cette description, je t’invite à poser tes bagages et découvrir la planète Dev’ en défilant !<br><br>
                    Bonne visite ! -
                    </p>
                </div>
                <img src="assets/img/perso_dev.png" alt="Personnage principal de la planète" class="perso">
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
                <a role="button" href="#18"><img src="assets/img/admin-reseau.png" alt="Borne réseau pour le métiers Administrateur Réseau" class="batiments reseau"></a>
                <a role="button" href="#16"><img src="assets/img/develop-back.png" alt="Ordinateur pour le métier de Développeur-Back" class="batiments back"></a>
                <a role="button" href="#17"><img src="assets/img/develop-full-stack.png" alt="Ordinateur pour le métier de Développeur-Fullstack" class="batiments fullstack"></a>
                <a role="button" href="#15"><img src="assets/img/develop-front-v2.png" alt="Balise pour le métier de Développeur-Front" class="batiments front"></a>

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
                    <li><a href="../apropos/but_mmi/index.html" class="nav-link">Le BUT MMI</a></li>
                    <li><a href="../apropos/a_propos/index.html" class="nav-link">A propos</a></li>
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