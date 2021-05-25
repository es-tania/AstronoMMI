     <?php
    include('../../secret.php');
        
    // Fiche métier
        $sql = "SELECT *  
        FROM astro_metier, astro_domaine, astro_salairejunior, astro_niveauminacces
        WHERE astro_domaine.id_domaine= astro_metier.id_domaine 
        AND astro_metier.id_salaire=astro_salairejunior.id_salaire
        AND astro_metier.id_niveau=astro_niveauminacces.id_niveau
        ORDER BY astro_domaine.nom_domaine, astro_metier.nom_metier;";
        // On prépare la requête avant l'envoi :
        $req = $link -> prepare($sql);
        $req -> execute();
        while($data = $req -> fetch()){
        echo '
            <div class="modal-wrapper modal" id="'.$data['id_metier'].'">
                <div class="modal-body">
                    <div class="modal-header">
                        <h2 class="titre">'.$data['nom_metier'].'</h2>
                        <a href="#!" role="button" class="close" aria-label="close this modal">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            xmlns:svgjs="http://svgjs.com/svgjs" version="1.1" width="17" height="17" x="0" y="0"
                            viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                            <g>
                                <g xmlns="http://www.w3.org/2000/svg">
                                    <g>
                                        <path
                                            d="M342.271,255.38L501.124,96.525c7.032-7.026,10.888-16.367,10.876-26.298c-0.012-9.91-3.892-19.241-10.912-26.261    l-33.682-33.059c-7.008-7.008-16.331-10.271-26.249-10.271c-0.024,0-0.049,0-0.073,0c-9.93,0-19.241,3.227-26.237,10.228    L255.994,169.408L97.14,11.033C90.132,4.019,80.809,0.636,70.903,0.636c-0.024,0-0.036,0-0.061,0    c-9.918,0-19.241,3.257-26.262,10.283L10.9,44.284C3.892,51.286,0.024,60.451,0,70.368c-0.012,9.954,3.831,19.217,10.851,26.231    l158.866,158.82L10.839,414.259c-14.452,14.482-14.428,38.042,0.061,52.536l33.681,33.683    c7.263,7.263,16.792,10.891,26.322,10.885c9.505,0,19.011-3.615,26.237-10.847l158.854-158.859l158.854,158.866    c14.489,14.47,38.07,14.446,52.559-0.048l33.682-33.682c7.008-7.008,10.876-16.327,10.888-26.251    c0.024-9.954-3.831-19.301-10.851-26.308L342.271,255.38z M483.532,449.231l-33.682,33.686    c-4.801,4.808-12.646,4.844-17.447,0.044L264.772,315.323c-2.328-2.328-5.48-3.639-8.778-3.639s-6.45,1.311-8.778,3.639    L79.584,482.961c-2.316,2.308-5.783,3.983-8.705,3.575c-3.31-0.006-6.414-1.292-8.742-3.619l-33.682-33.686    c-4.813-4.821-4.838-12.647-0.048-17.442l167.644-167.631c2.328-2.328,3.637-5.486,3.637-8.777c0-3.293-1.31-6.45-3.637-8.778    L28.407,78.963c-2.316-2.308-3.577-5.4-3.577-8.698c0.012-3.31,1.297-6.414,3.625-8.742L62.137,27.84    c2.352-2.351,5.214-4.121,8.766-3.642c3.274,0,6.353,1.279,8.681,3.6L247.216,195.43c4.85,4.85,12.706,4.85,17.556,0    L432.404,28.421c2.303-2.31,5.383-2.954,8.681-2.954c0,0,0.012,0,0.024,0c3.31,0,6.414,0.668,8.742,2.996l33.682,33.371    c2.34,2.34,3.637,5.288,3.637,8.586c0,3.286-1.273,6.294-3.601,8.622L315.937,246.64c-4.85,4.85-4.85,12.687,0,17.536    l167.631,167.629c2.316,2.31,3.589,5.397,3.577,8.694C487.145,443.804,485.86,446.903,483.532,449.231z"
                                            fill="#00f6e8" data-original="#000000" />
                                    </g>
                                </g>
                            </svg>
                        </a>
                    </div>
                    <br>
                    <p>'.$data['intro'].'</p>
                    <br>
                    <p><u><b>Domaine</u></b> : '.$data['nom_domaine'].'</p>
                    <br>
                    <p><u><b>Niveau minimum d’accès</u></b> : '.$data['annee_bac'].'</p>
                    <br>
                    <p><u><b>Salaire débutant</u></b> : '.$data['tranche'].' €</p>
                    <br>
                    <p><u><b>Statut(s)</u></b> : <br>';
                    include('statut_secteur.php'); //On appel le fichier dans lequel il y a la requête pour statut et secteur
                    echo '</p>
                    <br>
                    <p><u><b>Compétences requises</u></b> : <br>'.$data['competences'].'</p>
                    <br>
                    <p><u><b>Métiers associés</u></b> : '.$data['metiers_associes'].'</p>
                    <br>
                    <p><u><b>Environnement</u></b> : '.$data['environnement'].'</p>
                    <br>
                    <p><u><b>Lieux d’exercices</u></b> : '.$data['lieux_exercices'].'</p>
                    <br>
                    <p><u><b>Formations</u></b> :<br> '.$data['formations'].'</p>
                </div>
                <a href="#!" class="outside-trigger"></a>
            </div>
        ';
        }
        $req = null; 
    ?>