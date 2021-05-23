<?php
    echo '<div class="modal-wrapper modal" id="'.$data['id_metier'].'">
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
        <p><u><b>Salaire débutant</u></b> : '.$data['tranche'].' €</p>
        <br>
        <p><u><b>Statut(s)</u></b> : <br>';
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
    $sousdom_precedent = $data['nom_sousdom'];
    }
    $req = null;
?>