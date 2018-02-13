<?php
/**
 * Created by PhpStorm.
 * User: romainmetayer
 * Date: 13/02/2018
 * Time: 10:54
 */

require_once('database.php');

$query = $bdd->prepare("UPDATE events SET titre = :titre, lieu = :lieu, date = :date, description = :description, image = :image WHERE id = :id");

$query->bindParam(':titre', $_POST['title']);
$query->bindParam(':lieu', $_POST['place']);
$query->bindValue(':date', $_POST['date']);
$query->bindParam(':description', $_POST['description']);
$query->bindParam(':image', $_POST['img']);
$query->bindParam(':id', $_POST['eventID']);

$query->execute();

//var_dump($_POST);

header('Location: admin.php');
