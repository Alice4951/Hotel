<?php
    require('credentials.php');
    $connexion = new PDO("mysql:host=$host;dbname=$dbname;charset=$charset", $user, $password);

    if (isset($_POST['Catégorie']) && isset($_POST['Pers']))
    {
      $chaine = "insert into reservation (Catégorie, Pers, Options) values('" . $_POST['Chambre'] . "','" . $_POST['Suite'] . "', '" . $_POST['Simple'] . "', '" . $_POST['Double'] . "', '" . $_POST['2 personnes'] . "','" . $_POST['3 personnes'] . "', '" . $_POST['Baignoire'] . "', '" . $_POST['MiniBar'] . "', '" . $_POST['Balcon'] . "','" . $_POST['Télévision'] . "', '" . $_POST['Vue'] . "')";
      $requete = $connexion->prepare($chaine);
      $resultat = $requete->execute();
    }
    header("Location:.");
?>