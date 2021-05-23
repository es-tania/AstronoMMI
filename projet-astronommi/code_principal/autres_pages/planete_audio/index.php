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
    <title>Planète Audiovisuel</title>
</head>

<body>
    <?php include('../page_chargement/page_chargement.php')?>
    <div class="overlay">
        <img src="assets/img/tablette.png" alt="" class="tablette">
        <div id="text">
            <div class="fiches">
                <div>
                    <a href="#!" role="button" class="close close-tablet" aria-label="close this modal" onclick="off()">
                        <img src="assets/img/precedent.png" alt="" class="precedent">
                    </a>
                    <?php include('carte.php')
                        
                    ?>
                </div>
                </section>
            </div>
        </div>
        <?php include('metiers.php')?>

        <div class="container">
            <!--Ces deux premières div permettant de faire le scroll horizontal-->
            <div class="blocHorizontal">


                <!-- Elements sur la planètes (batiments, personnages etc) -->
                <div><img src="assets/img/perso_audiovisuel.png" alt="" class="perso"></div>
                <a onclick="on()"><img src="assets/img/batiment-son.png" alt="" class="batiments son"></a>
                <a onclick="on()"><img src="assets/img/image.png" alt="" class="batiments image"></a>
                <a onclick="on()"><img src="assets/img/Decor.png" alt="" class="batiments decor"></a>
                <a onclick="on()"><img src="assets/img/texte.png" alt="" class="batiments texte"></a>
                <a onclick="on()"><img src="assets/img/direction.png" alt="" class="batiments direction"></a>

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
                    <a href="#" class="nav-link">
                        <h2>Accueil</h2>
                    </a>
                    <h2>Planètes</h2>
                    <ul>
                        <li><a href="#" class="nav-link">Développement</a></li><br>
                        <li><a href="#" class="nav-link">Communication</a></li><br>
                        <li><a href="#" class="nav-link">Art&Design</a></li>
                    </ul>
                    <h2>Infos</h2>
                    <ul>
                        <li><a href="#" class="nav-link">Le BUT MMI</a></li><br>
                        <li><a href="#" class="nav-link">A propos</a></li><br>
                    </ul>
                </div>
            </nav>
        </div>


        

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script type="text/javascript">
        
            $(document).ready(function () {
                // Fonction qui permet de faire apparaître le menu de droite
                console.log($("body").scrollLeft());
                $('.click-bouton').click(function () {
                    $('.sidebar').toggleClass('active');
                    $('button').toggleClass('active-2');
                });

                $("#icon-menu").click(function () {
                    $(this).toggleClass("open");
                });

                
            });
            // Code pour l'overlay (la tablette apparait)

            function on() {
                $('.overlay').css('display', 'block');
            }

            function off() {
                $('.overlay').css('display', 'none');
            }

            <?php include('../page_chargement/app.js')?>
        </script>
</body>

</html>