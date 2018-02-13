<!DOCTYPE html>
<?php
/**
 * Database connection
 * @param $conn PDO
 * @param $exception
 * return $conn ou $exception
 */
require_once('database.php');
$sql = "SELECT * FROM article";
$stmt = $conn->prepare($sql);
$stmt->execute();
?>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/style.css">
  <title>Admin</title>
</head>

<body>
  <section class="admin">
    <h1 class="admin_title">Administrateur</h1>
    <div class="admin_addarticle">
      <p class="admin_addarticle_item">Ajouter un article</p>
      <p class="admin_addarticle_item "><a class="--border_radius"href="">+</a></p>
    </div>
    <div class="admin_section">
      <div class="admin_section_title">
        <h2 class="admin_section_title_item"><a class="link" href="#">Articles</a></h2>
        <h2 class="admin_section_title_item"><a class="link" href="#">Evenements</a></h2>
        <h2 class="admin_section_title_item"><a class="link" href="#">Tags</a></h2>
      </div>
      <div class="admin_section_table">
        <form method="POST">
          <table class="table">
          <tr class="table_ligne">
            <td class="table_id">id</td>
            <td class="table_column"> titre</td>
            <td class="table_column"> auteur</td>
            <td class="table_column">date</td>
            <td class="table_column">modifier</td>
            <td class="table_column">supprimer</td>
          </tr>
        <!-- METTRE SA DATABASE ICI -->
        <?php while (false !== $row = $stmt->fetch(PDO::FETCH_ASSOC)) :?>
            <tr>
                <td class="table_id"><a href=""><?=$row["id"]?></a></td>
                <td class="table_column"><a href=""><?=$row["title"]?></a></td>
                <td class="table_column"><a href=""><?=$row["author"]?></a></td>
                <td class="table_column"><a href=""><?=$row["date_publication"]?></a></td>
                <td class="table_column"><a href="">modifier</a></td>
                <td class="table_column"><a href="">supprimer</a></td>
            </tr>
        <?php endwhile;?>
          </table>

        </form>
      </div>
    </div>

  </section>
</body>

</html>
