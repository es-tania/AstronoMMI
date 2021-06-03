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
    <title>Planète Art&Design</title>
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
                    - Bienvenue à toi, étranger ! Ici, le visuel prime ! <br>
                    La planète Art&Design offre à nos yeux de jolies pépites, si tu aimes le travail soigné et esthétique, tu tombes bien ! <br>
                    Différentes possibilités s’ouvrent à toi ici sans pour autant contraindre ta créativité et ton engouement pour le Beau ! Ce qui plaît à l'œil, plaît au cœur après tout ! <br>
                    Les habitants de cette planète sont tous passionné.e.s, l’air a un goût sucré et il fait bon vivre. Tous tes sens doivent être en éveil, parce que c’est surtout ta sensibilité artistique qui sera mise en avant dans notre monde. <br>
                    Découvre toutes les possibilités qui s’offrent à toi, du game designer, au maquettiste en passant par l’infographie… J’espère qu’une de ces voies sera celle dans laquelle tu t’épanouiras !<br>
                    Garde les yeux bien ouverts et laisse parler ta créativité ! - 

                    </p>
                </div>
                <img src="assets/img/perso_art.png" alt="" class="perso">
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
                <a role="button" href="#21"><img src="assets/img/web-designer.png" alt="" class="batiments webdesigner"></a>
                <a role="button" href="#26"><img src="assets/img/directeur-artistique-v2.png" alt="" class="batiments directeur"></a>
                <a role="button" href="#25"><img src="assets/img/motion-designer.png" alt="" class="batiments motion"></a>
                <a role="button" href="#24"><img src="assets/img/game-designer.png" alt="" class="batiments game"></a>
            </div>

            <div class="slide-3">
                <a role="button" href="#22"><img src="assets/img/designer.png" alt="" class="batiments designer"></a>
                <a role="button" href="#19"><img src="assets/img/infographiste-v2.png" alt="" class="batiments infographiste"></a>
                <a role="button" href="#20"><img src="assets/img/maquetiste.png" alt="" class="batiments maquettiste"></a>
                <a role="button" href="#23"><img src="assets/img/concepteur-media-v2.png" alt="" class="batiments concepteur"></a>
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
                    <li><a href="../planete_dev/index.php" class="nav-link">Développement</a></li>
                    <li><a href="../planete_com/index.php" class="nav-link">Communication</a></li>
                    <li class="nav-link planete_actuel">Art&Design</li>
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