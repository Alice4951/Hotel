<!DOCTYPE html>

<html lang="fr-FR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Nelumbo Hotel</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<header>Nelumbo Hotel</header>
    
<video class="video-lotus" autoplay loop muted>
    <source src="images/lotus_video.mp4" type="video/mp4">
</video>

    <body>
    <?php
            require('credentials.php');
            $connexion = new PDO("mysql:host=$host;dbname=$dbname;charset=$charset", $user, $password);

            $requete = $connexion->prepare('select * from article');
            $requete->execute();
            $idees = $requete->fetchAll();
        ?>
    <table>
            <tr>
                <th>
                    Catégorie
                </th>
                <th>
                    Type
                </th>
                <th>
                    Options
                </th>
                <th>
                    Prix
                </th>
            </tr>
            <?php
                
                foreach ($idees as $idee)
                {
                    $url = "show.php?id=" . $idee['id'];
                    ?>
                    <tr>
                        <td>
                            <a href="<?php print($url) ?>">
                                <?php print($idee['Catégorie']) ?>
                            </a>
                        </td>
                        <td>
                            <?php print($idee['Type']) ?>
                        </td>
                        <td>
                            <?php print($idee["Baignoire"]);
                                print($idee["Balcon"]);
                                print($idee["MiniBar"]);
                                print($idee["Télévision"]);
                                print($idee["Vue"]) ?>
                        </td>
                        <td>
                            <?php print($idee['Prix']) ?>
                        </td>
                    </tr>
                    <?php
                }
            ?>
        </table>
        <form method="post" action="insert.php">

            <p>Catégorie <input name="Catégorie"></p>

            <p>Type:</p>
            Si chambre: Simple <input type="radio" name="Type" value="Simple"> Double <input type="radio" name="Type" value="Double"><br>
            Si suite: 2 personnes <input type="radio" name="Type" value="2 personnes"> 4 personnes <input type="radio" name="Type" value="4 personnes"> 6 personnes <input type="radio" name="Type" value="6 personnes"><br>
            
            <p>Options:</p>
            Baignoire <input type="checkbox" name="Baignoire" value="Baignoire"> Balcon <input type="checkbox" name="Balcon" value="Balcon"><br>
            Mini bar <input type="checkbox" name="MiniBar" value="MiniBar"> Télévision <input type="checkbox" name="Télévision" value="Télévision"><br>
            Avec vue <input type="checkbox" name="Vue" value="Vue">

            <p>Prix <input type="number" name="Prix"></p>
            <input type="submit" value="Ajouter l'article">
        </form>
    </body>
</html>

<div class="mentions">
    <a href="mentions_legales.html"> Accéder aux mentions légales</a>
</div>

</body>

</html>
