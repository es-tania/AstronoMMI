<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/scroll_horizontal.css">
    <link rel="stylesheet" href="assets/styles.css">
    <link rel="stylesheet" href="assets/menu.css">
    <link rel="icon" type="image/png" href="assets/img/logo_avec_nom.png">
    <title>Planète Audiovisuel</title>
</head>

<body>
     <div id="overlay">
  <div id="text">
  <div class="fiches">
      <div class="haut-tablette">
  <a href="#!" role="button" class="close close-tablet" aria-label="close this modal" onclick="off()">
                            <svg viewBox="0 0 24 24">
                                <path d="M24 20.188l-8.315-8.209 8.2-8.282-3.697-3.697-8.212 8.318-8.31-8.203-3.666 3.666 8.321 8.24-8.206 8.313 3.666 3.666 8.237-8.318 8.285 8.203z" />
                            </svg>
                        </a>
  <?php 
    include('../../secret.php');             
    // Fiche métier du sous-domaine Décor 
    $sql = "SELECT *  
            FROM astro_metier, astro_sousdomaine, astro_salairejunior, astro_niveauminacces, astro_domaine
            WHERE astro_metier.id_domaine=astro_domaine.id_domaine
            AND astro_metier.id_sousdom=astro_sousdomaine.id_sousdom
            AND astro_metier.id_salaire=astro_salairejunior.id_salaire
            AND astro_metier.id_niveau=astro_niveauminacces.id_niveau
            AND astro_domaine.nom_domaine='Audiovisuel' 
            AND astro_sousdomaine.nom_sousdom='Montage/Son' 
            ORDER BY astro_sousdomaine.nom_sousdom;";
    // On prépare la requête avant l'envoi :
    $req = $link -> prepare($sql);
    $req -> execute();
    $sousdom_precedent = "";
    while($data = $req -> fetch()){
    // On affiche chaque résultat sous forme d'un item de la liste
    if($data['nom_sousdom'] != $sousdom_precedent){
        echo('<h2 class="titre-fiche-metier">Fiches métier du sous-domaine : '.$data['nom_sousdom'].'</h2></div> <section class="cartefiche">');
    };
    echo '
    <div class="card fiche dom-'.$data['id_domaine'].' sousdom-'.$data['id_sousdom'].'">
        <div class="content-wrapper">
            <h2 class="titre">'.$data['nom_metier'].'</h2>
            <p class="intro">'.$data['intro'].'</p>
            <p>...</p>
        </div>
        <a href="#'.$data['id_metier'].'" role="button" class="button">En savoir plus</a>
    </div>
    ';
                
                $sousdom_precedent = $data['nom_sousdom'];
                }
                $req = null;
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
            <div><img src="assets/img/perso_audiovisuel.png" alt="" class="homer"></div>
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
                        <a href="#" class="nav-link"><h2>Accueil</h2></a>
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
           

        </div>
    </div>


    <!-- Fonction qui permet de faire apparaître le menu de droite -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {

            console.log($("body").scrollLeft());
            $('.click-bouton').click(function () {
                $('.sidebar').toggleClass('active');
                $('button').toggleClass('active-2');
            });
    
            $("#icon-menu").click(function () {
                $(this).toggleClass("open");
            });
        });
    </script>

<!-- Code pour l'overlay (la tablette apparait) -->
    <script>
        function on() {
        document.getElementById("overlay").style.display = "block";
        }

        function off() {
        document.getElementById("overlay").style.display = "none";
        }
    </script>
</body>

</html>