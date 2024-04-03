<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>
            Catégories des articles
        </title>
    </head>
    <body>
    <?php
        
        require('../credentials.php');
        $connexion = new PDO("mysql:host=$host;dbname=$dbname;charset=$charset", $user, $password);

        $requete = $connexion->prepare('select * from category');
        $requete->execute();
        $categories = $requete->fetchAll();
        if (count($categories) > 0)
        {
        ?>
        <table>
                <tr>
                    <th>
                        Nom
                    </th>
                </tr>
                <?php
                    
                    foreach ($categories as $categorie)
                    {
                        ?>
                        <tr>
                            <td>
                                <?php print($categorie['Nom']) ?>
                            </td>
                        </tr>
                <?php
                        }
                ?>
        </table>
    <?php
        }
        else
            print('Aucune catégorie à afficher');
   ?>
    <hr>
    <a href=".../categories/create.html">Ajouter</a>
    </body>
</html>