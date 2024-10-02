<?php
    if (!isset($_GET['id']) || !is_numeric($_GET['id']))
        header("Location:" . ($_SERVER['HTTP_REFERER']));

    require('../credentials.php');
    $connexion = new PDO("mysql:host=$host;dbname=$dbname;charset=$charset", $user, $password);

    $chaine = 'select * from category where Nom = ' . $_GET["Nom"];
    $requete = $connexion->prepare($chaine);
    $requete->execute();
    $categorie = $requete->fetch();


if (!$categorie)
  header("Location:" . $_SERVER['HTTP_REFERER']);

$chaine = 'select * from idea where category_id = ' . $_GET["id"];
$requete = $connexion->prepare($chaine);
$requete->execute();
$idees = $requete->fetchAll();


?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>
            Boîte à idées
        </title>
    </head>
    <body>
        Catégorie <?php print($categorie["Nom"]) ?>
        <table>
            <tr>
                <th>
                    Nom
                </th>
                <th>
                    Texte
                </th>
            </tr>
          <?php

          foreach ($idees as $idee)
          {
            $url = "../show.php?id=" . $idee['id'];
            ?>
              <tr>
                  <td>
                      <a href="<?php print($url) ?>">
                        <?php print($idee['Nom']) ?>
                      </a>
                  </td>
              </tr>
            <?php
          }
          ?>
        </table>
        <a href="..">Accueil</a>
        <a href=".">Catégories</a>
    </body>
</html>