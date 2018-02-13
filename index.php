
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

<table>
    <?php while (false !== $row = $stmt->fetch(PDO::FETCH_ASSOC)) :?>
        <tr>
            <td><?=$row["id"]?></td>
            <td><?=$row["titre"]?></td>
            <td><?=$row["date"]?></td>
            <td><?=$row["author"]?></td>
        </tr>
    <?php endwhile;?>
</table>
