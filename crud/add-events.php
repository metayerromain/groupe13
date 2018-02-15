<?php

if(!empty($_POST['title']) && strlen($_POST['title']) >= 3 && !empty($_POST['place']) && strlen($_POST['place']) >= 3 && !empty($_POST['area3']) && strlen($_POST['area3']) >= 10 && !empty($_POST['img']) && strlen($_POST['img']) >= 10) {
    $sql = "
    INSERT INTO
        `events` 
        (`titre`, `date`, `image`, `lieu`, `description`) 
    VALUES 
        (:title, :date, :images, :place, :content) 
";

    $req = $conn->prepare($sql);
    $req->bindParam(':title', $_POST['title']);
    $req->bindParam(':place', $_POST['place']);
    $req->bindParam(':date', $_POST['date']);
    $req->bindParam(':content', $_POST['area3']);
    $req->bindParam(':images', $_POST['img']);
    $req->execute();

    header('Location: ./?type=front/indexEvents');
} else echo "remplissez tous les champs";
