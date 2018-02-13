<?php
/**
 * Created by PhpStorm.
 * User: romainmetayer
 * Date: 13/02/2018
 * Time: 01:12
 */

require_once('database.php');

if (isset($_GET['id'])) // On a le nom et le prénom
{
    $id = $_GET['id'];

    $query = $bdd->prepare("DELETE FROM events WHERE id = :id");
    $query->bindParam(":id", $id);
    $query->execute();

    echo 'l\'article numéro ' .$_GET['id']. ' à bien été supprimé';
    echo "<br/>";
    echo "<a href='events.php'>Retour à l'accueil</a>";

}
else // Il manque des paramètres, on avertit le visiteur
{
    echo 'Il faut renseigner l\'id !';
}