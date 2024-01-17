<?php

    require('credentials.php');
    $connexion = new PDO("mysql:host=$host;dbname=$dbname;charset=$charset", $user, $password);

    if (isset($_POST['chambre']) || isset($_POST['suite']))
    {
      $chaine = "insert into idea (chambre, suite) values('" . $_POST['chambre'] . "', '" . $_POST['suite'] . "')";
      $requete = $connexion->prepare($chaine);
      $resultat = $requete->execute();
    }
    header("Location:.");
?>