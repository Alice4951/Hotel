<?php
    require('credentials.php');
    $connexion = new PDO("mysql:host=$host;dbname=$dbname;charset=$charset", $user, $password);

    if (isset($_POST['Numéro']) && isset($_POST['Type']) && isset ($_POST['Prix']) && isset ($_POST['category_id']) || isset ($_POST['Baignoire']) || isset ($_POST['Balcon']) || isset ($_POST['MiniBar']) || isset ($_POST['Télévision']) || isset ($_POST['Vue']))
    {
      $chaine = "insert into article (Numéro, Type, Baignoire, Balcon, MiniBar, Télévision, Vue, Prix, category_id) values('" . $_POST['Numéro'] . "', '" . $_POST['Type'] . "', '" . $_POST['Baignoire'] . "', '" . $_POST['Balcon'] . "', '" . $_POST['MiniBar'] . "', '" . $_POST['Télévision'] . "', '" . $_POST['Vue'] . "', '" . $_POST['Prix'] . "' , '" . $_POST['category_id'] . "')";
      $requete = $connexion->prepare($chaine);
      $resultat = $requete->execute();
    }
    header("Location:.");

?>