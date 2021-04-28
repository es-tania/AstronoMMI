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
    <h2>Multimédia</h2>

    <?php 
    include('secret.php');
        
    // Fiche métier du sous-domaine Multimédia 
        $sql = "SELECT *  
        FROM astro_metier, astro_sousdomaine, astro_salairejunior, astro_niveauminacces
        WHERE astro_sousdomaine.nom_sousdom='Multimédia' 
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

    <h2>Presse</h2>

    <?php 
    include('secret.php');
        
    // Fiche métier du sous-domaine Presse
        $sql = "SELECT *  
        FROM astro_metier, astro_sousdomaine, astro_salairejunior, astro_niveauminacces
        WHERE astro_sousdomaine.nom_sousdom='Presse' 
        AND astro_metier.id_sousdom=astro_sousdomaine.id_sousdom
        AND astro_metier.id_salaire=astro_salairejunior.id_salaire
        AND astro_metier.id_niveau=astro_niveauminacces.id_niveau";
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

    <h2>Management</h2>

    <?php 
    // Fiche métier du sous-domaine Management
        $sql = "SELECT *  
        FROM astro_metier, astro_sousdomaine, astro_salairejunior, astro_niveauminacces
        WHERE astro_sousdomaine.nom_sousdom='Management' 
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

    <?php 

    // astro_secteurpro, astro_rel_secteur_metier, astro_rel_statut_metier, astro_statut
    // AND astro_rel_secteur_metier.id_secteur=astro_secteurpro.id_secteur
        // AND astro_metier.id_metier=astro_rel_secteur_metier.id_metier
        // AND astro_rel_statut_metier.id_statut=astro_statut.id_statut
        // AND astro_metier.id_metier=astro_rel_statut_metier.id_metier
        // ;";


        // while($data = $req -> fetch()){
            //     echo '<p>'.$data['nom_statut'].'</p>';
            // };
            // $req = null;
            // while($data = $req -> fetch()){
            //     echo '<p>'.$data['nom_secteur'].'</p>';
            // }
            // $req = null;
        // '<li>'.$data['competences'].'</li><li>'.$data['metiers_associes'].'</li><li>'.$data['environnement'].'</li><li>'.$data['lieux_exercices'].'</li><li>'.$data['formations'].'</li>';
    ?>
    <!-- Question 4 -->

</body>

</html>