<?php

if (isset($_GET['id'])) {

    $sql = "
   SELECT * FROM `articles-table` WHERE id =:id
;";
    $req = $conn->prepare($sql);
    $req->bindValue(':id', $_GET['id']);
    $req->execute();
    $row = $req->fetch(PDO::FETCH_ASSOC);

    $count = $req->rowCount();
    if($count == 0) {
        echo "L'article n'existe pas !";
        exit;
    }
}
else
{
    echo 'Il faut renseigner l\'id !';
}
?>

<?php include 'templates/header.php'?>


<script type="text/javascript">
    //<![CDATA[
    var area1;
    bkLib.onDomLoaded(function() { area1 = new nicEditor({fullPanel : true}).panelInstance('area3',{hasPanel : true}); });

</script>

<form method="POST" action="./?type=articles/editAction&id=<?=$_GET['id']?>">
    <section class="create">
        <div class="create_left">
            <p class="create_title">Modifier votre article</p>

            <input class="input_container_title" value="<?= $row['title'] ?>" type="text" name="title" placeholder="Titre de l'évènement">
            <div class="flex">
                <input class="input_container_place" value="<?= $row['author'] ?>" type="text" name="author" placeholder="Lieux">
                <input class="input_container_date" value="<?= $row['date'] ?>" type="date" name="date">
            </div>


        </div>
        <textarea class="input_container_text" style="background-color: white;" name="area3" id="area3" type="text" placeholder="Description de l'évenement" rows="8" cols="80"><?=$row['content'];?></textarea>
        <div class="create_two">
            <input class="input_container_imported" value="<?= $row['images'] ?>" type="text" name="images" placeholder="URL de l'image">
            <input class="input_container_saved" type="submit" value="Valider">
        </div>
    </section>
</form>
</body>
</html>