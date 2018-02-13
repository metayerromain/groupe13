<?php
/**
 * Database connection
 * @param $conn PDO
 * @param $exception
 * return $conn ou $exception
 */
try {
    $conn = new PDO('mysql:host=127.0.0.1; dbname=roadr', 'root', 'root');
} catch(PDOException $exception) {
    die($exception->getMessage());
}

$sql = "SELECT * FROM article";
$stmt = $conn->prepare($sql);
$stmt->execute();
?>

<table>
    <tr>
        <td colspan="2"><a href="">Ajouter un article</a></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <th>ID</th>
        <th>Titre</th>
        <th>Auteur</th>
        <th>date</th>
    </tr>

    <?php while (false !== $row = $stmt->fetch(PDO::FETCH_ASSOC)) :?>
        <tr>
            <td><a href=""><?=$row["id"]?></a></td>
            <td><a href=""><?=$row["titre"]?></a></td>
            <td><a href=""><?=$row["author"]?></a></td>
            <td><a href=""><?=$row["date_publication"]?></a></td>
            <td><a href="">Delete</a></td>
            <td><a href="">Modifier</a></td>
        </tr>
    <?php endwhile;?>
</table>
<!-- titre / article / date / auteur
