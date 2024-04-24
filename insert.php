<?php

    require('credentials.php');
    $connexion = new PDO("mysql:host=$host;dbname=$dbname;charset=$charset", $user, $password);

    if (isset($_POST['Nom']))
    {
      $chaine = "insert into category (Nom) values('" . $_POST['Nom'] . "')";
      $requete = $connexion->prepare($chaine);
      $resultat = $requete->execute();
      var_dump($resultat);
    }
    header("Location:.");
?>
