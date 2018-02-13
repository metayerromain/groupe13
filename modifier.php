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

    }
}
else // Il manque des paramètres, on avertit le visiteur
{
    echo 'Il faut renseigner l\'id !';
}
?>

<form method="POST" action="update.php">
    <span>titre:</span><input value="<?=$titre;?>" type="text" name="title" /> <br />
    <span>lieu:</span><input value="<?=$lieu;?>" type="text" name="place" /> <br />
    <span>description:</span><input value="<?=$description;?>" type="text" name="description" /> <br />
    <span>date:</span><input value="<?=$date;?>" type="date" name="date" /> <br />
    <span>image:</span><input value="<?=$image;?>" type="text" name="img" /> <br />
    <input type="hidden" name="eventID" value="<?=$_GET['id']?>" />
    <input type="submit" value="click" />
</form>