<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page filtre</title>
    <link rel="stylesheet" href="assets/styles.css">
    <link rel="stylesheet" href="assets/modal.css">
    <link rel="icon" type="image/png" href="assets/image/logo_avec_nom.png">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type="text/javascript" src="assets/app.js"></script>
</head>

<body>
    <main>
        <h1>Trier les fiches métiers<br> selon votre envie</h1>
        <section class="filtre">
            <h2>Filtre</h2>
            <!--Filtre-->
            <form action="index.php" method="POST">
                <h2>Domaine</h2>
                
                <input type="checkbox" name="art&design" id="art" class="check"><label for="art">Art&Design</label><br>

                <input type="checkbox" name="domaine" value="audiovisuel" id="audio" class="check"><label
                    for="audio">Audiovisuel</label><br>

                <input type="checkbox" name="communication" id="com" class="check"><label for="com">Communication</label><br>

                <input type="checkbox" name="développement" id="dev" class="check"><label for="dev">Développement</label>


                <h2>Sous-domaine</h2>
                <input type="checkbox" name="sous-domaine" value="decor" id="decor" class="sousdom check"><label for="decor">Décor</label>

                <input type="checkbox" name="sous-domaine" id="image" class="sousdom check"><label for="image">Image</label><br>

                <input type="checkbox" name="sous-domaine" id="montage" class="sousdom check"><label for="montage">Montage/Son</label>

                <input type="checkbox" name="sous-domaine" id="direction" class="sousdom check"><label for="direction">Direction</label><br>

                <input type="checkbox" name="sous-domaine" id="texte" class="sousdom check"><label for="texte">Texte/écrit</label>


                <!-- Sous-domaine pour communication -->
                <input type="checkbox" name="sous-domaine" id="multimedia" class="sousdom check"><label
                    for="multimedia">Multimédia</label><br>

                <input type="checkbox" name="sous-domaine" id="presse" class="sousdom check"><label for="presse">Presse</label>

                <input type="checkbox" name="sous-domaine" id="management" class="sousdom check"><label for="management">Management</label>


                <h2>Niveau minimum d'accès</h2>
                <input type="checkbox" name="bac2" id="bac2" class="check"><label for="bac2" >Bac +2</label>

                <input type="checkbox" name="bac3" id="bac3" class="check"><label for="bac3">Bac +3</label><br>

                <input type="checkbox" name="bac5" id="bac5" class="check"><label for="bac5">Bac +5</label>


                <h2>Salaire</h2>
                <input type="checkbox" id="1500" class="check"><label for="1500">1500-2000€</label><br>

                <input type="checkbox" id="2000" class="check"><label for="2000">2000-2500€</label><br>

                <input type="checkbox" id="2500" class="check"><label for="2500">2500-3500€</label><br>

                <input type="checkbox" id="3000" class="check"><label for="3000">3000-3500€</label><br>

                <input type="checkbox" id="3500" class="check"><label for="3500">3500-4000€</label><br>

                <input type="checkbox" id="droit" class="check"><label for="droit">Payer en droit d'auteur</label><br>


                <h2>Statut</h2>
                <input type="checkbox" name="artisan" id="artisan" class="check"><label for="artisan">Artisan</label><br>

                <input type="checkbox" name="intermittent" id="intermittent" class="check"><label for="intermittent">Intermittent du
                    spectacle</label><br>

                <input type="checkbox" name="salarié" id="salarie" class="check"><label for="salarie">Salarié</label><br>

                <input type="checkbox" name="indépendant" id="independant" class="check"><label
                    for="independant">Indépendant(free-lance)</label><br>
            </form>
        </section>
        <!--Fiche métier-->
        <section class="cartefiche">
            <h2>Fiche métier</h2>
            <!-- <div class="metier"></div> -->
            <div class="fiches">
                <?php include('carte.php')?>
            </div>
        </section>
    </main>
    <!-- Modal -->
    <?php include('metiers.php')?>

    <img src="assets/image/tablette1.png" alt="" class="tablette">
    <a href="../../index.php"><img src="assets/image/logo_avec_nom.png" alt="" class="logo"></a>

</body>

</html>