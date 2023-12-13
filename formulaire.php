<!DOCTYPE HTML>
<html>
    <head>
        <title> Formulaire d'Insertion </title>
        <link rel="stylesheet" href="style1.css">
    </head>

    <body>
        <h1>Exemple de service</h1>
        <form method="post" action="insert.php">
            Chambre <input type="radio" name="type" /><br> Prix: <ins>300€ pour une chambre</ins><br>
            Suite <input type="radio" name="type" /><br> Prix: <ins>2 personne: 400€, 3 personnes: 500€</ins><br>
            Nombre de chambre <input type="number" name="Nombre de chambre"/><br> Nombre de suite <input type="number" name="Nombre de suite"/><br>
            Type de chambre: Simple <input type="radio" name="chambre"/> Double <input type="radio" name="chambre"> Suite <input type="radio" name="chambre"><br>
            Si suite: 2 personnes: <input type="radio" name="suite"/> 3 personnes: <input type="radio" name="suite"/><br>
            Options:<br>
            Baignoire <input type="checkbox" name="Baignoire"/> Balcon <input type="checkbox" name="Balcon"><br>
            Mini bar <input type="checkbox" name="Mini bar"/> Télévision <input type="checkbox" name="Télévision"><br>
            <label>
            Délai du séjour du <input type="date"/> à <input type="date"/><br>
            </label>
        </form>
    </body>
</html>
