<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="modal.css">
    <title>Audiovisuel - Métiers</title>
</head>

<body>
    <h1>Fiche métier du domaine de l'audiovisuel</h1>
    <h2>Décor</h2>

    <?php 
    include('secret.php');
                    
    // Fiche métier du sous-domaine Décor 
    $sql = "SELECT *  
            FROM astro_metier, astro_sousdomaine, astro_salairejunior, astro_niveauminacces
            WHERE astro_sousdomaine.nom_sousdom='Décor' 
            AND astro_metier.id_sousdom=astro_sousdomaine.id_sousdom
            AND astro_metier.id_salaire=astro_salairejunior.id_salaire
            AND astro_metier.id_niveau=astro_niveauminacces.id_niveau;";
    // On prépare la requête avant l'envoi :
    $req = $link -> prepare($sql);
    $req -> execute();
    while($data = $req -> fetch()){
    // On affiche chaque résultat sous forme d'un item de la liste
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
                }
                $req = null;
            ?>
        
    <h2>Image</h2>

    <?php 
    include('secret.php');
        
    // Fiche métier du sous-domaine Image
    $sql = "SELECT *  
            FROM astro_metier, astro_sousdomaine, astro_salairejunior, astro_niveauminacces
            WHERE astro_sousdomaine.nom_sousdom='Image' 
            AND astro_metier.id_sousdom=astro_sousdomaine.id_sousdom
            AND astro_metier.id_salaire=astro_salairejunior.id_salaire
            AND astro_metier.id_niveau=astro_niveauminacces.id_niveau;";
    // On prépare la requête avant l'envoi :
    $req = $link -> prepare($sql);
    $req -> execute();
    while($data = $req -> fetch()){
    // On affiche chaque résultat sous forme d'un item de la liste
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
            </div>';
        }
        $req = null;
    ?>

    <h2>Montage/Son</h2>

    <?php 
    // Fiche métier du sous-domaine Montage
    $sql = "SELECT *  
            FROM astro_metier, astro_sousdomaine, astro_salairejunior, astro_niveauminacces
            WHERE astro_sousdomaine.nom_sousdom='Montage/Son' 
            AND astro_metier.id_sousdom=astro_sousdomaine.id_sousdom
            AND astro_metier.id_salaire=astro_salairejunior.id_salaire
            AND astro_metier.id_niveau=astro_niveauminacces.id_niveau;";
    // On prépare la requête avant l'envoi :
    $req = $link -> prepare($sql);
    $req -> execute();
    while($data = $req -> fetch()){
    // On affiche chaque résultat sous forme d'un item de la liste
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
            </div>';
        }
        $req = null;
    ?>

    <h2>Direction</h2>

    <?php 
    // Fiche métier du sous-domaine Montage
    $sql = "SELECT *  
            FROM astro_metier, astro_sousdomaine, astro_salairejunior, astro_niveauminacces
            WHERE astro_sousdomaine.nom_sousdom='Direction' 
            AND astro_metier.id_sousdom=astro_sousdomaine.id_sousdom
            AND astro_metier.id_salaire=astro_salairejunior.id_salaire
            AND astro_metier.id_niveau=astro_niveauminacces.id_niveau;";
    // On prépare la requête avant l'envoi :
    $req = $link -> prepare($sql);
    $req -> execute();
    while($data = $req -> fetch()){
    // On affiche chaque résultat sous forme d'un item de la liste
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
            </div>';
    }
    $req = null;
    ?>

    <h2>Texte/Ecrit</h2>

    <?php 
    // Fiche métier du sous-domaine Montage
    $sql = "SELECT *  
    FROM astro_metier, astro_sousdomaine, astro_salairejunior, astro_niveauminacces
    WHERE astro_sousdomaine.nom_sousdom='Texte/écrit' 
    AND astro_metier.id_sousdom=astro_sousdomaine.id_sousdom
    AND astro_metier.id_salaire=astro_salairejunior.id_salaire
    AND astro_metier.id_niveau=astro_niveauminacces.id_niveau;";
    // On prépare la requête avant l'envoi :
    $req = $link -> prepare($sql);
    $req -> execute();
    while($data = $req -> fetch()){
    // On affiche chaque résultat sous forme d'un item de la liste
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
                    <path
                        d="M24 20.188l-8.315-8.209 8.2-8.282-3.697-3.697-8.212 8.318-8.31-8.203-3.666 3.666 8.321 8.24-8.206 8.313 3.666 3.666 8.237-8.318 8.285 8.203z" />
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
    </div>';
    }
    $req = null;
    ?>

</body>

</html>