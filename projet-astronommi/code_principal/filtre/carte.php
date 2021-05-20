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
        while($data = $req -> fetch()){
        echo '
        <div class="card fiche d-'.$data['id_domaine'].'">
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