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
            Suite <input type="radio" name="type" /><br> Prix : 2 personnes : <ins> 400€ <br> 3 personnes : </ins> 500€<br>
            Type de chambre: <input type="radio" name="chambre"/> Simple  <input type="radio" name="chambre"> Double <br>
            Si  vous avez pris une Suite: <input type="radio" name="suite"/> : 2 personnes <input type="radio" name="suite"/> : 3 personnes <br>
            Options:<br>
            Baignoire <input type="checkbox" name="Baignoire"/> Balcon <input type="checkbox" name="Balcon"><br>
            Mini bar <input type="checkbox" name="Mini bar"/> Télévision <input type="checkbox" name="Télévision"><br>
            <label>
            Délai du séjour du <input type="date"/> au <input type="date"/><br>
            </label>
        </form>
    </body>
</html>
