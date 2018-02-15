<?php

require_once ('../helpers/database.php');

if (isset($_GET['id']))
{
    $id = $_GET['id'];

    $query = $conn->prepare("SELECT * FROM `articles-table` WHERE id = :id");
    $query->bindParam(":id", $id);
    $query->execute();


    $count = $query->rowCount();
    if($count == 0) {
        echo "L'article n'existe pas !";
        exit;
    }

    while($row = $query->fetch()) {

        $date = $row['date'];
        $titre = $row['title'];
        $author = $row['author'];
        $description = $row['content'];
        $image = $row['images'];

    }
}
else
{
    echo 'Il faut renseigner l\'id !';
}
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/front/css/reset.css">
    <link rel="stylesheet" href="/front/css/styles.css">
    <title>RoadR</title>
</head>
<body style="background-image: url(<?=$image;?>); background-position:center; background-attachment: fixed; background-size: cover;" >

<div id="header" class="header">
    <div class="container1">
        <div class="flex">
            <a class="headerLogo" href="/front/index2.php"><img class="headerLogoimg" src="/front/img/Logo.png" alt=""></a>

            <ul class="mainNavigation">
                <li class="listItem"><a class="listItem-link" href="/about.html">ACTUALITES</a></li>
                <li class="listItem"><a class="listItem-link" href="/blog.html">INNOVATIONS</a></li>
                <li class="listItem"><a class="listItem-link" href="/podcast.html">MARQUES</a></li>
                <li class="listItem"><a class="listItem-link adminLink" href="../index.php">ADMIN</a></li>
                <li class="listItem"><input class="search" placeholder="Recherche"></a></li>
                <a class="SearchLoup" href=""><img class="searchLogoimg" src="/front/img/search.png" alt=""></a>
            </ul>
            </nav>
        </div>
    </div>
</div>

    <section class="read">

      <div class="flexItem">
          <p class="read_autorAndDate"><?=$date;?></p>
          <p class="read_container_title bolder"><?=$titre;?></p>
          <p class="read_description_item"><?=$description;?></p>
          <span class="read_autorAndDate"><?=$author;?></span>
      </div>


      </div>
      </div>
    </section>

