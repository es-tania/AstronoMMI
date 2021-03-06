<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="modal.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- <script type="text/javascript" src="app.js"></script> -->
    <title>Filtres - Métiers</title>
</head>

<body>
    <h1>Filtres</h1>

    <?php 
    include('filtre.html');
    echo('<br>')
    
    ?>
    <!-- <h1>Fiche métier du domaine de l'Art&Design</h1> -->

     <?php
    include('secret.php');
        
    // Fiche métier du sous-domaine Décor 
        $sql = "SELECT *  
        FROM astro_metier, astro_domaine, astro_salairejunior, astro_niveauminacces
        WHERE astro_domaine.id_domaine= astro_metier.id_domaine 
        AND astro_metier.id_salaire=astro_salairejunior.id_salaire
        AND astro_metier.id_niveau=astro_niveauminacces.id_niveau
        ORDER BY astro_domaine.nom_domaine, astro_metier.nom_metier;";
        // On prépare la requête avant l'envoi :
        $req = $link -> prepare($sql);
        $req -> execute();
        $nom_domaine_precedent = "";
        while($data = $req -> fetch()){
        // On change de domaine ? 
            if($data['nom_domaine'] != $nom_domaine_precedent){
            echo('<h1>'.$data['nom_domaine'].'</h1>');
            };
        // On affiche chaque résultat sous forme d'un item de la liste
        echo '
        <div class="card fiche d-'.$data['id_domaine'].'">
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
                    include('statut_secteur.php'); //On appel le fichier dans lequel il y a la requête pour statut et secteur
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
                </div>
            </div>';
                $nom_domaine_precedent = $data['nom_domaine'];
        }
        $req = null; 
    ?>

</body>

</html>