<?php
$sql = "
    DELETE FROM 
        `articles-table` 
    WHERE 
        id=:id
  ";
$req = $conn->prepare($sql);

$req->bindValue(':id', $_GET['id']);

$req->execute();

header('Location: index.php');