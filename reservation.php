<!DOCTYPE HTML>

<html lang="fr-FR">
    
    <head>
        <title> Formulaire de Réservation </title>
        <link rel="stylesheet" href="style1.css">
    </head>

    <body>
        <h1>Réservation</h1>
        <form method="post" action="">
            Nom <input type="text" name="Nom"/><br>
            Prénom <input type="text" name="Prénom"/><br>
            Téléphone <input type="text" name="Téléphone"/><br>
            Email <input type="text" name="Email"/><br>
            Nombre de personne <input type="number" name="Nombre de personne"/><br>
            Chambre <input type="radio" name="Type"/> Suite <input type="radio" name="Type"><br>
            Type de chambre: Simple <input type="radio" name="Chambre"/> Double <input type="radio" name="Chambre"><br>
            Options:<br>
            Baignoire <input type="checkbox" name="Baignoire"/> Balcon <input type="checkbox" name="Balcon"><br>
            Mini bar <input type="checkbox" name="Mini bar"/> Télévision <input type="checkbox" name="Télévision"><br>
            <label>
            Délai du séjour du <input type="date"/> à <input type="date"/><br>
            </label>
            <input type="submit" value="Réserver"/>
        </form>
    </body>
</html>
