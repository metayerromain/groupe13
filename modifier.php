<?php
/**
 * Created by PhpStorm.
 * User: romainmetayer
 * Date: 13/02/2018
 * Time: 00:55
 */

require_once('database.php');

if (isset($_GET['id'])) // On a le nom et le prénom
{
    $id = $_GET['id'];

    $query = $bdd->prepare("SELECT * FROM events WHERE id = :id");
    $query->bindParam(":id", $id);
    $query->execute();

    while($row = $query->fetch()) {

        $date = $row['date'];
        $titre = $row['titre'];
        $lieu = $row['lieu'];
        $description = $row['description'];
        $image = $row['image'];

        echo "<h1>Titre</h1>";
        echo "<input value=".$titre."></input>";
        echo "<br/>";

        echo "<h1>Lieu</h1>";
        echo "<input value=".$lieu."></input>";
        echo "<br/>";

        echo "<h1>Date</h1>";
        echo "<input value=".$date."></input>";
        echo "<br/>";

        echo "<h1>Description</h1>";
        echo "<input value=".$description."></input>";
        echo "<br/>";

        echo "<h1>URL de l'image</h1>";
        echo "<input value=".$image."></input>";
        echo "<br/>";
    }
    echo "<button>Envoyer les modifs</button>";
}
else // Il manque des paramètres, on avertit le visiteur
{
    echo 'Il faut renseigner l\'id !';
}
?>