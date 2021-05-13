<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="modal.css">
    <title>Communication - Métiers</title>
</head>

<body>
    <h1>Fiche métier du domaine de la communication</h1>

    <?php 
    include('secret.php');
        
    // Fiche métier du sous-domaine Multimédia 
        $sql = "SELECT *  
        FROM astro_metier, astro_sousdomaine, astro_salairejunior, astro_niveauminacces, astro_domaine
        WHERE astro_metier.id_domaine=astro_domaine.id_domaine
        AND astro_domaine.nom_domaine='Communication' 
        AND astro_metier.id_sousdom=astro_sousdomaine.id_sousdom
        AND astro_metier.id_salaire=astro_salairejunior.id_salaire
        AND astro_metier.id_niveau=astro_niveauminacces.id_niveau
        ORDER BY astro_sousdomaine.nom_sousdom;";
        // On prépare la requête avant l'envoi :
        $req = $link -> prepare($sql);
        $req -> execute();
        $sousdom_precedent = "";
        while($data = $req -> fetch()){
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

</body>

</html>