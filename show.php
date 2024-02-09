<?php
    if (!isset($_GET['id']) || !is_numeric($_GET['id']))
        header("Location:.");
    
    require('credentials.php');
    $connexion = new PDO("mysql:host=$host;dbname=$dbname;charset=$charset", $user, $password);

    $chaine = 'select * from article where id = ' . $_GET["id"];
    $requete = $connexion->prepare($chaine);
    $requete->execute();
    $idee = $requete->fetch();

    if (!$idee)
        header("Location:.");
?>

<!DOCTYPE html>

<html lang="fr-FR">

    <head>
        <meta charset="utf-8">

        <title>
            Article
        </title>
    </head>

    <body>
        <table>
            <tr>
                <td>
                    Catégorie :
                </td>
                <td>
                    <?php print($idee["Catégorie"]) ?>
                </td>
            </tr>
            <tr>
                 <td>
                    Type :
                </td>
                <td>
                    <?php print($idee["Type"]) ?>
                </td>
            </tr>
            <tr>
                <td>
                    Options :
                </td>
                <td>
                    <?php print($idee["Options"]) ?>
                </td>
            </tr>
            <tr>
                 <td>
                    Prix :
                </td>
                <td>
                    <?php print($idee["Prix"]) ?>
                </td>
            </tr>
        </table>
        <a href=".">Retour</a>
    </body>
</html>
