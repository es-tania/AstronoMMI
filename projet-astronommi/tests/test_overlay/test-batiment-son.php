<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="modal.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script type="text/javascript" src="app.js"></script>

<title>Planète Audiovisuel</title>
</head>
<body>

<div id="overlay">
  <div id="text">
  <div class="fiches">
  <a href="#!" role="button" class="close close-tablet" aria-label="close this modal" onclick="off()">
                            <svg viewBox="0 0 24 24">
                                <path d="M24 20.188l-8.315-8.209 8.2-8.282-3.697-3.697-8.212 8.318-8.31-8.203-3.666 3.666 8.321 8.24-8.206 8.313 3.666 3.666 8.237-8.318 8.285 8.203z" />
                            </svg>
                        </a>
  <?php 
    include('secret.php');             
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
        echo('<h2>'.$data['nom_sousdom'].'</h2>');
    };
    echo '  <div class="card">
                <div class="content-wrapper">
                    <h2 class="titre">'.$data['nom_metier'].'</h2>
                        <p class="intro">'.$data['intro'].'</p>
                        <p>...</p>
                </div>
                <a href="#'.$data['id_metier'].'" role="button" class="button">En savoir plus</a>
            </div>
            <div class="modal-wrapper modal" id="'.$data['id_metier'].'">
                <div class="modal-body">
                    <div class="modal-header">
                        <h2 class="titre">'.$data['nom_metier'].'</h2>
                        <a href="#!" role="button" class="close" aria-label="close this modal">
                            <svg viewBox="0 0 24 24">
                                <path d="M24 20.188l-8.315-8.209 8.2-8.282-3.697-3.697-8.212 8.318-8.31-8.203-3.666 3.666 8.321 8.24-8.206 8.313 3.666 3.666 8.237-8.318 8.285 8.203z" />
                            </svg>
                        </a>
                    </div>
                    <br>
                    <p>'.$data['intro'].'</p>
                    <br>
                    <p>Niveau minimum d’accès : '.$data['annee_bac'].'</p>
                    <br>
                    <p>Salaire débutant : '.$data['tranche'].' €</p>
                    <br>
                    <p>Statut(s) : <br>';
                    include('statut_secteur_sous_dom.php'); //On appel le fichier dans lequel il y a la requête pour statut et secteur
                    echo '</p>
                    <br>
                    <p>Compétences requises : '.$data['competences'].'</p>
                    <br>
                    <p>Métiers associés : '.$data['metiers_associes'].'</p>
                    <br>
                    <p>Environnement : '.$data['environnement'].'</p>
                    <br>
                    <p>Lieux d’exercices : '.$data['lieux_exercices'].'</p>
                    <br>
                    <p>Formations : '.$data['formations'].'</p>
                    </div>
                    <a href="#!" class="outside-trigger"></a>
                </div>';
                $sousdom_precedent = $data['nom_sousdom'];
                }
                $req = null;
            ?>
            </div>
      </div>
</div>

<!-- IMAGE BATIMENT SON -->

<!-- <div style="padding:20px">
  <h2>Overlay with Text</h2> -->
  <a onclick="on()"><img src="medias/batiment-son.png" alt="" class="batiment-son"></a>
</div>

<script>
function on() {
  document.getElementById("overlay").style.display = "block";
}

function off() {
  document.getElementById("overlay").style.display = "none";

}
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {

            console.log($("body").scrollTop());
        });
            </script>
   
</body>
</html> 
