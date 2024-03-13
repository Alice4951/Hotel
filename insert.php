<?php
    require('credentials.php');
    $connexion = new PDO("mysql:host=$host;dbname=$dbname;charset=$charset, $user, $password");

    if (isset($_POST['Catégorie']) && isset($_POST['Type']) && isset ($_POST['Options']) && isset ($_POST['Prix']))
    {
      $chaine = "insert into article (Catégorie, Type, Options, Prix) values('" . $_POST['Catégorie'] . "','" . $_POST['Type'] . "', '" . $_POST['Options'] . "', '" . $_POST['Prix'] . "')";
      $requete = $connexion->prepare($chaine);
      $resultat = $requete->execute();
    }
    header("Location:.");
?>