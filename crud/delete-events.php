<?php
$sql = "
    DELETE FROM 
        `events` 
    WHERE 
        id=:id
  ";
$req = $conn->prepare($sql);

$req->bindValue(':id', $_GET['id']);

$req->execute();

header('Location: ./?type=front/indexEvents');