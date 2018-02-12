<?php
/**
 * Database connection
 * @param $conn PDO
 * @param $exception
 * return $conn ou $exception
 */
try {
    $conn = new PDO('mysql:host=127.0.0.1; dbname=roadr', 'root', 'motdepasse');
} catch(PDOException $exception) {
    die($exception->getMessage());
}

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
        </tr>
    <?php endwhile;?>
</table>

