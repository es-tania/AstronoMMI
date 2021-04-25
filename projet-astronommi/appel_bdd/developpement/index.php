<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Développement - Métiers</title>
</head>

<body>
    <h1>Fiche métier du domaine du développement</h1>

    <?php 
    include('secret.php');
        
    // Fiche métier du sous-domaine Multimédia 
        $sql = "SELECT *  
        FROM astro_metier, astro_domaine, astro_salairejunior, astro_niveauminacces
        WHERE astro_domaine.nom_domaine='Développement'
        AND astro_metier.id_domaine=astro_domaine.id_domaine
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