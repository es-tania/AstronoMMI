<?php include('../../secret.php');             
    // Fiche métier du sous-domaine Décor 
    $sql = "SELECT *  
            FROM astro_metier, astro_sousdomaine, astro_salairejunior, astro_niveauminacces, astro_domaine
            WHERE astro_metier.id_domaine=astro_domaine.id_domaine
            AND astro_metier.id_sousdom=astro_sousdomaine.id_sousdom
            AND astro_metier.id_salaire=astro_salairejunior.id_salaire
            AND astro_metier.id_niveau=astro_niveauminacces.id_niveau
            AND astro_domaine.nom_domaine='Communication' 
            AND astro_sousdomaine.id_sousdom=astro_metier.id_sousdom
            ORDER BY astro_sousdomaine.nom_sousdom;";
    // On prépare la requête avant l'envoi :
    $req = $link -> prepare($sql);
    $req -> execute();
    $sousdom_precedent = "";
    while($data = $req -> fetch()){
    // On affiche chaque résultat sous forme d'un item de la liste
    if($data['nom_sousdom'] != $sousdom_precedent){
        echo('</section>
        </div>
        <div class="fiches">
        <h2 class="titre-fiche-metier sousdom-'.$data['id_sousdom'].'">Fiches métier du sous-domaine : '.$data['nom_sousdom'].'</h2>
        <section class="cartefiche sousdom-'.$data['id_sousdom'].'">');
    };
    echo '
    <div class="card fiche dom-'.$data['id_domaine'].'">
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