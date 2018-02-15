<?php

$sql = "
    UPDATE 
        `articles-table` 
    SET 
        `id`=:id,`title`=:title,`date`=:date,`images`=:images,
        `author`=:author,`content`=:content WHERE id=:id
  ";
$req = $conn->prepare($sql);

$req->bindParam(':id', $_GET['id']);
$req->bindParam(':title', $_POST['title']);
$req->bindParam(':author', $_POST['author']);
$req->bindParam(':date', $_POST['date']);
$req->bindParam(':content', $_POST['area3']);
$req->bindParam(':images', $_POST['images']);

$req->execute();

header('Location: index.php');