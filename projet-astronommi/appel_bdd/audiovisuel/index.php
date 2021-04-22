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
        include('statut_secteur.php'); //On appel le fichier dans lequel il y a la requête pour statut et secteur
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
        echo '<p>Métier : '.$data['nom_metier'].'</p>
        <p>Présentation du métier : '.$data['intro'].'</p>
        <p>Niveau minimum d’accès : '.$data['annee_bac'].'</p>
        <p>Salaire débutant : '.$data['tranche'].' €</p>
        <p>Statut(s) : <br> ';
        include('statut_secteur.php');
        echo '</p>
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
        <p>Statut(s) : <br> ';
        include('statut_secteur.php');
        echo '</p>
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
    <p>Statut(s) : <br> ';
    include('statut_secteur.php');
    echo '</p>
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
    <p>Statut(s) : <br> ';
    include('statut_secteur.php');
    echo '</p>
    <p>Compétences requises : '.$data['competences'].'</p>
    <p>Métiers associés : '.$data['metiers_associes'].'</p>
    <p>Environnement : '.$data['environnement'].'</p>
    <p>Lieux d’exercices : '.$data['lieux_exercices'].'</p>
    <p>Formations : '.$data['formations'].'</p><br>';
    }
    $req = null;
    ?>

</body>

</html>