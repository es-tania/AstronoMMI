<!DOCTYPE html>
<html lang="en">

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
    <div class="container">
        <!--Ces deux premières div permettant de faire le scroll horizontal-->
        <div class="blocHorizontal">
            <!-- Elements sur la planètes (batiments, personnages etc) -->
            <img src="assets/img/fusee.png" alt="" class="fusee">
            <h1 class="destination">Destination :<br>Planète Communication</h1>
            <p class="presentation">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt fuga labore temporibus, placeat impedit nemo voluptatem odio fugit mollitia nobis, doloremque harum ut error distinctio. Quia atque molestiae dolorem facilis? Sunt fuga labore temporibus, placeat impedit nemo voluptatem odio fugit mollitia nobis, doloremque harum ut error distinctio. Quia atque molestiae dolorem facilis? Sunt fuga labore temporibus, placeat impedit nemo voluptatem odio fugit mollitia nobis, doloremque harum ut error distinctio. Quia atque molestiae dolorem facilis?</p>
            <div><img src="assets/img/Homer.png" alt="" class="perso"></div>

            <div class="slide">
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
                    <li class="nav-link planete_actuel">Communication</li>
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