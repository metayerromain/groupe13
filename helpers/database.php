<?php

try {
    $conn = new PDO('mysql:host=127.0.0.1; dbname=roadr', 'root', 'motdepasse');

} catch(PDOException $exception) {
    die("Arrrrrghhhh X_x");
}