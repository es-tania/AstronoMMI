<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Audiovisuel - Métiers</title>
</head>

<body>
    <h1>Fiche métier du domaine de l'Art&Design</h1>

    <?php 
    include('secret.php');
        
    // Fiche métier du sous-domaine Décor 
        $sql = "SELECT *  
        FROM astro_metier, astro_domaine, astro_salairejunior, astro_niveauminacces
        WHERE astro_domaine.nom_domaine='Art&Design' 
        AND astro_metier.id_domaine=astro_domaine.id_domaine
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

</body>

</html>