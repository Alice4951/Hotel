<?php

    require('../credentials.php');
    $connexion = new PDO("mysql:host=$host;dbname=$dbname;charset=$charset", $user, $password);

    if (isset($_POST['Nom']))
    {
      $chaine = "update category set Nom = '" . $_POST['Nom'] . "' where id = " . $_GET['id'];
      $requete = $connexion->prepare($chaine);
      $resultat = $requete->execute();
    }
    header("Location:.");
?>
