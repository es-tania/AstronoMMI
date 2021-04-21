<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de contact</title>
</head>

<body>
    <form action="envoi.php" method="get">
            <legend>Pour nous contacter</legend>
            <input type="text" name="nom_utilisateur" id="nom_utilisateur" placeholder="Nom*">
            <input type="text" name="prenom_utilisateur" id="prenom_utilisateur" placeholder="Prénom*"><br>
            <input type="email" name="courriel" id="courriel" placeholder="Email*"><br>
            <textarea rows="5" cols="40" name="message" placeholder="Message"></textarea><br>
            <input type="submit" id="envoi" value="Envoyer">
    </form>
</body>

</html>