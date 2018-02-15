<?php

if(!empty($_POST['title']) && strlen($_POST['title']) >= 3 && !empty($_POST['author']) && strlen($_POST['author']) >= 3 && !empty($_POST['area3']) && strlen($_POST['area3']) >= 50 && !empty($_POST['images']) && strlen($_POST['images']) >= 10) {
    $sql = "
    INSERT INTO
        `articles-table` 
        (`title`, `date`, `images`, `author`, `content`) 
    VALUES 
        (:title, :date, :images, :author, :content) 
";

    $description = nl2br($_POST['area3']);

    $req = $conn->prepare($sql);
    $req->bindParam(':title', $_POST['title']);
    $req->bindParam(':author', $_POST['author']);
    $req->bindParam(':date', $_POST['date']);
    $req->bindParam(':content', $description);
    $req->bindParam(':images', $_POST['images']);
    $req->execute();

    header('Location: index.php');

} else echo "remplissez tous les champs";


