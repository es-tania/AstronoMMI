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
        while($data = $req -> fetch()){
        echo '
        <div class="card>
            <div class="content-wrapper">
                <h2 class="titre">'.$data['nom_metier'].'</h2>
                <p class="intro">'.$data['intro'].'</p>
                <p>...</p>
            </div>
            <a href="#'.$data['id_metier'].'" role="button" class="button">En savoir plus</a>
        </div>
        ';
        }
        $req = null; 
    ?>


