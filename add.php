<?php
/**
 * Created by PhpStorm.
 * User: romainmetayer
 * Date: 12/02/2018
 * Time: 18:13
 */

require_once('database.php');

$title = $_POST['title'];
$place = $_POST['place'];
$date = $_POST['date'];
$content = $_POST['description'];
$image = $_POST['img'];


$req = $bdd->prepare('INSERT INTO `roadr`.`events` (id, titre, lieu, date, description, image)
 VALUES (NULL, :title, :place, :date, :description, :img)');

$req->execute(array(
	'title' => $title,
	'place' => $place,
	'date' => $date,
	'description' => $content,
	'img' => $image
	));

    header('Location: events.php');

?>