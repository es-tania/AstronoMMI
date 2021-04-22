<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
        echo '<p>Métier : '.$data['nom_metier'].'</p>
        <p>Intro :'.$data['intro'].'</p>
        <p>Niveau minimum d’accès : '.$data['annee_bac'].'</p>
        <p>Salaire débutant : '.$data['tranche'].' €</p>
        <p>Statut(s) : <br>';
            $sql2 = "SELECT `nom_statut`  
            FROM astro_metier, astro_sousdomaine, astro_rel_statut_metier, astro_statut
            WHERE astro_sousdomaine.nom_sousdom='Décor' 
            AND astro_metier.id_sousdom=astro_sousdomaine.id_sousdom
            AND astro_metier.id_metier=astro_rel_statut_metier.id_metier
            AND astro_rel_statut_metier.id_statut=astro_statut.id_statut;";
            // On prépare la requête avant l'envoi :
            $req2 = $link -> prepare($sql2);
            $req2 -> execute();
            while($data2 = $req2 -> fetch()){
            // On affiche chaque résultat sous forme d'un item de la liste
            echo $data2['nom_statut'].'<br>';
            }
            $req2 = null;
        echo '</p>
        <p>Secteur(s) professionnel(s) : <br>';
            $sql3 = "SELECT `nom_secteur`  
            FROM astro_metier, astro_sousdomaine, astro_rel_secteur_metier, astro_secteurpro
            WHERE astro_sousdomaine.nom_sousdom='Décor' 
            AND astro_metier.id_sousdom=astro_sousdomaine.id_sousdom
            AND astro_metier.id_metier=astro_rel_secteur_metier.id_metier
            AND astro_rel_secteur_metier.id_secteur=astro_secteurpro.id_secteur;";
            // On prépare la requête avant l'envoi :
            $req3 = $link -> prepare($sql3);
            $req3 -> execute();
            while($data3 = $req3 -> fetch()){
            // On affiche chaque résultat sous forme d'un item de la liste
            echo $data3['nom_secteur'].'<br>';
            }
            $req3 = null;
        echo '</p>
        <p>Compétences requises : '.$data['competences'].'</p>
        <p>Métiers associés : '.$data['metiers_associes'].'</p>
        <p>Environnement : '.$data['environnement'].'</p>
        <p>Lieux d’exercices : '.$data['lieux_exercices'].'</p>
        <p>Formations : '.$data['formations'].'</p>';
        }
        $req = null;
    ?>

    <h2>Image</h2>

    <?php 
    include('secret.php');
        
    // Fiche métier du sous-domaine Image
        $sql = "SELECT *  
        FROM astro_metier, astro_sousdomaine, astro_salairejunior, astro_niveauminacces, astro_rel_secteur_metier, astro_secteurpro
        WHERE astro_sousdomaine.nom_sousdom='Image' 
        AND astro_metier.id_sousdom=astro_sousdomaine.id_sousdom
        AND astro_metier.id_salaire=astro_salairejunior.id_salaire
        AND astro_metier.id_niveau=astro_niveauminacces.id_niveau
        AND astro_metier.id_metier=astro_rel_secteur_metier.id_metier
        AND astro_rel_secteur_metier.id_secteur=astro_secteurpro.id_secteur;";
        // On prépare la requête avant l'envoi :
        $req = $link -> prepare($sql);
        $req -> execute();
        while($data = $req -> fetch()){
        // On affiche chaque résultat sous forme d'un item de la liste
        echo '<p>Métier : '.$data['nom_metier'].'</p>
        <p>Présentation du métier : '.$data['intro'].'</p>
        <p>Niveau minimum d’accès : '.$data['annee_bac'].'</p>
        <p>Salaire débutant : '.$data['tranche'].' €</p>
        <p>Statut(s) :</p>
        <p>Secteur(s) professionnel(s) :'.$data['nom_secteur'].'</p>
        <p>Compétences requises : '.$data['competences'].'</p>
        <p>Métiers associés : '.$data['metiers_associes'].'</p>
        <p>Environnement : '.$data['environnement'].'</p>
        <p>Lieux d’exercices : '.$data['lieux_exercices'].'</p>
        <p>Formations : '.$data['formations'].'</p><br>';
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
        echo '<p>Métier : '.$data['nom_metier'].'</p>
        <p>Présentation du métier : '.$data['intro'].'</p>
        <p>Niveau minimum d’accès : '.$data['annee_bac'].'</p>
        <p>Salaire débutant : '.$data['tranche'].' €</p>
        <p>Statut(s) :</p>
        <p>Secteur(s) professionnel(s) :</p>
        <p>Compétences requises : '.$data['competences'].'</p>
        <p>Métiers associés : '.$data['metiers_associes'].'</p>
        <p>Environnement : '.$data['environnement'].'</p>
        <p>Lieux d’exercices : '.$data['lieux_exercices'].'</p>
        <p>Formations : '.$data['formations'].'</p><br>';
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
    echo '<p>Métier : '.$data['nom_metier'].'</p>
    <p>Présentation du métier : '.$data['intro'].'</p>
    <p>Niveau minimum d’accès : '.$data['annee_bac'].'</p>
    <p>Salaire débutant : '.$data['tranche'].' €</p>
    <p>Statut(s) :</p>
    <p>Secteur(s) professionnel(s) :</p>
    <p>Compétences requises : '.$data['competences'].'</p>
    <p>Métiers associés : '.$data['metiers_associes'].'</p>
    <p>Environnement : '.$data['environnement'].'</p>
    <p>Lieux d’exercices : '.$data['lieux_exercices'].'</p>
    <p>Formations : '.$data['formations'].'</p><br>';
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
    echo '<p>Intro :</p>
    <p>Métier : '.$data['nom_metier'].'</p>
    <p>Niveau minimum d’accès : '.$data['annee_bac'].'</p>
    <p>Salaire débutant : '.$data['tranche'].' €</p>
    <p>Statut(s) :</p>
    <p>Secteur(s) professionnel(s) :</p>
    <p>Compétences requises : '.$data['competences'].'</p>
    <p>Métiers associés : '.$data['metiers_associes'].'</p>
    <p>Environnement : '.$data['environnement'].'</p>
    <p>Lieux d’exercices : '.$data['lieux_exercices'].'</p>
    <p>Formations : '.$data['formations'].'</p><br>';
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