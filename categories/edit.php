<?php

    if (!isset($_GET['id']) || !is_numeric($_GET['id']))
        header("Location:.");

    require('../credentials.php');
    $connexion = new PDO("mysql:host=$host;dbname=$dbname;charset=$charset", $user, $password);

    $chaine = 'select * from category where id = ' . $_GET["id"];
    $requete = $connexion->prepare($chaine);
    $requete->execute();
    $category = $requete->fetch();

    if (!$category)
        header("Location:.");
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>
            Boîte à idées - Modification d'une catégorie
        </title>
    </head>
    <body>
        <form method="post" action="update.php?id=<?php print($_GET["id"]) ?>">
            <input name="Nom" value="<?php print($category['Nom']) ?>">
            <br>
            <input type="submit" value="Modifier la catégorie">
        </form>
    </body>
</html>
