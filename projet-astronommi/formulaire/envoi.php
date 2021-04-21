<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>Formulaire de contact</title>
</head>

<body>
    <?php 

    $link = new PDO('mysql:host=localhost;dbname=astronommi', 'root', '', array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));

    if(isset($_GET["courriel"])){
        if(isset($_GET["message"])){
        $sql = "INSERT INTO astro_formulaire(nom_utilisateur, prenom_utilisateur, courriel, `message`) VALUES (:nom, :prenom, :email, :message)";

        $req = $link -> prepare($sql);

        $req -> execute(array(":nom"=> $_GET["nom_utilisateur"],":prenom"=> $_GET["prenom_utilisateur"],":email"=> $_GET["courriel"], ":message"=> $_GET["message"]));
        $req = null;

        echo "<h1>Merci pour votre message !</h1>";
        }else{
         echo("<p>Merci de remplir le message</p>");
        }
    }else{
        echo("<p>Merci d'indiquer votre adresse mail</p>");
    };
?>
    <a href="index.php">Retour à l'accueil</a>
</body>

</html>