<?php

    require('credentials.php');
    $connexion = new PDO("mysql:host=$host;dbname=$dbname;charset=$charset", $user, $password);

    if (isset($_POST['nom']) || isset($_POST['texte']))
    {
      $chaine = "insert into idea (nom, texte) values('" . $_POST['nom'] . "', '" . $_POST['texte'] . "')";
      $requete = $connexion->prepare($chaine);
      $resultat = $requete->execute();
    }
    header("Location:.");
?>