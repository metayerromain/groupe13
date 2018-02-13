<?php
/**
 * Created by PhpStorm.
 * User: romainmetayer
 * Date: 13/02/2018
 * Time: 00:38
 */

/**
 * PAGE DE BASE DES EVENEMENTS
 * ON POURRA ICI SUPPRIMER OU MODIFIER UN EVENEMENT
 */

require_once('database.php');

$query = $bdd->prepare("SELECT * FROM events");
$query->execute();

while($row = $query->fetch()) {
    $id = $row['id'];

    $date = $row['date'];
    $titre = $row['titre'];


    echo "<a href=\"modifier.php?id=$id\">modifier</a>
          <a href=\"delete.php?id=$id\">supprimer</a>
          <p>date : ".$date."</p>
          <p>titre : ".$titre."</p>";

    echo "<br/>";
}

    echo "<a href= form.html >ajouter un article</a>";