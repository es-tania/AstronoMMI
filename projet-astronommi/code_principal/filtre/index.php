<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page filtre</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="modal.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type="text/javascript" src="app.js"></script>
</head>

<body>
    <main>
        <h1>Trier les fiches métiers<br> selon votre envie</h1>
        <section class="filtre">
            <h2>Filtre</h2>
            <!--Filtre-->
            <form action="index.php" method="POST">
                <h2>Domaine</h2>
                <input type="checkbox" name="domaine" value="audiovisuel" id="audiovisuel"><label
                    for="audiovisuel">Audiovisuel</label><br>

                <input type="checkbox" name="art&design" id="art"><label for="art">Art&Design</label><br>

                <input type="checkbox" name="communication" id="com"><label for="com">Communication</label><br>

                <input type="checkbox" name="développement" id="dev"><label for="dev">Développement</label>


                <h2>Sous-domaine</h2>
                <input type="checkbox" name="sous-domaine" value="decor" id="decor"><label for="decor">Décor</label>

                <input type="checkbox" name="sous-domaine" id="image"><label for="image">Image</label><br>

                <input type="checkbox" name="sous-domaine" id="montage"><label for="montage">Montage/Son</label>

                <input type="checkbox" name="sous-domaine" id="direction"><label for="direction">Direction</label><br>

                <input type="checkbox" name="sous-domaine" id="texte"><label for="texte">Texte/écrit</label>


                <!-- Sous-domaine pour communication -->
                <input type="checkbox" name="sous-domaine" id="multimedia"><label
                    for="multimedia">Multimédia</label><br>

                <input type="checkbox" name="sous-domaine" id="presse"><label for="presse">Presse</label>

                <input type="checkbox" name="sous-domaine" id="management"><label for="management">Management</label>


                <h2>Niveau minimum d'accès</h2>
                <input type="checkbox" name="bac2" id="bac2"><label for="bac2">Bac +2</label>

                <input type="checkbox" name="bac3" id="bac3"><label for="bac3">Bac +3</label><br>

                <input type="checkbox" name="bac5" id="bac5"><label for="bac5">Bac +5</label>


                <h2>Salaire</h2>
                <input type="checkbox" id="1500"><label for="1500">1500-2000€</label><br>

                <input type="checkbox" id="2000"><label for="2000">2000-2500€</label><br>

                <input type="checkbox" id="3000"><label for="3000">3000-3500€</label><br>

                <input type="checkbox" id="3500"><label for="3500">3500-4000€</label><br>


                <h2>Statut</h2>
                <input type="checkbox" name="artisan" id="audiovisuel"><label for="audiovisuel">Artisan</label><br>

                <input type="checkbox" name="intermittent" id="intermittent"><label for="intermittent">Intermittent du
                    spectacle</label><br>

                <input type="checkbox" name="salarié" id="salarie"><label for="salarie">Salarié</label><br>

                <input type="checkbox" name="indépendant" id="independant"><label
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

    <img src="image/tablette1.png" alt="" class="tablette">
    <a href="#"><img src="image/logo_avec_nom.png" alt="" class="logo"></a>

</body>

</html>