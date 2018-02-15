<?php


$stmt = $conn->prepare("SELECT * FROM events");
$stmt->execute();
?>

<?php include 'templates/header.php'?>

<body>
<section class="admin">
    <h1 class="admin_title">Administrateur</h1>
    <div class="admin_addarticle">
        <div class="admin_addarticle_item">
            <h2 class="admin_section_title_item"><a class="link" href="./?type=front/index">Articles</a></h2>
            <h2 class="admin_section_title_item"><a class="link" href="./?type=front/indexEvents">Evenements</a></h2>
        </div>
        <a href="./?type=events/addFormEvents"><p class="admin_addarticle_item add">Ajouter</p></a>
    </div>

      <div class="admin_section">
          <div class="admin_section_table">
              <form method="POST">
                  <table class="table">
                      <thead>
                      <tr class="table_ligne">
                          <td class="table_img">image</td>
                          <td class="table_column">titre</td>
                          <td class="table_column"> auteur</td>
                          <td class="table_column">date</td>
                      </tr>
                      </thead>
                      <tbody>
        <!-- METTRE SA DATABASE ICI -->
        <?php
        while($row = $stmt->fetch()) {
            $id = $row["id"];
            $image = $row["image"];
            $lieu = $row["lieu"];
            $date = $row["date"];
            if (strlen($row["titre"]) >= 14){
                $title = mb_strimwidth($row["titre"], 0, 14);
            } else {
                $title = $row["titre"];
            }

            echo "
            <tr class='rowContent'>
                <td class='table_img'><img class='imgRow' src='$image'></td>
                <td class='table_column'><a href=''>$title</a></td>
                <td class='table_column cityLink'><a href='https://www.google.fr/maps/place/$lieu/' target='_blank'>$lieu</a></td>
                <td class='table_column'><a href=''>$date</a></td>
                <td class='table_column update'><a href='./?type=events/edit&id=$id'>modifier</a></td>
                <td class='table_column delete'><a href='./?type=events/delete&id=$id'>supprimer</a></td>
            </tr>
             <tr class='spacer'></tr>";
        }
        ?>
                      </tbody>
                  </table>

              </form>
          </div>
      </div>

  </section>
</body>
</html>