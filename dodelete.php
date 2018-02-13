<?php
/**
 * Created by PhpStorm.
 * User: romainmetayer
 * Date: 13/02/2018
 * Time: 16:10
 */

require_once('database.php');

if (isset($_POST['id'])) // On a le nom et le prénom
{
    $id = $_POST['id'];

    $query = $bdd->prepare("DELETE FROM events WHERE id = :id");
    $query->bindParam(":id", $id);
    $query->execute();

    header('Location: admin.php');


}